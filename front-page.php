<?php get_header(); ?>
<div class="hero-carousel">
    <div class="first-image">
        <?php
        $image = get_field('hero_img_1', 'options');
        $size = 'large';
        $thumb = $image['sizes'][$size];

        if ($image) { ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
        <?php
        } ?>
    </div>
    <div class="second-image">
        <?php
        $image = get_field('hero_img_2', 'options');
        $size = 'large';
        $thumb = $image['sizes'][$size];

        if ($image) { ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
        <?php
        } ?>
    </div>
    <div class="third-image">
        <?php
        $image = get_field('hero_img_3', 'options');
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
        <h1><?php the_field('titre_hero', 'options'); ?></h1>
    </div>
</div>

<div class="container">
    <div class="home-blocks">
        <div class="row no-gutters reveal-2">
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_1', 'options');
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
                            <p><?php the_field('description_1', 'options'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="first-block">
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_2', 'options');
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
                            <p><?php the_field('description_2', 'options'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters reveal-right-2">
            <div class="col-md-6">
                <div class="first-block" id="block-reverse">
                    <div class="home-block-content">
                        <div class="home-block-title">
                            <h3>Nos locations</h3>
                        </div>
                        <div class="home-block-descr">
                            <p><?php the_field('description_3', 'options'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_3', 'options');
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
                            <p><?php the_field('description_4', 'options'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="home-block-img">
                        <?php
                        $image = get_field('image_4', 'options');
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

<div class="banniere-event">
    <div class="banniere-event-content">
        <h2>Nos derniers événements</h2>
    </div>
</div>

<div class="home-events">
    <div class="container">
        <div class="row reveal-2">

            <?php
            $new_loop = new WP_Query(array(
                'post_type' => 'evenements',
                'posts_per_page' => 3 // put number of posts that you'd like to display
            ));
            ?>
            <?php if ($new_loop->have_posts()) : ?>
                <?php while ($new_loop->have_posts()) : $new_loop->the_post(); ?>
                    <div class="col-md-4">
                        <div class="recent-block">

                            <a href="<?php the_permalink(); ?>">

                                <div class="event-first-pic">
                                    <?php $images = get_field('gallery');
                                    $image_url = $images[0]['sizes']['custom-size-home'];
                                    ?>
                                    <?php if ($images) : ?>
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $images[0]['title']; ?>" />
                                </div>
                                <div class="overlay">
                                    <div class="caption">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-all-events">
                    <a href="<?php echo get_post_type_archive_link('evenements'); ?>">Toutes nos réalisations</a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-atelier">
    <div class="container">
        <div class="row">
            <div class="col-md-6 reveal-right-2">
                <div class="image-atelier">
                    <?php
                    $image = get_field('image_atelier', 'options');
                    $size = 'custom-ateliers';
                    $thumb = $image['sizes'][$size];

                    if ($image) { ?>
                        <img src="<?php echo $thumb; ?>" alt="<?php echo $image['title']; ?>" />
                    <?php
                    } ?>
                </div>
            </div>
            <div class="col-md-6 reveal-right-3">
                <div class="titre-atelier">
                    <h3>Nos prochains ateliers</h3>
                </div>
                <div class="atelier-entete">
                    <p><?php the_field('en-tete_ateliers', 'options'); ?></p>
                </div>
                <div class="atelier-list">
                    <p><?php the_field('liste_ateliers', 'options'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

