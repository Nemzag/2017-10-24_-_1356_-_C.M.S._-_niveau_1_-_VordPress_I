/**
 * Canuck masonry-doc-ready-scripts
 * http://kevinsspace.ca
 * Canuck WordPress Theme
 * Copyright (C) 2017-2019  Kevin Archibald Licensed GPLv3
 */
jQuery(document).ready(function($){
	// init Masonry
	var $grid = $('.masonry-gallery').masonry({
	  itemSelector: '.masonry-grid-item',
	  percentPosition: true,
	  columnWidth: '.masonry-grid-sizer'
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});
});
