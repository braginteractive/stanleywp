<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				
				<div class="author-avatar mb-3">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 50, null, null, array( 'class' => array('rounded-circle') ) ); ?>
					<span><?php echo get_the_author(); ?></span>
				</div><!--  .author-avatar -->

				
				<?php if ( has_post_thumbnail() && is_single() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div><!--  .post-thumbnail -->
					<?php else : ?>
						<div class="post-thumbnail">
					    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					        <?php the_post_thumbnail(); ?>
					    </a>
					</div><!--  .post-thumbnail -->
				<?php endif; ?>

				<header class="entry-header">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php stanleywp_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stanleywp' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stanleywp' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php stanleywp_entry_footer(); ?>
				</footer><!-- .entry-footer -->

			</div><!--  .col-md-8 -->
		</div><!--  .row -->
	</div><!--  .container -->

</article><!-- #post-## -->
