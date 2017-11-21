<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

get_header(); ?>

	<div class="container">
			<div id="primary" class="content-area-full">
				<main id="main" class="site-main" role="main">
			
				<?php
				if ( have_posts() ) : ?>
					<div class="row justify-content-center text-center">
						<header class="page-header col-md-6">

							<?php $project_title = get_theme_mod( 'project_title', 'Projects' ); ?>

							<?php if( $project_title != '') : ?>
								<h1><?php echo $project_title; ?></h1>
							<?php endif; ?>

						</header><!-- .page-header -->
					</div><!--  .row -->

					<div class="row mt-5">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'projects' );

						endwhile; ?>


						<div class="col-md-12">

							<?php the_posts_navigation(); ?>

						</div><!--  .col-md-12 -->

					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!--  .row -->
				</main><!-- #main -->
			</div><!-- #primary -->
	</div>

<?php
get_footer();
