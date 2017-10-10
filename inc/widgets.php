<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stanleywp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stanleywp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stanleywp' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'stanleywp' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'stanleywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'stanleywp' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'stanleywp' ),
		'before_widget' => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'stanleywp' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'stanleywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'stanleywp_widgets_init' );