<?php
/**
 * Products.
 *
 * Plugin Name: Slider Home
 * Version:     1.1
 * Description: Slider Home
 * Author:      PHC
 * Author URI:  https://phc.com.co
 * 
 */


// Register Custom Post Type
function sliderhome() {
	$args = array(
		'label'                 => __( 'Slider Home', 'dunapower' ),
		'description'           => __( 'Slider Home', 'dunapower' ),
        'show_in_rest' => true,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'sliderhome', 0 );