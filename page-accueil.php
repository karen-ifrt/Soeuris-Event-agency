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
                            <pre><?php the_field('description_1'); ?>
                            </pre>
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
                        <pre><?php the_field('description_2'); ?>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos locations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odit doloribus dolores ipsa architecto quidem earum et totam dolorum! Dolore nemo error totam repudiandae repellat accusantium alias. Deleniti, reiciendis et!
                            </p>
                        </div>
                    </div>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos créations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odit doloribus dolores ipsa architecto quidem earum et totam dolorum! Dolore nemo error totam repudiandae repellat accusantium alias. Deleniti, reiciendis et!
                            </p>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>