<?php get_header(); ?>

<div class="agence">
    <h2><?php the_field('titre_presentation_agence', 'options') ?></h2>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="agence-img">
                <?php
                        $image = get_field('photo_equipe', "options");
                        $size = 'custom-agence';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        }
                        ?>
                </div>
            </div>

            <div class="col-md-8">
                <div class="agence-content">
                    <p><?php the_field('description_agence', 'options'); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include(TEMPLATEPATH . "/template-parts/what_we_do.php"); ?>


<?php get_footer(); ?>