<?php
 function custom_theme_support() {
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form', 
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    register_nav_menus( array(
        'footer_nav' => esc_html__( 'footer navigation', 'rtbread' ),
        'category_nav' => esc_html__( 'category navigation', 'rtbread' ),
     ) );
    add_theme_support( 'editor-styles' );
    add_editor_style(); 
}
 add_action( 'after_setup_theme', 'custom_theme_support' ); 

 function wpbeg_script() {     
    wp_enqueue_style( 'main_style', get_theme_file_uri ( '/css/style.css' ), array() ); 
    wp_enqueue_script( 'js', '//code.jquery.com/jquery-3.4.1.min.js' , '', '3.4.1', true ); 
    wp_enqueue_script( 'mainjs', get_theme_file_uri ( '/js/main.js' ),'', '1.0.0', true );
} 
add_action( 'wp_enqueue_scripts', 'wpbeg_script' ); 


function hamburgerSite_title( $title ) {
    if ( is_front_page() && is_home() ) { 
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { 
        $title = single_post_title( '', false );
    }
        return $title;
}
add_filter( 'pre_get_document_title', 'hamburgerSite_title' );  