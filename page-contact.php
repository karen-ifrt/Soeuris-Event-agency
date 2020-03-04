<?php get_header(); ?>

<div class="contact-content">

    <h1>Contactez-nous</h1>

    <div class="all-container">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-formulaire-info">
                        <div class="formulaire-tel">
                            <div class="telephone-img">
                                <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone_2.svg" alt="Téléphone Soeur'is">
                            </div>
                            <div class="telephone-content">
                                <a href="tel:+33659568104"><?php the_field('telephone_formulaire', 'options'); ?></a>
                            </div>
                        </div>
                        <div class="formulaire-mail">
                            <div class="mail-img">
                                <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Email Soeur'is">
                            </div>
                            <div class="mail-content">
                                <a href="mailto:soeurissurlegateau@yahoo.fr"><?php the_field('adresse_mail_formulaire', 'options'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="all-formulaire-deux">
                        <div class="formulaire-adresse">
                            <div class="adresse-img">
                                <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/img/home_2.svg" alt="Soucieu En Jarrest">
                            </div>
                            <div class="adresse-content">
                                <p><?php the_field('adresse_formulaire', 'options'); ?></p>
                            </div>
                        </div>

                        <div class="formulaire-reseaux">
                            <div class="formulaire-facebook">
                                <a href="https://www.facebook.com/Soeuris-sur-le-g%C3%A2teau-246436362929936/" target="_blank">
                                    <img width="35" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_2.svg" alt="Facebook Soeur'is">
                                </a>
                            </div>
                            <div class="formulaire-instagram">
                                <a href="https://www.instagram.com/soeur.is.sur.le.gateau/" target="_blank">
                                    <img width="35" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_2.svg" alt="Instagram Soeur'is">
                                </a>
                            </div>
                            <div class="all-social">
                                <p>Nous suivre</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">

                    <div class="formulaire-description">
                        <p><?php the_field('en-tete', 'options'); ?></p>
                    </div>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="formulaire">
                                <?php the_content(); ?>
                            </div>

                    <?php endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>