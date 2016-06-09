<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

function child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        // get_stylesheet_directory_uri actually gets the child theme directory path
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );

    wp_register_style('child-responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array('responsive'));
    wp_enqueue_style('child-responsive',
      get_stylesheet_directory_uri() . '/css/responsive.css',
      array('responsive')
    );
}

function child_theme_scripts() {
  wp_enqueue_script('ttwy_scripts', get_stylesheet_directory_uri() . '/js/treetrunkwise.js', ['jquery'], false, true);
}

// Custom Mailchimp footer bar
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'MailChimp Footer',
    'id' => 'sidebar-6',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    'description' => 'Add the MailChimp for WordPress Custom widget here'
  )
);
