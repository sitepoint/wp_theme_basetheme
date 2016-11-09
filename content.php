<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<div class="featured-post">
				<?php esc_html_e( 'Featured post', 'sitepoint-base-theme' ); ?>
			</div>
		<?php } ?>
		<header class="entry-header">
			<?php if ( is_single() ) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php }
			else { ?>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to ', 'sitepoint-base-theme' ) . '%s', the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			<?php } // is_single() ?>
			<?php sitepointbase_posted_on(); ?>
			<?php if ( has_post_thumbnail() && !is_search() ) {
				if ( is_single() ) {
					the_post_thumbnail( 'sitepoint_base_theme_post_feature_full_width' );
				}
				else { ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to ', 'sitepoint-base-theme' ) . '%s', the_title_attribute( 'echo=0' ) ) ); ?>">
						<?php the_post_thumbnail( 'sitepoint_base_theme_post_feature_full_width' ); ?>
					</a>
				<?php }
			} // has_post_thumbnail() && !is_search() ?>
		</header> <!-- /.entry-header -->

		<?php if ( is_search() ) { // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div> <!-- /.entry-summary -->
		<?php }
		else { ?>
			<div class="entry-content">
				<?php if ( has_excerpt() && !is_single() ) {
					the_excerpt(); ?>
					<p><a class="more-link" href="<?php the_permalink(); ?>"><?php echo wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sitepoint-base-theme' ), array( 'span' => array(
						'class' => array() ) ) ) ?></a></p>
				<?php }
				else {
					the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sitepoint-base-theme' ), array( 'span' => array(
						'class' => array() ) ) )
						);
				}
				 ?>
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sitepoint-base-theme' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->
		<?php } ?>

		<footer class="entry-meta">
			<?php if ( is_singular() ) {
				// Only show the tags on the Single Post page
				sitepointbase_entry_meta();
			} ?>
			<?php edit_post_link( esc_html__( 'Edit', 'sitepoint-base-theme' ) . ' <i class="fa fa-angle-right" aria-hidden="true"></i>', '<div class="edit-link">', '</div>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) {
				// If a user has filled out their description and this is a multi-author blog, show their bio
				get_template_part( 'author-bio' );
			} ?>
		</footer> <!-- /.entry-meta -->
	</article> <!-- /#post -->
