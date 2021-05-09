<?php
if ( ! function_exists( 'news_website_template_setup' ) ) :

function news_website_template_setup() {


    load_theme_textdomain( 'news_website_template', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );


    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'news_website_template' ),
        'social'  => __( 'Social Links Menu', 'news_website_template' ),
    ) );

/*
     * Register custom menu locations
     */


/*
    * Set image sizes
     */

    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // news_website_template_setup

add_action( 'after_setup_theme', 'news_website_template_setup' );


if ( ! function_exists( 'news_website_template_init' ) ) :

function news_website_template_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */

    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */


}
endif; // news_website_template_setup

add_action( 'init', 'news_website_template_init' );


if ( ! function_exists( 'news_website_template_custom_image_sizes_names' ) ) :

function news_website_template_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */

    return $sizes;
}
add_action( 'image_size_names_choose', 'news_website_template_custom_image_sizes_names' );
endif;// news_website_template_custom_image_sizes_names



if ( ! function_exists( 'news_website_template_widgets_init' ) ) :

function news_website_template_widgets_init() {

    /*
     * Register widget areas.
     */

}
add_action( 'widgets_init', 'news_website_template_widgets_init' );
endif;// news_website_template_widgets_init



if ( ! function_exists( 'news_website_template_customize_register' ) ) :

function news_website_template_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.



}
add_action( 'customize_register', 'news_website_template_customize_register' );
endif;// news_website_template_customize_register


if ( ! function_exists( 'news_website_template_enqueue_scripts' ) ) :
    function news_website_template_enqueue_scripts() {


    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrapbundle' );
    wp_enqueue_script( 'bootstrapbundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', false, null, true);

    wp_deregister_script( 'easing' );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', false, null, true);

    wp_deregister_script( 'slick' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/lib/slick/slick.min.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);



    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', false, null, 'all');

    wp_deregister_style( 'slick' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/lib/slick/slick.css', false, null, 'all');

    wp_deregister_style( 'slicktheme' );
    wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/lib/slick/slick-theme.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');


    }
    add_action( 'wp_enqueue_scripts', 'news_website_template_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }

require_once "inc/wp_pg_helpers.php";

?>