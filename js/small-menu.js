/**
 * Handles toggling the main navigation menu for small screens.
 */
jQuery( document ).ready( function( $ ) {
	var $masthead = $( '#masthead' ),
	    timeout = false;

	$.fn.smallMenu = function() {
		$masthead.find( '#site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );
		$masthead.find( '#site-navigation h3' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );

		$( '.menu-toggle' ).unbind( 'click' ).click( function() {
			$masthead.find( '.nav-menu' ).toggle();
			$( this ).toggleClass( 'toggled-on' );
		} );
	};

	// Check viewport width on first load.
	if ( $( window ).width() < 520 )
		$.fn.smallMenu();

	// Check viewport width when user resizes the browser window.
	$( window ).resize( function() {
		var browserWidth = $( window ).width();

		if ( false !== timeout )
			clearTimeout( timeout );

		timeout = setTimeout( function() {
			if ( browserWidth < 520 ) {
				$.fn.smallMenu();
			} else {
				$masthead.find( '#site-navigation' ).removeClass( 'main-small-navigation' ).addClass( 'main-navigation' );
				$masthead.find( '#site-navigation h3' ).removeClass( 'menu-toggle' ).addClass( 'assistive-text' );
				$masthead.find( '.nav-menu' ).removeAttr( 'style' );
			}
		}, 200 );
	} );

// mobile menu scripts
// to make the script run when the browser screen is resize
	$( window ).resize(function() {
		var screenSize = $(window).width();
		if(screenSize < 520){
				$(".menu-item-has-children").prepend('<i class="arrow-down-close fa fa-caret-right"></i>');
			  $(".arrow-down-close").on("click", function(){
					if($(this).hasClass("arrow-down-close")){
						$(this).addClass("arrow-down-open");
						$(this).removeClass("arrow-down-close");
						$(this).next().next().show();
					}else{
						$(this).addClass("arrow-down-close");
						$(this).removeClass("arrow-down-open");
						$(this).next().next().hide();
					}
				});
		}
	});

	// by default (on load to run the script)
	var screenSize = $(window).width();
	if(screenSize < 520){
			$(".menu-item-has-children").prepend('<i class="arrow-down-close fa fa-caret-right"></i>');
			$(".arrow-down-close").on("click", function(){
				if($(this).hasClass("arrow-down-close")){
					$(this).addClass("arrow-down-open");
					$(this).removeClass("arrow-down-close");
					$(this).next().next().show();
				}else{
					$(this).addClass("arrow-down-close");
					$(this).removeClass("arrow-down-open");
					$(this).next().next().hide();
				}
			});
	}
	
} );
