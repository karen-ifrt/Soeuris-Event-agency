<?php get_header(); ?>

<?php
$args = array('post_type' => 'evenements', 'posts_per_page' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
	the_title();
	echo '<div class="entry-content">';
	the_field('descr_event');
	echo '</div>';
endwhile;

?>

<?php

$taxonomy = 'category';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>


<?php get_footer(); ?>