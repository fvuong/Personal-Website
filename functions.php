<?php

// theme support
add_theme_support( 'post-thumbnails' ); 



/* nav menus */
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu('header_nav', __('Header Navigation Menu'));

}


/* sidebar */
function frankvuong_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Sidebar',
		'id' =>	'sidebar-footer-info',
		'class' => 'sidebar-footer-info',
		'before_widget' =>	'<div class="sidebar-footer-info">',
		'after_widget' =>	'</div>',
		'before_title' =>	'<h4 class="widget-title">',
		'after_title'	=>	'</h4>'
		)
	);
}

/** Register sidebars by running  on the widgets_init hook. */
add_action( 'widgets_init', 'frankvuong_widgets_init' );















?>

