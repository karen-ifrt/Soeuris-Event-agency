<?php get_header(); ?>


<section class="single-event">
    <div class="container">

        <div class="event-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php
        $images = get_field('gallery');

        if ($images) : ?>

            <div class="row">
                <div class="col-md-6">
                    <div id="slider" class="flexslider">
                        <?php foreach ($images as $image) : ?>
                            <div class="slides">
                                <img src="<?php echo esc_url($image['sizes']['carousel-events']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-6">
                    <div class="event-date">
                        <p>Date de l'événement : <?php the_field('date_event');  ?></p>
                    </div>
                    <div class="event-content">
                        <p><?php the_field('descr_event');  ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php $catename = get_the_terms(get_the_ID(), array('category'));
        foreach ($catename as $term) {
            $term_link = get_term_link($term, array('category'));

        ?>
            <div class="row">
                <a>Type d'événement : <?php echo $term->name ?></a>
            </div>
        <?php
        }
        ?>
    </div>

</section>

<?php get_footer(); ?>