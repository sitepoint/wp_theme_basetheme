<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */
?>
	<div class="grid-30 tablet-grid-30 mobile-grid-100">

		<div id="secondary" class="widget-area" role="complementary">
			<?php
			do_action( 'sitepointbase_before_sidebar' );

			if ( is_active_sidebar( 'sidebar-1' ) ) {
				dynamic_sidebar( 'sidebar-1' );
			}

			if ( ( is_home() || is_archive() ) && is_active_sidebar( 'sidebar-2' ) ) {
				dynamic_sidebar( 'sidebar-2' );
			}

			if ( is_single() && is_active_sidebar( 'sidebar-3' ) ) {
				dynamic_sidebar( 'sidebar-3' );
			}

			if ( is_page() && is_active_sidebar( 'sidebar-4' ) ) {
				dynamic_sidebar( 'sidebar-4' );
			}
			?>

		</div> <!-- /#secondary.widget-area -->

	</div> <!-- /.grid-30 -->
