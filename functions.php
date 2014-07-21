<?php

// Thumbnail Support

add_theme_support( 'post-thumbnails' );

// Custom Nav Bootsrap
require_once('wp_bootstrap_navwalker.php');

// Header Menu
register_nav_menus( array(
    'primary' => __( 'Header Menu', 'wpbootstrap' ),
) );

// Sidebar widget area
register_sidebar(
    array(
        'name' => 'Sidebar Widget Area',
        'id' => 'sidebar',
        'description' => 'The sidebar widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);

// First footer widget area, located in the footer.
register_sidebar(
    array(
        'name' => 'First Footer Widget Area',
        'id' => 'first-footer',
        'description' => 'The first footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);
 
// Second Footer Widget Area, located in the footer.
register_sidebar(
    array(
        'name' => 'Second Footer Widget Area',
        'id' => 'second-footer',
        'description' => 'The second footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);
 
// Third Footer Widget Area, located in the footer.
register_sidebar(
    array(
        'name' => 'Third Footer Widget Area',
        'id' => 'third-footer',
        'description' => 'The third footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);

?>
