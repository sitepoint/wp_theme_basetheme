(function( $ ) {
    "use strict";

    wp.customize( 'custom_text_color', function( value ) {
        value.bind( function( to ) {
            $( 'body,h1,h2,h3,h4,h5,h6,p,.fa,.header-meta a:visited,.smallprint a:visited,.site-title a,.main-navigation a' ).css( 'color', to );
              $( '.post-categories a' ).css( 'background', to );
        } );
    });

})( jQuery );
