<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Sitepoint Base Theme
 * @since Sitepoint Base Theme 1.0
 */
?>

	<?php	do_action( 'sitepoint-base-theme_after_woocommerce' ); ?>
	<div id="footercontainer">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid-container smallprint">
			<div class="grid-100">
				<?php echo sitepoint-base-theme_get_credits() ?>
			</div> <!-- /.grid-100 -->
		</div> <!-- /.grid-container.smallprint -->

	</div> <!-- /.footercontainer -->

</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
</body>

</html>
