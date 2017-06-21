<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">
	<div id="primary" class="grid-container site-content" role="main">

			<div class="grid-70 tablet-grid-70">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template( '', true );
					}
					?>

					<?php
					the_post_navigation( array(
						'prev_text' => '<span aria-hidden="true" class="nav-subtitle">' . __( 'Previous post:', 'sitepoint-base' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span aria-hidden="true" class="nav-subtitle">' . __( 'Next post:', 'sitepoint-base' ) . '</span> <span class="nav-title">%title</span>',
					) );
					?>

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /.grid-70 -->
			<?php get_sidebar(); ?>

	</div> <!-- /#primary.grid-container.site-content -->
</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
