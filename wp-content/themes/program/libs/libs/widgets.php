<?php
function school_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Banner Widget'),
		'id' => 'banner-widget',
		'description' => __( 'This is the top banner widget'),
		'before_widget' => '',
		'after_widget' => '',
	) );
	register_sidebar( array(
		'name' => __( 'Form Widget'),
		'id' => 'forms-widget',
		'description' => __('Form Widgets'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
        
        register_sidebar( array(
		'name' => __( 'Posts Widgets'),
		'id' => 'posts-widgets',
		'description' => __('Customs Posts Widgets'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="custom-content-title">',
		'after_title' => '</h2>',
	) );
}
/** Register sidebars by running estate_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'school_widgets_init' );


?>