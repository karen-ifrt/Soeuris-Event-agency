<?php get_header(); ?>

<div class="agence">
    <h2><?php the_field('titre_agence'); ?></h2>

    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="agence-content">
                    <?php the_content(); ?>
                </div>

        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php include(TEMPLATEPATH . "/template-parts/what_we_do.php"); ?>


<?php get_footer(); ?>