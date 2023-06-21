<?php





// function to show menus in dashboard

// we can define menus in array it could be header menu sidebar menu and footer menu
register_nav_menus( 
    array("primary-menu"=>'Header Menu',
    )
);


//setup widget area


function custom_sidebar_init() {

    $args = [
        "name" => esc_html__( "CUSTOM sidebar" ) ,
        "id"  => "custom-sidebar",
        "discriminator" => esc_html__( "add widgets for custom siebar here" ),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>",
    ];



    register_sidebar( $args );
}

add_action( 'widgets_init', 'custom_sidebar_init' );



    
add_theme_support('post-thumbnails');

// for dynamic logo it will add option to admin panel
add_theme_support('custom-header');


add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array( 'style','script' ) );
add_theme_support( 'automatic-feed-links' ); 


?>
