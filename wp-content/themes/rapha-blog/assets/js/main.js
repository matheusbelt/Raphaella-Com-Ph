jQuery(document).ready(function($) {

	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();

	$(function() {
		  var ele = $('#haha');
		  var clr = null;
		  var rand = 0;
		  (loop = function() {
		    clearTimeout(clr);
		    (inloop = function() {
		      if(rand < 30){
		      ele.html(rand += 1);
		      clr = setTimeout(inloop, 150);
		      }
		    })();
		  })();
		}); 

	$(function() {
	  var ela = $('#hehe');
	  var cler = null;
	  var randd = 0;
	  (looop = function() {
	    clearTimeout(cler);
	    (inlooop = function() {
	      if(randd < 2100){
	      ela.html(randd += 1);
	      cler = setTimeout(inlooop, 0);
	      }
	    })();
	  })();
	}); 

});
