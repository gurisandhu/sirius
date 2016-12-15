<?php 

// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************
function my_styles(){
	wp_enqueue_style('sirius-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.2');

    wp_enqueue_style('sirius-fonts-mont', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');

    wp_enqueue_style('sirius-fonts-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');

    wp_enqueue_style( 'sirius-swipere' , get_template_directory_uri() . '/library/swiper.min.css');

     wp_enqueue_style( 'sirius-style' , get_template_directory_uri() . '/style.css');
}
add_action('template_redirect', 'my_styles');
//end of styles

function my_scripts(){
  wp_enqueue_script( 'sirius-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js', array('jquery'), true);
  wp_enqueue_script( 'sirius-script', get_bloginfo('template_directory') . '/compressed/script.js', array('jquery'), true);

}
add_action('template_redirect', 'my_scripts');
 //end of my_scripts

// General Jquery CDN Start here
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

    function my_jquery_enqueue() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
       wp_enqueue_script('jquery');
    }
// End of General Jquery CDN

// *************************
// Display Main Navigation in admin section
// *************************

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'page-menu' => __( 'Page Menu' ),
      'page-menu-second' => __('Page menu second'),
      'page-menu-accreditation' => __('Page menu Accreditation'),
      'page-menu-references' => __('Page menu References')
    )
  );
}
add_action( 'init', 'register_my_menus' );

// *************************
// Contact info (ACF: option page)
// *************************

if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Misc.',
      'menu_title'  => 'Misc.',
      'menu_slug'   =>  'contact-info-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-list-view',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}

// *************************
// Projects (WP Custom post type)
// *************************

// Our custom post type function
function my_custom_post_project() {
      $labels = array(
        'name'                => _x( 'Projects', 'post type general name' ),
        'singular_name'       => _x( 'Project', 'post type singular name'),
        'add_new_item'        => __( 'Add Project'),
        'edit_item'           => __( 'Edit Project'),
        'new_item'            => __( 'New Project'),
        'all_items'           => __( 'All Project'),
        'view_item'           => __( 'View Project'),
        'not_found'           => __( 'No Projects found'),
        'not_found_in_trash'  => __( 'No Projects found in the Trash'),
        'menu_name'           => __( 'Projects')
      );
      $args = array(
          'labels'      => $labels,
          'taxonomies'  => array('category'),
          'menu_icon'   => 'dashicons-building',
          'menu_position' =>  95,
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'projects', 'with_front' => true),
          'show_in_nav_menus' => true
        );
      register_post_type('project', $args);
  }
  //flush_rewrite_rules(false);
// Hooking up our function to theme setup
add_action( 'init', 'my_custom_post_project');


 ?>