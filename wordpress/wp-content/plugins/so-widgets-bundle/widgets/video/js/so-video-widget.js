/* globals jQuery, sowb */
var sowb = window.sowb || {};

jQuery( function ( $ ) {
	sowb.setupVideoPlayers = function() {
		var $ = jQuery;
		if($.fn.mediaelementplayer) {
      $('video.sow-video-widget').mediaelementplayer();
    }
	};
	sowb.setupVideoPlayers();

	$( sowb ).on( 'setup_widgets', sowb.setupVideoPlayers );
} );
