<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php sitepointbasetheme_posted_on(); ?>
	</header> <!-- /.entry-header -->
	<div class="entry-content">
		<blockquote>
			<?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sitepoint-base-theme' ), array(
				'span' => array(
					'class' => array() )
				) ) ); ?>
			<cite><?php the_title(); ?></cite>
		</blockquote>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sitepoint-base-theme' ),
			'after' => '</div>',
			'link_before' => '<span class="page-numbers">',
			'link_after' => '</span>'
		) ); ?>
	</div> <!-- /.entry-content -->

	<footer class="entry-meta">
		<?php if ( is_singular() ) {
			// Only show the tags on the Single Post page
			sitepointbasetheme_entry_meta();
		} ?>
		<?php edit_post_link( esc_html__( 'Edit', 'sitepoint-base-theme' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
	</footer> <!-- /.entry-meta -->
</article> <!-- /#post -->
