<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Sitepoint Base Theme
 * @since Sitepoint Base Theme 1.0
 */
?>
	<div class="grid-30 tablet-grid-30 mobile-grid-100">

		<div id="secondary" class="widget-area" role="complementary">
			<?php
			do_action( 'sitepointbasetheme_before_sidebar' );

			if ( is_active_sidebar( 'sidebar-main' ) ) {
				dynamic_sidebar( 'sidebar-main' );
			}

			if ( ( is_home() || is_archive() ) && is_active_sidebar( 'sidebar-blog' ) ) {
				dynamic_sidebar( 'sidebar-blog' );
			}

			if ( is_single() && is_active_sidebar( 'sidebar-single' ) ) {
				dynamic_sidebar( 'sidebar-single' );
			}

			if ( is_page() && is_active_sidebar( 'sidebar-page' ) ) {
				dynamic_sidebar( 'sidebar-page' );
			}
			?>

		</div> <!-- /#secondary.widget-area -->

	</div> <!-- /.grid-30 -->
