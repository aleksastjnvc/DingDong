<?php

// add fonts, icons, sheets, scripts 

function enqueue_styles_and_scripts(){

    $ver = '1.0.0';

    wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
    wp_enqueue_style('maincss');

    if(is_page('contact')) {
        $ver = '1.0.0';
        
        wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), $ver, 'all');
        wp_enqueue_style('contact');

        wp_register_script('contactjs', get_template_directory_uri() . '/assets/js/contact.js', array(), $ver, 'all');
        wp_enqueue_script('contactjs');
    }

    if(!is_page('contact')) {
    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $ver, 'all');
    wp_enqueue_script('mainjs');
    }
 

}

add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');


function enqueue_load_fa() {
    wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/6ff5829ce7.js' );
  }
  
  add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');


  function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Genos:wght@200&display=swap', false );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto+Mono:ital,wght@1,300&family=Saira+Condensed:wght@500&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );


// adding theme support, adding features in posts dashboard

function dd_init(){
    add_theme_support('post-thumbnails');
    // dynamic title
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'dd_init');


// Events post type, adding events

function dd_custom_post_type(){
    register_post_type('ideas', array(
        'rewrite' => array('slug' => 'ideas'),
        'labels' => array(
            
            'name' => 'Ideas',
            'singular_name' => 'Idea',
            'add_new_item' => 'Add New Idea',
            'edit_item' => 'Edit Idea'
        ),

        'menu-icon' => 'dashicons-star-filled',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt',
            'comments'
            )
         )
    );
}

add_action('init', 'dd_custom_post_type');


// sidebar


function dd_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init', 'dd_widgets');