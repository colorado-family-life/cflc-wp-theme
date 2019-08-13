<?php

// Scripts
function jdot_enqueue_scripts() {
	if (!is_admin()) {
	  //wp_deregister_script('jquery');
	  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
	  wp_enqueue_script('jquery');
	  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');
	  wp_enqueue_script('modernizr');
	  wp_register_script('nivoslider', get_template_directory_uri() . '/js/jquery.nivo.slider.js');
	  wp_enqueue_script('nivoslider');
	  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', '', '', true);
	  wp_enqueue_script('custom');
	}       
}
add_action('init', 'jdot_enqueue_scripts');

// Other
add_editor_style();
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 80, 80, true ); // Default size
if ( ! isset( $content_width ) ) $content_width = 624;


// Replaces "[...]".
function isabelblog_auto_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'isabelblog_auto_excerpt_more' );

//Add Image Size
add_image_size( 'projectsmall', 200, 100, true);
add_image_size('projectimage', 600, 300, true);

//Add custom image sizes to media window
function jdot_insert_custom_image_sizes( $sizes ) {
  global $_wp_additional_image_sizes;
  if ( empty($_wp_additional_image_sizes) )
    return $sizes;

  foreach ( $_wp_additional_image_sizes as $id => $data ) {
    if ( !isset($sizes[$id]) )
      $sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
  }

  return $sizes;
}
add_filter( 'image_size_names_choose', 'jdot_insert_custom_image_sizes' );

//Register Staff Post Type

//add_action( 'init', 'register_cpt_staff' );

function register_cpt_staff() {

    $comlabels = array( 
        'name' => _x( 'Staff', 'staff' ),
        'singular_name' => _x( 'Staff', 'staff' ),
        'add_new' => _x( 'Add New', 'staff' ),
        'add_new_item' => _x( 'Add New Staff', 'staff' ),
        'edit_item' => _x( 'Edit Staff', 'staff' ),
        'new_item' => _x( 'New Staff', 'staff' ),
        'view_item' => _x( 'View Staff', 'staff' ),
        'search_items' => _x( 'Search Staff', 'staff' ),
        'not_found' => _x( 'No Staff found', 'staff' ),
        'not_found_in_trash' => _x( 'No Staff found in Trash', 'staff' ),
        'parent_item_colon' => _x( 'Parent Staff:', 'staff' ),
        'menu_name' => _x( 'Staff', 'staff' ),
    );

    $args = array( 
        'labels' => $comlabels,
        'hierarchical' => false,
        
        'supports' => array( 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'staff', $args );
}

//Register Business Partners Post Type

//add_action( 'init', 'register_cpt_businessPartners' );

function register_cpt_businessPartners() {

    $comlabels = array( 
        'name' => _x( 'Business Partners', 'businessPartners' ),
        'singular_name' => _x( 'Business Partner', 'businessPartners' ),
        'add_new' => _x( 'Add New', 'businessPartners' ),
        'add_new_item' => _x( 'Add New Business Partner', 'businessPartners' ),
        'edit_item' => _x( 'Edit Business Partner', 'businessPartners' ),
        'new_item' => _x( 'New Business Partner', 'businessPartners' ),
        'view_item' => _x( 'View Business Partner', 'businessPartners' ),
        'search_items' => _x( 'Search Business Partners', 'businessPartners' ),
        'not_found' => _x( 'No Business Partners found', 'businessPartners' ),
        'not_found_in_trash' => _x( 'No Business Partners found in Trash', 'businessPartners' ),
        'parent_item_colon' => _x( 'Parent Business Partner:', 'businessPartners' ),
        'menu_name' => _x( 'Business Partners', 'businessPartners' ),
    );

    $args = array( 
        'labels' => $comlabels,
        'hierarchical' => false,
        
        'supports' => array( 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'businessPartners', $args );
}

//Register Community Partners Post Type

//add_action( 'init', 'register_cpt_communityPartners' );

function register_cpt_communityPartners() {

    $comlabels = array( 
        'name' => _x( 'Community Partners', 'communityPartners' ),
        'singular_name' => _x( 'Community Partner', 'communityPartners' ),
        'add_new' => _x( 'Add New', 'communityPartners' ),
        'add_new_item' => _x( 'Add New Community Partner', 'communityPartners' ),
        'edit_item' => _x( 'Edit Community Partner', 'communityPartners' ),
        'new_item' => _x( 'New Community Partner', 'communityPartners' ),
        'view_item' => _x( 'View Community Partner', 'communityPartners' ),
        'search_items' => _x( 'Search Community Partners', 'communityPartners' ),
        'not_found' => _x( 'No Community Partners found', 'communityPartners' ),
        'not_found_in_trash' => _x( 'No Community Partners found in Trash', 'communityPartners' ),
        'parent_item_colon' => _x( 'Parent Community Partner:', 'communityPartners' ),
        'menu_name' => _x( 'Community Partners', 'communityPartners' ),
    );

    $args = array( 
        'labels' => $comlabels,
        'hierarchical' => false,
        
        'supports' => array( 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'communityPartners', $args );
}

//Register Resources Post Type

//add_action( 'init', 'register_cpt_resources' );

function register_cpt_resources() {

    $comlabels = array( 
        'name' => _x( 'Resources', 'resource' ),
        'singular_name' => _x( 'Resource', 'resource' ),
        'add_new' => _x( 'Add New', 'resource' ),
        'add_new_item' => _x( 'Add New Resource', 'resource' ),
        'edit_item' => _x( 'Edit Resource', 'resource' ),
        'new_item' => _x( 'New Resource', 'resource' ),
        'view_item' => _x( 'View Resource', 'resource' ),
        'search_items' => _x( 'Search Resources', 'resource' ),
        'not_found' => _x( 'No Resource found', 'resource' ),
        'not_found_in_trash' => _x( 'No Resource found in Trash', 'resource' ),
        'parent_item_colon' => _x( 'Parent Resource:', 'resource' ),
        'menu_name' => _x( 'Resources', 'resource' ),
    );

    $args = array( 
        'labels' => $comlabels,
        'hierarchical' => false,
        'taxonomies' => array('category'),
        'supports' => array( 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'resources', $args );
}

//Register Home Page Slides Post Type

//add_action( 'init', 'register_cpt_slides' );

function register_cpt_slides() {

    $comlabels = array( 
        'name' => _x( 'Homepage Slides', 'slides' ),
        'singular_name' => _x( 'Homepage Slide', 'slides' ),
        'add_new' => _x( 'Add New', 'slides' ),
        'add_new_item' => _x( 'Add New Homepage Slide', 'slides' ),
        'edit_item' => _x( 'Edit Homepage Slide', 'slides' ),
        'new_item' => _x( 'New Homepage Slide', 'slides' ),
        'view_item' => _x( 'View Homepage Slide', 'slides' ),
        'search_items' => _x( 'Search Homepage Slides', 'slides' ),
        'not_found' => _x( 'No Homepage Slides found', 'slides' ),
        'not_found_in_trash' => _x( 'No Staff found in Trash', 'slides' ),
        'parent_item_colon' => _x( 'Parent Homepage Slide:', 'slides' ),
        'menu_name' => _x( 'Homepage Slides', 'slides' ),
    );

    $args = array( 
        'labels' => $comlabels,
        'hierarchical' => false,
        
        'supports' => array( 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'slides', $args );
}

//Include Custom MetaBox File
include 'demo.php';

?>