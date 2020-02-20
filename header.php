<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <nav>
                <a href="<?php echo home_url('/'); ?>">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.jpg" alt="Soeur'is sur le gateau" class="logo">
                </a>

                <div class="menu-desktop">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Main'
                    ));
                    ?>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
    <div class="encard-hero">
        <div class="img-content">
            <h1><?php the_field('titre_hero'); ?></h1>
            <h2><?php the_field('sous-titre_hero'); ?></h2>
        </div>
    </div>
</section>