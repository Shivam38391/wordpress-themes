<?php

// function to show menus in dashboard

// we can define menus in array it could be header menu sidebar menu and footer menu
register_nav_menus( 
    array("primary-menu"=>'Header Menu',)
);
    
add_theme_support('post-thumbnails');

// for dynamic logo it will add option to admin panel
add_theme_support('custom-header');


?>

<?php 

function enqueue_gutenberg_styles() {
    wp_enqueue_style( 'gutenberg', get_stylesheet_directory_uri() . 'D:/xampp/htdocs/wordpress/wp-content/plugins/code-snippets/dist/edit.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_gutenberg_styles' );


?>