<?php get_header(); ?>

<section id="prestations">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_anniversaire_enfant', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>

                    <div class="text-overlay">
                        <h2><?php the_field('titre_anniversaire_enfant_prestation', 'option'); ?></h2>
                        <p><?php the_field('description_anniversaire_enfant_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_anniversaire_adulte', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                        <h2><?php the_field('titre_anniversaire_adulte_prestation', 'option'); ?></h2>
                        <p><?php the_field('description_anniversaire_adulte_prestation', 'option'); ?></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_bapteme', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_bapteme_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_bapteme_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_babyshower', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_babyshower_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_babyshower_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_mariage', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_mariage_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_mariage_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">

                        <?php
                        $image = get_field('image_fete_de_naissance', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_fete_de_naissance_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_fete_de_naissance_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_anniversaire_de_mariage', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_anniversaire_de_mariage_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_anniversaire_de_mariage_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_ateliers_creatifs', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_atelier_creatif_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_atelier_creatif_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_creations', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_creations_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_creations_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prestation-block">
                    <div class="image-prestation">
                        <?php
                        $image = get_field('image_location', "option");
                        $size = 'custom-prestations';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-overlay">
                    <h2><?php the_field('titre_location_prestation', 'option'); ?></h2>
                    <p><?php the_field('description_location_prestation', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>





<?php get_footer(); ?>