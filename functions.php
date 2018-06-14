<?php 
/**
 * ENTA Theme functions and definitions
 *
 * @package enta
 */
//Remove uncessary WordPress Head fuctions
//require_once( __DIR__ . '/inc/functions/test.php');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
      
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
      
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink





/**********************************************************
**
** tlk_scripts_styles()
** Register & Enqueue Theme Styles and Scripts
**
***********************************************************/
function tlk_scripts_styles() {
  global $wp_styles;

    //De-register local jQuery and register/enqueue jQuery CDN version. 
    wp_deregister_script( 'jquery' );
    //wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    //wp_enqueue_script( 'jquery' );


    // Register Styles
    wp_register_style( 'theme-style', get_stylesheet_uri(), array(), null );
    
    // Enqueue Styles
    wp_enqueue_style( 'theme-style' );
  
    // Register Scripts

    //wp_register_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps-min.js',array(),null,true);
    //wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js',array(),null,true);
    //wp_register_script('pushy', get_template_directory_uri() . '/assets/js/pushy.js',array(),null,true);

    wp_register_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts-min.js',array(),null,true);

    // Enqueue Scripts
    //wp_enqueue_script( 'gmaps' );
    //wp_enqueue_script( 'flexslider' );
    //wp_enqueue_script( 'pushy' );
    wp_enqueue_script( 'theme-scripts' );
}
add_action('wp_enqueue_scripts', 'tlk_scripts_styles');





/**********************************************************
**
** register_nav_menus()
** Registers navigation menus for us within theme
**
***********************************************************/
register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Secondary Menu')
));


