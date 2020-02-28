<?php get_header(); ?>

<section id="full-events">

    <h1>Nos réalisations</h1>

    <div class="container">
        <div class="row">
            <div class="all-categories">
                <a href="#" class="filter-category" data-toggle="portfilter" data-target="all">Tout</a>
                <?php
                $terms = get_terms("category");
                $termsString .=  $term->slug;
                $count = count($terms);
                if ($count > 0) {
                    foreach ($terms as $term) {
                        echo "<a href='#' class='filter-category' data-toggle='portfilter' data-target='" . $term->slug . "'>" . $term->name . "</a>\n";
                    }
                }
                ?>
            </div>
        </div>
        <br />
        <div class="row">
            <?php
            $portfolio_query = new WP_Query(array(
                'post_type' => 'evenements',
                'order' => 'DESC',
            ));


            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $terms_portfolio = get_the_terms(get_the_ID(), 'category');
            ?>

                    <div class="col-md-3 mb-5" data-tag="<?php echo $terms_portfolio[0]->slug; ?>">
                        <div class="all-event-content">
                            <a href="<?php the_permalink(); ?>">
                                <div class="event-first-pic">
                                    <?php $images = get_field('gallery');
                                    $image_url = $images[0]['sizes']['custom-size'];
                                    ?>
                                    <?php if ($images) : ?>
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $images[0]['title']; ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="overlay">
                                <div class="caption">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>