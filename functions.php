<?php 

// Ajouter la gestion des menus
add_theme_support( 'menus' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// Ajout des styles et scripts

function wpdocs_soeuris_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('bootstrap-4-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.js', array('jquery'), 'v4.0.0', true);
    wp_enqueue_style('bootstrap-4', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css', array(), 'v4.0.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action( 'wp_enqueue_scripts', 'wpdocs_soeuris_scripts' );

// Fonction récupérer les templates

