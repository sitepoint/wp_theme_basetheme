(function( $ ) {
    "use strict";

    wp.customize( 'custom_text_color', function( value ) {
        value.bind( function( to ) {
            $( 'body,h1,h2,h3,h4,h5,h6,a,p,.fa' ).css( 'color', to );
        } );
    });

})( jQuery );
