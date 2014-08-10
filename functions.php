<?php

function theme_styles() {

    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    // wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'social', get_template_directory_uri() . 'css/webfonts/...' );

    // This is to enqueue the 'flexslider' plugin only on the Home page
    // wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
    // if( is_page( 'home' ) ) {
    //     wp_enqueue_style( 'flexslider' ); 
    // }
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus; must add menu to header.php file.
add_theme_support( 'menus' );

?>
