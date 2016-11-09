<?php
/**
 * The sidebar containing the footer widget areas.
 * If there are no active widgets, the sidebar will be hidden completely.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */
?>

<?php
// Count how many footer sidebars are active so we can work out how many containers we need
$footerSidebars = 0;
for ( $x=1; $x<=4; $x++ ) {
	if ( is_active_sidebar( 'sidebar-footer' . $x ) ) {
		$footerSidebars++;
	}
}

// If there's one or more one active sidebars, create a row and add them
if ( $footerSidebars > 0 ) { ?>
	<footer class="site-footer grid-container" role="contentinfo">
		<?php
		// Work out the container class name based on the number of active footer sidebars
		$containerClass = "grid-" . intval( 100 / $footerSidebars ) . " tablet-grid-" . intval( 100 / $footerSidebars ) . " mobile-grid-100";

		// Display the active footer sidebars
		for ( $x=1; $x<=4; $x++ ) {
			if ( is_active_sidebar( 'sidebar-footer'. $x ) ) { ?>
				<div class="<?php echo $containerClass?>">
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-footer'. $x ); ?>
					</div>
				</div> <!-- /.<?php echo $containerClass?> -->
			<?php }
		} ?>
	</footer> <!-- /.site-footer.grid-container -->
<?php } ?>
