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
		<div class="row justify-content-center text-center">
			<div class="col-md-6">

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

			</div><!--  .col-md-6 -->
		</div><!--  .row -->


		<div class="row justify-content-center text-center">
			<div class="col-md-8">

				<?php 
					// Get the list of files
					$files = get_post_meta( get_the_ID(), '_stanleywp_images', 1 );

					// Loop through them and output an image
					foreach ( (array) $files as $attachment_id => $attachment_url ) {
						echo '<div class="mb-4">';
						echo wp_get_attachment_image( $attachment_id, 'full' );
						echo '</div>';
					}
				 ?>

				  <?php echo get_the_term_list( get_the_ID(), 'project_category', 'Type: ', ', ', ''); ?> 

			</div><!--  .col-md-8 -->
		</div><!--  .row -->


		<footer class="entry-footer">
			<?php stanleywp_entry_footer(); ?>
		</footer><!-- .entry-footer -->

			
	</div><!--  .container -->

</article><!-- #post-## -->
