/**
 * Flex widget slider doc ready script
 *
 * Sets up the flex sliders used by the flex slider widget in the theme.
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck WordPress Theme
 */
jQuery(document).ready(function($){
	var flex_pause,flex_effect,flex_trans,flex_auto,count;
	if( $( '#widget-flex-slider-feature-bot' ).length > 0 ) {
		
		count = 1;
		$("div[id='widget-flex-slider-feature-bot']").each(function(){

			$('#widget-flex-slider-carousel-top').attr('id','widget-flex-slider-carousel-top'+count);
			$('#widget-flex-slider-feature-bot').attr('id','widget-flex-slider-feature-bot'+count);
			
			try{
				flex_pause = $('#widget-flex-slider-feature-bot'+count).data('flex_pause');
			}catch(e){
				flex_pause = 5000;
			}
				
			try{
				flex_effect = $('#widget-flex-slider-feature-bot'+count).data('flex_effect');
			}catch(e){
				flex_effect = 'fade';
			}
			
			try{
				if( flex_effect == 'slide' ){
					flex_trans = $('#widget-flex-slider-feature-bot'+count).data('flex_trans');
				} else {
					flex_trans = 1000;//bug in flex slider
				}			
			}catch(e){
				flex_trans = 600;
			}
			
			try{
				flex_auto = $('#widget-flex-slider-feature-bot'+count).data('flex_auto');
			}catch(e){
				flex_auto = true;
			}
		
			// The slider being synced must be initialized first
			$('#widget-flex-slider-carousel-top'+count).flexslider({
				animation: "slide",
				controlNav: false,
				prevText: "",
				nextText: "",
				animationLoop: false,
				slideshow: false,
				itemWidth: 100,
				itemMargin: 5,
				minItems: 4,
				maxItems: 6,
				move:0,
				asNavFor: '#widget-flex-slider-feature-bot'+count
			});
		
			$('#widget-flex-slider-feature-bot'+count).flexslider({
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
				sync: "#widget-flex-slider-carousel-top"+count
			});
			
			count++;
		
		});
		
	}
	
	if( $( '#widget-flex-slider-feature-top' ).length > 0 ) {
		
		count = 1;
		$("div[id='widget-flex-slider-feature-top']").each(function(){

			$('#widget-flex-slider-carousel-bot').attr('id','widget-flex-slider-carousel-bot'+count);
			$('#widget-flex-slider-feature-top').attr('id','widget-flex-slider-feature-top'+count);
			
			try{
				flex_pause = $('#widget-flex-slider-feature-top'+count).data('flex_pause');
			}catch(e){
				flex_pause = 5000;
			}
				
			try{
				flex_effect = $('#widget-flex-slider-feature-top'+count).data('flex_effect');
			}catch(e){
				flex_effect = 'fade';
			}
			
			try{
				if( flex_effect == 'slide' ){
					flex_trans = $('#widget-flex-slider-feature-top'+count).data('flex_trans');
				} else {
					flex_trans = 1000;//bug in flex slider
				}			
			}catch(e){
				flex_trans = 600;
			}
			
			try{
				flex_auto = $('#widget-flex-slider-feature-top'+count).data('flex_auto');
			}catch(e){
				flex_auto = true;
			}
		
			// The slider being synced must be initialized first
			$('#widget-flex-slider-carousel-bot'+count).flexslider({
				animation: "slide",
				controlNav: false,
				prevText: "",
				nextText: "",
				animationLoop: false,
				slideshow: false,
				itemWidth: 100,
				itemMargin: 5,
				minItems: 4,
				maxItems: 6,
				move:0,
				asNavFor: '#widget-flex-slider-feature-top'+count
			});
		
			$('#widget-flex-slider-feature-top'+count).flexslider({
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
				sync: "#widget-flex-slider-carousel-bot"+count
			});
			
			count++;
		
		});
		
	}
	
	if( $( '#widget-flex-slider-button' ).length > 0 ) {
		
		count = 1;
		$("div[id='widget-flex-slider-button']").each(function(){
			
			$('#widget-flex-slider-button').attr('id','widget-flex-slider-button'+count);
			
			try{
				flex_pause = $('#widget-flex-slider-button'+count).data('flex_pause');
			}catch(e){
				flex_pause = 5000;
			}
				
			try{
				flex_effect = $('#widget-flex-slider-button'+count).data('flex_effect');
			}catch(e){
				flex_effect = 'fade';
			}
			
			try{
				if( flex_effect == 'slide' ){
					flex_trans = $('#widget-flex-slider-button'+count).data('flex_trans');
				} else {
					flex_trans = 1000;//bug in flex slider
				}			
			}catch(e){
				flex_trans = 600;
			}
			
			try{
				flex_auto = $('#widget-flex-slider-button'+count).data('flex_auto');
			}catch(e){
				flex_auto = true;
			}

			$('#widget-flex-slider-button'+count).flexslider({
				animation: flex_effect,
				pauseOnAction: true,
				pauseOnHover: true,
				animationLoop: true,
				controlNav: true,
				prevText: "",
				nextText: "",
				slideshow: flex_auto,
				slideshowSpeed: flex_pause,
				animationSpeed: flex_trans,
			});
			
			count++;
		
		});
	
	}
	
	if( $( '#widget-flex-slider-no-nav' ).length > 0 ) {
		
		count = 1;
		$("div[id='widget-flex-slider-no-nav']").each(function(){
			
			$('#widget-flex-slider-no-nav').attr('id','widget-flex-slider-no-nav'+count);
			
			try{
				flex_pause = $('#widget-flex-slider-no-nav'+count).data('flex_pause');
			}catch(e){
				flex_pause = 5000;
			}

			try{
				flex_effect = $('#widget-flex-slider-no-nav'+count).data('flex_effect');
			}catch(e){
				flex_effect = 'fade';
			}

			try{
				if( flex_effect == 'slide' ){
					flex_trans = $('#widget-flex-slider-no-nav'+count).data('flex_trans');
				} else {
					flex_trans = 1000;//bug in flex slider
				}			
			}catch(e){
				flex_trans = 600;
			}
			
			try{
				flex_auto = $('#widget-flex-slider-no-nav'+count).data('flex_auto');
			}catch(e){
				flex_auto = 1;
			}
				
			$('#widget-flex-slider-no-nav'+count).flexslider({
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
			});
			
			count++;
			
		});	
	}
	
	if( $( '#widget-flex-slider-feature-carousel' ).length > 0 ) {
	
		count = 1;
		$("div[id='widget-flex-slider-feature-carousel']").each(function(){
			
			$('#widget-flex-slider-feature-carousel').attr('id','widget-flex-slider-feature-carousel'+count);
		
			// The slider being synced must be initialized first
			$('#widget-flex-slider-feature-carousel'+count).flexslider({
				animation: "slide",
				controlNav: false,
				prevText: "",
				nextText: "",
				animationLoop: true,
				slideshow: true,
				itemWidth: 250,
				itemMargin: 0,
				minItems: 2,
				maxItems: 4,
				move:0,
			});
			
			count++;
		
		});
		
	}

});