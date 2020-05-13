/**
 * Canuck owl doc-ready-scripts
 *
 * Sets up the Owl Carousels used in the theme.
 *
 * http://kevinsspace.ca
 * Canuck WordPress Theme
 * Copyright (C) 2017-2019  Kevin Archibald Licensed GPLv2 or later 
 */
jQuery( document ).ready( function( $ ) { 
  	$( '#home-12-carousel' ).owlCarousel( {
 		items: 4,
 		lazyLoad: true,
		loop: true,
		center: false,
		rewind: true,
		autoplay: true,
		autoplayHoverPause: true,
		nav: true,
		margin: 5,
		slideBy: 4,
		navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	} );
 	$( '#home-13-carousel' ).owlCarousel( {
 		//items: 8,
 		lazyLoad: true,
		loop: true,
		center: true,
		rewind: true,
		autoplay: true,
		autoplayHoverPause: true,
		nav: true,
		margin: 25,
		slideBy: 4,
		responsiveClass: true,
		responsive: {
			0: {
				items: 3
			},
			480: {
				items: 5
			},
			700: {
				items: 8
			}
		},
		navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	} );
} );

