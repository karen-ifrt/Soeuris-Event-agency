<?php get_header(); ?>

<div class="agence">
    <div class="container">


        <h2><?php the_field('titre_agence'); ?></h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="agence-content">
                    <?php the_content(); ?>
                </div>

        <?php endwhile;
        endif; ?>
    </div>
</div>

<div class="prestations">

    <div class="container">
        <h2><?php the_field("titre_prestations"); ?></h2>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_birthdays');
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_birthdays') ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_birthdays'); ?>
                        </p>
                    </div>
                    <div class="more">
                        <a href="#">En savoir plus</a>
                    </div>                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_family');
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_family') ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_family'); ?>
                        </p>
                    </div>
                    <div class="more">
                        <a href="#">En savoir plus</a>
                    </div>                     
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_atelier');
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_ateliers') ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_ateliers'); ?>
                        </p>
                    </div>
                    <div class="more">
                        <a href="#">En savoir plus</a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_location');
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_location') ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_location'); ?>
                        </p>
                    </div>
                    <div class="more">
                        <a href="#">En savoir plus</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>