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
