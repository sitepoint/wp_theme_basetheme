<?php
/**
 * The template used for displaying page content in page-builderboxed.php
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.3.2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sitepoint-base' ),
			'after' => '</div>',
			'link_before' => '<span class="page-numbers">',
			'link_after' => '</span>'
		) ); ?>
	</div><!-- /.entry-content -->
</article><!-- /#post -->
