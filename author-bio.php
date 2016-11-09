<?php
/**
 * The template for displaying Author bios.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.2.5
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'sitepointbase_author_bio_avatar_size', 68 ) ); ?>
	</div> <!-- /.author-avatar -->
	<div class="author-description">
		<h2><?php printf( esc_html__( 'About %s', 'sitepoint-base' ), get_the_author() ); ?></h2>
		<p><?php the_author_meta( 'description' ); ?></p>
		<p class="social-meta">
			<?php if ( get_the_author_meta( 'url' ) ) { ?>
				<a href="<?php the_author_meta( 'url' ) ?>" title="Website"><i class="fa fa-link fa-fw"></i></a>
			<?php } ?>
			<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
				<a href="<?php the_author_meta( 'twitter' ) ?>" title="Twitter"><i class="fa fa-twitter fa-fw"></i></a>
			<?php } ?>
			<?php if ( get_the_author_meta( 'facebook' ) ) { ?>
				<a href="<?php the_author_meta( 'facebook' ) ?>" title="Facebook"><i class="fa fa-facebook fa-fw"></i></a>
			<?php } ?>
			<?php if ( get_the_author_meta( 'googleplus' ) ) { ?>
				<a href="<?php the_author_meta( 'googleplus' ) ?>" title="Google+"><i class="fa fa-google-plus fa-fw"></i></a>
			<?php } ?>
		</p>
		<div class="author-link">
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( wp_kses( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'sitepoint-base' ), array(
					'span' => array(
						'class' => array() )
				) ), get_the_author() ); ?>
			</a>
		</div> <!-- /.author-link	-->
	</div> <!-- /.author-description -->
</div> <!-- /.author-info -->
