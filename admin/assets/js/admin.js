(function ( $ ) {
	"use strict";

	$(function () {

		// Place your administration-specific JavaScript here
	
		function wcGetVariantCSS( variant ) {
			switch ( variant ) {
				case '100' :
					return ' font-weight: 100;';
				case '100italic' :
					return ' font-weight:100; font-style:italic;';
				case '200' :
					return ' font-weight:200;';
				case '200italic' :
					return ' font-weight:200; font-style:italic;';
				case '300' :
					return ' font-weight:300;';
				case '300italic' :
					return ' font-weigth:300; font-style:italic;';
				case 'regular' :
					return ' font-weight:400;';
				case 'italic' :
					return ' font-weight:400; font-style:italic;';
				case '500' :
					return ' font-weight:500;';
				case '500italic' :
					return ' font-weight:500; font-style-italic;';
				case '600' :
					return ' font-weight:600;';
				case '600italic' :
					return ' font-weight:600; font-style:italic;';
				case '700' :
					return ' font-weight:700;';
				case '700italic' :
					return ' font-weight:700; font-style:italic;';
				case '800' :
					return ' font-weight:800;';
				case '800italic' :
					return ' font-weight:800; font-style:italic;';
				case '900' :
					return ' font-weight:900;';
				case '900italic' :
					return ' font-weight:900; font-style:italic;';
			}

			return '';
		}

		var wcRemoveFontRow = function() {
			var target,
				$this = $(this);

			target = $this.data('target');
			$('#' + target).prop('checked', false);
			$this.parent().remove();
		};

		var wcFontPreview = function() {
			var html = '',
				$wcFontPreview;

			var $checked = $('.wpcwf-font-variants input:checked');
			$checked.each( function() {
				var $this = $(this),
					$parent,
					family,
					code,
					style,
					id,
					variant,
					variantProperName,
					text,
					href;

				$parent = $this.parent();
				family = $(this).data('family');
				variant = $(this).val();
				variantProperName = $this.next('.wpcwf-font-variant-proper-name').text();
				text = family + ' ' + variantProperName;
				code = family.replace( /\s+/g, '+' );
				style = "font-family:'" + family + "';";
				style += wcGetVariantCSS( variant );

				id =  "google-font-" + family.replace(/ /g, '-').toLowerCase();
				id += "-" + variant;

				if ( ! $('#'+id).length ) {
					href = 'http://fonts.googleapis.com/css?family=' + code + ':' + variant;
					$('body').append("<link id='" + id + "' rel='stylesheet' href='" + href + "' type='text/css' media='all' />");
				}

				html += '<div class="wpcwf-font-preview-row">';
					html += '<span class="wpcwf-font-preview-text" style="' + style + '">';
						html += text;
					html += '</span>';
					html += '<a class="button wpcwf-font-row-remove" data-target="' + $this.attr('id') + '">Remove</a>';
					html += '<p class="description"><code>' + style + '</code></p>';
				html += '</div>';

			});

			if ( '' == html ) {
				html = '<p>No Fonts Selected</p>';
			}

			$wcFontPreview = $('#wpcwf-font-preview');
			$wcFontPreview.find('.wpcwf-font-row-remove').off('click');
			$wcFontPreview.html( html );
			$wcFontPreview.find('.wpcwf-font-row-remove').on('click', wcRemoveFontRow);
		};

		$(document).ready(function() {
			$('.wpcwf-font-variants input:checkbox').on('change', wcFontPreview);

			if ( $('#wpcwf-font-preview').length ) {
				wcFontPreview();
			}
		});

	});

}(jQuery));
