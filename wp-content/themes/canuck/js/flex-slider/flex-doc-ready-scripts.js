/**
 * Flex slider doc ready script
 *
 * Sets up the flex sliders used in the theme.
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck WordPress Theme
 */
jQuery(document).ready(function($){
	var canuck_flex_options, flex_pause, flex_effect, flex_trans, flex_auto, canuck_gallery_options, gallery_pause, gallery_effect, gallery_trans, gallery_auto;
	if( $( '#flexslider-feature' ).length > 0 ) {
		canuck_flex_options = this.getElementById( 'flexslider-feature' );
		try{
			flex_pause = canuck_flex_options.dataset.flex_pause;
		}catch( e ){
			flex_pause = 5000;
		}
		try{
			flex_effect = canuck_flex_options.dataset.flex_effect;
		}catch(e){
			flex_effect = 'fade';
		}
		try{
			if( flex_effect == 'slide' ){
				flex_trans = canuck_flex_options.dataset.flex_trans;
			} else {
				flex_trans = 1000;
			}
		}catch(e){
			flex_trans = 600;
		}
		try{
			flex_auto = canuck_flex_options.dataset.flex_auto;
			if( flex_auto == 1 ) {
				flex_auto = true;
			} else {
				flex_auto = false;
			}
		}catch(e) {
			flex_auto = true;
		}
		// The slider being synced must be initialized first.
		$( '#flexslider-carousel' ).flexslider( {
			animation: "slide",
			controlNav: false,
			prevText: "",
			nextText: "",
			animationLoop: false,
			slideshow: false,
			itemWidth: 75,
			itemMargin: 5,
			minItems: 4,
			maxItems: 6,
			move:0,
			asNavFor: '#flexslider-feature'
		} );
		$( '#flexslider-feature' ).flexslider( {
			animation: flex_effect,
			pauseOnAction: true,
			pauseOnHover: true,
			animationLoop: true,
			controlNav: false,
			prevText: "",
			nextText: "",
			slideshow: flex_auto,
			slideshowSpeed: flex_pause,
			animationSpeed: flex_trans,
			sync: "#flexslider-carousel",
			init: function (slider) {
				$(".carousel-nav-place-holder").css({display:'none'});
			},
			before: function (slider) {
				var slide = $(slider).find('.slides').children().eq(slider.animatingTo+1).find('img');
				var src = slide.attr("data-src");
				slide.attr("src", src).removeAttr("data-src").removeClass("canuck-flex-lazy");
			}
		} );
	}

	if ( $( '#flexslider-feature-full' ).length > 0 ) {
		canuck_flex_options = this.getElementById( 'flexslider-feature-button' );
		try{
			flex_pause = canuck_flex_options.dataset.flex_pause;
		}catch( e ) {
			flex_pause = 5000;
		}
		try{
			flex_effect = canuck_flex_options.dataset.flex_effect;
		}catch( e ) {
			flex_effect = 'fade';
		}
		try{
			if ( flex_effect == 'slide' ) {
				flex_trans = canuck_flex_options.dataset.flex_trans;
			} else {
				flex_trans = 1000;
			}
		}catch( e ) {
			flex_trans = 600;
		}
		try{
			flex_auto = canuck_flex_options.dataset.flex_auto;
			if( flex_auto == 1 ) {
				flex_auto = true;
			} else {
				flex_auto = false;
			}
		}catch(e){
			flex_auto = true;
		}
		$( '#flexslider-feature-full' ).flexslider( {
			animation: flex_effect,
			pauseOnAction: true,
			pauseOnHover: true,
			animationLoop: true,
			reverse: false,
			controlNav: true,
			directionNav: true,
			prevText: "",
			nextText: "",
			slideshow: flex_auto,
			slideshowSpeed: flex_pause,
			animationSpeed: flex_trans,
			init: function (slider) {
				$(".button-place-holder").css({display:'none'});
			}
		} );
	}
	
	if ( $( '#flexslider-feature-button' ).length > 0 ) {
		canuck_flex_options = this.getElementById( 'flexslider-feature-button' );
		try{
			flex_pause = canuck_flex_options.dataset.flex_pause;
		}catch( e ) {
			flex_pause = 5000;
		}
		try{
			flex_effect = canuck_flex_options.dataset.flex_effect;
		}catch( e ) {
			flex_effect = 'fade';
		}
		try{
			if ( flex_effect == 'slide' ) {
				flex_trans = canuck_flex_options.dataset.flex_trans;
			} else {
				flex_trans = 1000;
			}
		}catch( e ) {
			flex_trans = 600;
		}
		try{
			flex_auto = canuck_flex_options.dataset.flex_auto;
			if( flex_auto == 1 ) {
				flex_auto = true;
			} else {
				flex_auto = false;
			}
		}catch(e){
			flex_auto = true;
		}
		$( '#flexslider-feature-button' ).flexslider( {
			animation: flex_effect,
			pauseOnAction: true,
			pauseOnHover: true,
			animationLoop: true,
			reverse: false,
			controlNav: true,
			directionNav: true,
			prevText: "",
			nextText: "",
			slideshow: flex_auto,
			slideshowSpeed: flex_pause,
			animationSpeed: flex_trans,
			init: function (slider) {
				$(".button-place-holder").css({display:'none'});
			},
		} );
	}

	if( jQuery( '#flexgallery-carousel' ).length > 0 ) {
		var count = 1;
		$("div[id='flexgallery-carousel']").each(function(){
			$('#flexgallery-carousel').attr('id','flexgallery-carousel'+count);
			$('#flexgallery-feature').attr('id','flexgallery-feature'+count);
			try{
				var gallery_pause = $('#flexgallery-feature'+count).data('gallery_pause');
			}catch(e){
				var gallery_pause = 5000;
			}
			try{
				var gallery_effect = $('#flexgallery-feature'+count).data('gallery_effect');
			}catch(e){
				var gallery_effect = 'fade';
			}
			try{
				if( gallery_effect == 'slide' ){
					var gallery_trans = $('#flexgallery-feature'+count).data('gallery_trans');
				} else {
					var gallery_trans = 1000;//bug in flex slider
				}
			}catch(e){
				var gallery_trans = 600;
			}
			try{
				var gallery_auto = $('#flexgallery-feature'+count).data('gallery_auto');
				if( gallery_auto == 1 ) {
					gallery_auto = true;
				} else {
					gallery_auto = false;
				}
			}catch(e){
				var gallery_auto = true;
			}
			jQuery('#flexgallery-carousel'+count).flexslider({
				animation: "slide",
				animationLoop: false,
				slideshow: false,
				itemWidth: 80,
				itemMargin: 5,
				minItems: 6,
				maxItems: 6,
				directionNav: true,
				prevText: "",
				nextText: "",
				controlNav: false,
				asNavFor: "#flexgallery-feature"+count
			});
			jQuery('#flexgallery-feature'+count).flexslider({
				pauseOnAction: true,
				pauseOnHover: true,
				animation: gallery_effect,
				slideshow: gallery_auto,
				slideshowSpeed: gallery_pause,
				animationSpeed: gallery_trans,
				controlNav: false,
				prevText: "",
				nextText: "",
				sync: "#flexgallery-carousel"+count,
				init: function (slider) {
				$(".carousel-nav-place-holder").css({display:'none'});
				},
				before: function (slider) {
				var slide = $(slider).find('.slides').children().eq(slider.animatingTo+1).find('img');
				var src = slide.attr("data-src");
				slide.attr("src", src).removeAttr("data-src").removeClass("canuck-flex-lazy");
			}
			});
			count++;
		});
	};
});

