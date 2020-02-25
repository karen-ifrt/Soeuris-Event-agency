<?php

// Ajouter la gestion des menus
add_theme_support('menus');

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


// Ajout des styles et scripts

function wpdocs_soeuris_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('bootstrap-4-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.js', array('jquery'), 'v4.0.0', true);
    wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0', true);
    wp_enqueue_style('bootstrap-4', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css', array(), 'v4.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.0');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'wpdocs_soeuris_scripts');

// Images custom size
if (function_exists('add_image_size')) {
    add_image_size('custom-size', 220, 220, true);
    add_image_size('custom-size-home', 300, 300, true);
}

// ACF Options

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// Custom Post Type
function create_posttype()
{

    register_post_type(
        'evenements',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Événements'),
                'singular_name' => __('Événements')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'evenements'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-buddicons-groups',

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');


// Désactiver le bloc d'édition

add_action( 'init', function() {
    remove_post_type_support( 'evenements', 'editor' );
    }, 99);