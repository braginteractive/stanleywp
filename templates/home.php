<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

get_header(); ?>

	<div class="banner">
		<div class="container">
			<div class="row justify-content-center">
				<div id="primary" class="content-area">
					<main id="main" class="site-main text-center" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div><!--  .banner -->



	<div class="home-projects">
		<div class="container">	
			<div class="row mt-5">
				<?php 
					// the query
					$args = array('post_type' => 'project', 'posts_per_page' => 6);

					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

							get_template_part( 'template-parts/content', 'projects' );

						 endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			</div><!--  .row -->
		</div><!--  .container -->
	</div><!--  .home-projects -->

<?php
get_footer();
