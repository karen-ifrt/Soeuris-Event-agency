<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="social-nav">
            <div class="container">
                <div class="all-first-nav">
                    <div class="contact-nav">
                        <div class="phone">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="Téléphone Soeur'is sur le gateau" width="18">
                            <p>06 59 56 81 04</p>
                        </div>
                        <div class="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home.svg" alt="Adresse Soeur'is sur le gateau" width="18">
                            <p>Soucieu-En-Jarrest</p>
                        </div>
                    </div>

                    <ul>
                        <li><a href="https://www.facebook.com/Soeuris-sur-le-g%C3%A2teau-246436362929936/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook Soeur'is sur le gateau" width="25"></a></li>
                        <li><a href="https://www.instagram.com/soeur.is.sur.le.gateau/" target="_blank"><img class="instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram Soeur'is sur le gateau" width="25"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <nav class="desktop-nav">
                <div class="logo-soeuris">

                    <a href="<?php echo home_url('/'); ?>">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.jpg" alt="Soeur'is sur le gateau" class="logo">
                    </a>
                </div>

                <div class="menu-desktop">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Main'
                    ));
                    ?>
                </div>
            </nav>
        </div>

        <nav class="menu-mobile" id="menu-mobile">
            <div class="logo-soeuris">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.jpg" alt="Soeur'is sur le gateau" class="logo" width="200">
                </a>
            </div>
            <div class="burger-mobile" id="burger-mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" alt="Menu" class="burger" width="40">
            </div>
            <div class="content-menu" id="content-menu">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Main'
                ));
                ?>
                    <ul class="responsive-social">
                        <li class="facebook-responsive"><a href="https://www.facebook.com/Soeuris-sur-le-g%C3%A2teau-246436362929936/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook Soeur'is sur le gateau" width="25"></a></li>
                        <li><a href="https://www.instagram.com/soeur.is.sur.le.gateau/" target="_blank"><img class="instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram Soeur'is sur le gateau" width="25"></a></li>
                    </ul>

                    <div class="contact-nav">
                        <div class="phone">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="Téléphone Soeur'is sur le gateau" width="18">
                            <p>06 59 56 81 04</p>
                        </div>
                        <div class="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home.svg" alt="Adresse Soeur'is sur le gateau" width="18">
                            <p>Soucieu-En-Jarrest</p>
                        </div>
                    </div>
            </div>
        </nav>
    </header>

    <button onclick="topFunction()" id="myBtn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chevron-up.svg" alt="Revenir en haut de la page"></button>