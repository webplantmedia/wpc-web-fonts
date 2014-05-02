/**
 * @author Chris Baldelomar
 * @website http://webplantmedia.com/
 */


(function($) {
	"use strict";

	var $body = $("body"), file_frame = [], media = wp.media;

	//fetch preExisting selection of galleries. change the gallery state based on wheter we got a selection or not to "Edit gallery" or "AAdd gallery"
	var fetchSelection = function(ids, options) {
		if(typeof ids === 'undefined') {
			return; //<--happens on multi_image insert for modal group
		}
	
		var id_array = ids.split(','),
			args = {orderby: "post__in", order: "ASC", type: "image", perPage: -1, post__in:id_array},
			attachments = wp.media.query( args ),
			selection = new wp.media.model.Selection( attachments.models, {
				props:    attachments.props.toJSON(),
				multiple: true
			});
			
			
		if(options.state === 'gallery-library' && id_array.length &&  !isNaN(parseInt(id_array[0],10))) {
			options.state = 'gallery-edit';
		}
		return selection;
	};

	var generateFontCss = function( fonts ) {
		var line1 = '', line2 = '', line3 = '', line4 = '', line5 = '', line6 = '',
			css = "", url, filename, parts, ext, name;

		if ( 'object' === typeof fonts ) {
			css += "@font-face {\n";
			for ( var key in fonts ) {
				url = fonts[ key ];
				filename = url.split('/').pop();
				parts = filename.split('.');
				ext = parts.pop();
				name = parts.pop();

				switch ( ext ) {
					case 'eot' :
						line1 = "    src: url('"+url+"');\n";
						line2 = "    src: url('"+url+"?iefix') format('embedded-opentype'),\n";
						break;
					case 'woff' :
						line3 = "        url('"+url+"') format('woff'),\n";
						break;
					case 'ttf' :
						line4 = "        url('"+url+"') format('truetype'),\n";
						break;
					case 'svg' :
						line5 = "        url('"+url+"#"+name+"') format('svg');\n";
						break;
					case 'otf' :
						line6 = "    src: url('"+url+"');\n";
						break;
				}
			}
			css += "    font-family: '"+name+"';\n";
			css += line1 + line2 + line3 + line4 + line5 + line6;
			css += "    font-weight: normal;\n";
			css += "    font-style: normal;\n";
			css += "}";

			return css;
		}
	};

	$body.on('click', '.wpcwf-image-upload', function( event ) {
		event.preventDefault();
		
		var clicked = $(this),
			options = clicked.data(),
			parent = clicked.parent(),
			target = parent.find(options.target),
			preview = parent.find(options.preview), // will not find <div> tag inside of <p>
			prefill = fetchSelection(target.val(), options),
			frame_key = _.random(0, 999999999999999999);
			//set vars so we know that an editor is open

		// If the media frame already exists, reopen it.
		if ( file_frame[frame_key] ) {
			file_frame[frame_key].open();
			return;
		}
		
		// Create the media frame.
		file_frame[frame_key]  = wp.media({
			frame: options.frame,
			state: options.state,
			library: { type: 'image' },
			button: { text: options.button },
			className: options['class'],
			selection: prefill
		});

		if ( 'wordpresscanvas_insert_single' === options.state ) {
			// add the single insert state
			file_frame[frame_key].states.add([
				// Main states.
				new media.controller.Library({
					id:         'wordpresscanvas_insert_single',
					title: clicked.data( 'title' ),
					priority:   20,
					toolbar:    'select',
					filterable: 'uploaded',
					library:    media.query( file_frame[frame_key].options.library ),
					multiple:   false,
					editable:   true,
					displayUserSettings: false,
					displaySettings: true,
					allowLocalEdits: true
					// AttachmentView: media.view.Attachment.Library
				})
			]);
		}
		else if ( 'wordpresscanvas_insert_multi' === options.state ) {
			// add the single insert state
			file_frame[frame_key].states.add([
				new media.controller.Library({
					id:         'wordpresscanvas_insert_multi',
					title: clicked.data( 'title' ),
					priority:   20,
					toolbar:    'select',
					filterable: 'uploaded',
					library:    media.query( file_frame[frame_key].options.library ),
					multiple:   'add',
					editable:   true,
					displayUserSettings: false,
					displaySettings: false,
					allowLocalEdits: true
					// AttachmentView: media.view.Attachment.Library
				})
			]);
		}
		else if ( 'wordpresscanvas_insert_fonts' === options.state ) {
			// add the single insert state
			file_frame[frame_key].states.add([
				new media.controller.Library({
					id:         'wordpresscanvas_insert_fonts',
					title: clicked.data( 'title' ),
					priority:   20,
					toolbar:    'select',
					filterable: 'uploaded',
					library:    media.query( {type: "application,image/svg+xml", orderby: "date", query: true} ),
					multiple:   true,
					editable:   false,
					displayUserSettings: false,
					displaySettings: false,
					allowLocalEdits: false
					// AttachmentView: media.view.Attachment.Library
				})
			]);
		}

		// When an image is selected, run a callback. 
		// Bind to various events since single insert and multiple trigger on different events and work with different data
		file_frame[frame_key].on( 'select update insert', function(e) {
			var selection, state = file_frame[frame_key].state();
			
			// multiple items
			if(typeof e !== 'undefined') {
				selection = e;
			}
			// single item
			else {
				selection = state.get('selection');
			}
			
			var values , display, element, preview_html= "", preview_img;
				
			values = selection.map( function( attachment ) {
				element = attachment.toJSON();
				
				if ( 'url' === options.fetch ) {
					display = state.display( attachment ).toJSON();
					
					if ( 'undefined' === typeof element.sizes ) {
						preview_img = element.url;
						preview_html += "<img src='"+preview_img+"' />";
					}
					else if ( ( 'string' === typeof options.imgsize ) && ( 'object' === typeof element.sizes[ options.imgsize ] ) ) {
						preview_img = element.sizes[ options.imgsize ].url;
						preview_html += "<img src='"+preview_img+"' />";
					}
					else {
						preview_img = element.sizes[display.size].url;
						preview_html += "<img src='"+preview_img+"' />";
					}
					
					return preview_img;
				}
				else if(options.fetch === 'id') {
					preview_img = typeof element.sizes.thumbnail !== 'undefined'  ? element.sizes.thumbnail.url : element.url ;
					preview_html += "<img src='"+preview_img+"' />";
					
					return element[options.fetch];
				}
				else {
					return element.url;
				}
			});
			
			if ( target.length ) {
				if ( 'wordpresscanvas_insert_fonts' === options.state ) {
					target.val( generateFontCss( values ) );
				}
				else {
					target.val( values.join(',') ).trigger('change');
				}
			}
			
			if ( preview.length ) {
				preview.html( preview_html ).show();
			}
		});

		// Finally, open the modal
		file_frame[frame_key].open();
	})
	.on('click', '.wpcwf-restore-image', function( e ) {
		e.preventDefault();

		var clicked = $(this),
			options = clicked.data(),
			parent  = clicked.parent(),
			target  = parent.find(options.target),
			preview = parent.find(options.preview);

		$(target).val(options.restore);

		if ( preview.length && options.restore.length ) {
			$(preview).html('<img src="'+options.restore+'" />').show();
		}
		else {
			$(preview).html("").hide();
		}
	})
	.on('click', '.wpcwf-delete-image', function( e ) {
		e.preventDefault();

		var clicked = $(this),
			options = clicked.data(),
			parent  = clicked.parent(),
			target  = parent.find(options.target),
			preview = parent.find(options.preview);

		$(target).val('');

		if ( preview.length ) {
			$(preview).html("").hide();
		}
	})
	.on('click', '.wpcwf-delete-font', function( e ) {
		e.preventDefault();

		var clicked = $(this),
			parent = clicked.parent();

		var r = confirm("Are you sure you want to delete this font?");

		if ( true === r ) {
			parent.remove();
		}
	});
})(jQuery);
