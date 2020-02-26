<?php get_header(); ?>
<div class="hero-carousel">
    <div class="first-image">
        <?php
        $image = get_field('hero_img_1');
        $size = 'large';
        $thumb = $image['sizes'][$size];

        if ($image) { ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
        <?php
        } ?>
    </div>
    <div class="second-image">
        <?php
        $image = get_field('hero_img_2');
        $size = 'large';
        $thumb = $image['sizes'][$size];

        if ($image) { ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
        <?php
        } ?>
    </div>
    <div class="third-image">
        <?php
        $image = get_field('hero_img_3');
        $size = 'large';
        $thumb = $image['sizes'][$size];

        if ($image) { ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
        <?php
        } ?>
    </div>
</div>

<div class="banniere-home">
    <div class="banniere-home-content">
        <p><?php the_field('titre_hero'); ?></p>
    </div>
</div>

<div class="container">
    <div class="home-blocks">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_1');
                        $size = 'custom-size-home';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos événements</h3>
                        </div>
                        <div class="home-block-descr">
                            <p><?php the_field('description_1'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_2');
                        $size = 'custom-size-home';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos décorations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p><?php the_field('description_2'); ?>
                    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="first-block" id="block-reverse">
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos locations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p><?php the_field('description_3'); ?>
                    </p>
                        </div>
                    </div>
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_3');
                        $size = 'custom-size-home';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="first-block" id="block-reverse">
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos créations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p><?php the_field('description_4'); ?>
                    </p>
                        </div>
                    </div>
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_4');
                        $size = 'custom-size-home';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banniere-home">
    <div class="banniere-home-content">
        <p>Nos derniers événements</p>
    </div>
</div>

<?php get_footer(); ?>