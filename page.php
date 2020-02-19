<?php get_header(); ?>
<section class="hero">
    <div class="encard-hero">
        <div class="img-content">
            <h1><?php the_field('titre_hero'); ?></h1>
            <h2><?php the_field('sous-titre_hero'); ?></h2>
        </div>
    </div>
</section>

<div class="container">
<?php
        if (is_page('agence')) {   ?>

    <div class="agence">

        <h2><?php the_field('titre_agence'); ?></h2>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <div class="agence-content">
            <?php the_content(); ?>
        </div>

        <?php endwhile; endif; ?>
    </div>

    <?php
        }
        ?>

</div>



<?php get_footer(); ?>