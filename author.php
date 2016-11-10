<?php
/**
 * The template for displaying an archive page for Authors.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">
	<div id="primary" class="grid-container site-content" role="main">

		<div class="grid-70 tablet-grid-70">

			<?php if ( have_posts() ) : ?>

				<?php
				// Queue the first post, that way we know what author we're dealing with (if that is the case).
				// We reset this later so we can run the loop properly with a call to rewind_posts().
				the_post();
				?>

				<header class="archive-header">
					<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
					?>
				</header><!-- .archive-header -->

				<?php // If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) {
					get_template_part( 'author-bio' );
				} ?>

				<?php
				// Since we called the_post() above, we need to rewind the loop back to the beginning that way we can run the loop properly, in full.
				rewind_posts();
				?>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php the_posts_pagination( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.grid-70 -->
		<?php get_sidebar(); ?>

	</div> <!-- /#primary.grid-container.site-content -->
</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
