<?php
function mythem_enqueue_style() {
    wp_enqueue_style( 'style1', get_stylesheet_directory_uri(). '/css/style.css');
    wp_enqueue_style( 'style2', get_stylesheet_directory_uri(). '/css/media.css' );
    wp_enqueue_style( 'style3', get_stylesheet_directory_uri(). '/libr/OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'style4', get_stylesheet_directory_uri(). '/libr/OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script2', get_stylesheet_directory_uri(). '/libr/OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js',  array(), '1.0', true);
    wp_enqueue_script( 'script1', get_stylesheet_directory_uri(). '/js/script.js',  array('jquery'), '1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'mythem_enqueue_style' );


    add_action('after_setup_theme', function(){
        show_admin_bar( false );
    });

    // add_theme_support( 'menus' );
    add_action( 'after_setup_theme', 'theme_register_nav_menu' );
    function theme_register_nav_menu() {
	    register_nav_menu( 'top', 'Top menu' );
        register_nav_menu( 'footer', 'Footer menu' );
}

    add_theme_support( 'custom-logo' );

    add_theme_support('widgets');

    add_theme_support( 'post-thumbnails' ); 

    add_action( 'init', 'register_group_post_type' );
function register_group_post_type() {

  // Slider post type
  register_post_type('slider', array(
    'label'               => 'Slider',
    'labels'              => array(
      'name'          => 'Slider',
      'singular_name' => 'Slider',
      'menu_name'     => 'Slider',
      'all_items'     => 'All slides',
      'add_new'       => 'Add new',
      'add_new_item'  => 'Add new',
      'edit'          => 'Update',
      'edit_item'     => 'Update slide',
      'new_item'      => 'New slide',
    ),
    'description'         => 'Slider for site',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => false,
    'rest_base'           => '',
    'show_in_menu'        => true,
    'exclude_from_search' => false,
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'menu_icon'           => 'dashicons-format-image',
    'hierarchical'        => false,
    'rewrite'             => false,
    'has_archive'         => false,
    'query_var'           => true,
    'supports'            => array( 'title','editor', 'thumbnail', 'custom-fields' ),
  ) );

}

?>