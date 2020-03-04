<?php get_header(); ?>




<section class="single-event">
    <div class="container">
    <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
        <div class="event-title">
            <h1><?php the_title(); ?></h1>
        </div>

        <?php $catename = get_the_terms(get_the_ID(), array('category'));
        foreach ($catename as $term) {
            $term_link = get_term_link($term, array('category'));

        ?>
            <div class="event-type">
                <h3>Thème : <span><?php the_field('theme'); ?></span></h3>
                <h2>Type d'événement : <span><?php echo $term->name ?></h2>
            </div>

            <?php
            $images = get_field('gallery');

            if ($images) : ?>

                <div class="row">
                    <div class="col-md-7">
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

                    <div class="col-md-5">
                        <div class="full-event-content">
                            <div class="event-date">
                                <p>Date de l'événement : <?php the_field('date_event');  ?></p>
                            </div>
                            <div class="event-content">
                                <p><?php the_field('descr_event');  ?></p>
                            </div>
                        </div>

                        <div class="banner-event">
                            <a href="<?php echo esc_url(get_permalink(9)); ?>">
                            <div class="block-event">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 318.601 318.6" style="enable-background:new 0 0 318.601 318.6;" xml:space="preserve">
                                    <g>
                                        <path d="M45.296,318.6h228.007V0H45.296V318.6z M217.358,261.041H101.255v-12.071h116.103V261.041z M232.883,235.849H85.73v-12.076
		h147.152V235.849z M101.255,212.44v-12.07h116.103v12.07H101.255z M57.38,12.15h203.853v121.5L57.38,182.25V12.15z M95.444,105.609
		c-2.413-1.258-5.297-1.475-8.644-0.654l-14.518,3.552l8.279,33.806l7.014-1.717l-2.975-12.155l7.043-1.725
		c3.67-0.901,6.296-2.418,7.873-4.551c1.572-2.139,1.872-5.2,0.896-9.191C99.518,109.318,97.864,106.866,95.444,105.609z
		 M93,118.924c-0.699,1.03-1.854,1.745-3.462,2.138l-6.368,1.562l-2.434-9.951l6.365-1.566c1.608-0.396,2.958-0.329,4.034,0.203
		c1.081,0.53,1.83,1.674,2.262,3.436C93.83,116.506,93.696,117.898,93,118.924z M109.653,99.354l-3.792,36.764l7.388-1.809
		l0.588-7.512l12.453-3.051l3.929,6.404l7.665-1.875L117.646,97.4L109.653,99.354z M114.333,120.5l1.128-14.375l7.528,12.258
		L114.333,120.5z M167.903,117.98c-0.253-0.52-0.569-1.55-0.949-3.096l-0.563-2.268c-0.575-2.37-1.34-4.05-2.268-5.049
		c-0.929-0.994-2.252-1.614-3.964-1.856c1.706-1.097,2.774-2.523,3.207-4.277c0.432-1.75,0.448-3.43,0.055-5.034
		c-0.324-1.329-0.822-2.462-1.497-3.401c-0.67-0.941-1.469-1.745-2.397-2.431c-1.117-0.825-2.37-1.355-3.741-1.587
		s-3.225-0.087-5.547,0.438l-16.166,3.957l8.276,33.803l6.903-1.682l-3.246-13.258l6.9-1.69c1.967-0.483,3.396-0.448,4.287,0.092
		c0.891,0.543,1.622,1.888,2.178,4.037l0.815,3.132c0.258,0.989,0.593,1.938,1.01,2.84c0.205,0.438,0.506,1.005,0.901,1.703
		l7.789-1.911l-0.2-0.849C168.89,119.346,168.305,118.805,167.903,117.98z M155.498,103.394c-0.67,0.551-1.753,1.015-3.262,1.381
		l-7.602,1.864l-2.226-9.083l7.797-1.912c1.453-0.355,2.592-0.422,3.412-0.205c1.463,0.39,2.447,1.605,2.95,3.657
		C157.032,100.997,156.677,102.426,155.498,103.394z M193.854,85.077l-10.114,2.479l6.818,27.822l-7.108,1.738L176.626,89.3
		l-10.156,2.484l-1.467-5.983l27.391-6.708L193.854,85.077z M223.808,71.4l-6.128,23.899l3.096,12.674l-7.066,1.727l-3.101-12.675
		l-16.875-18.262l8.332-2.041l10.626,13.004l3.105-16.369L223.808,71.4z M243.098,95.494l1.619,6.631l-6.855,1.68l-1.624-6.632
		L243.098,95.494z M237.318,94.004l-5.765-15.298l-2.099-8.572l7.178-1.754l2.104,8.569l2.004,16.216L237.318,94.004z
		 M187.658,40.706H72.278v-8.517h115.38V40.706z" />
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                                <p>Toutes nos prestations</p>
                            </div>
                        </a>
                        <a href="<?php echo get_post_type_archive_link ( 'evenements' ); ?>">
                            <div class="block-event">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 33.277 33.277" style="enable-background:new 0 0 33.277 33.277;" xml:space="preserve">
                                    <g>
                                        <path d="M11.246,18.75c1.122,3.728,1.396,7.667,1.222,11.541c-0.023,0.472,0.621,0.173,0.636-0.171
		c0.178-3.924-0.089-7.926-1.226-11.703C11.753,18.003,11.15,18.428,11.246,18.75z M21.456,22.114
		c0.277,0.991,0.081,2.011,0.14,3.023c0.078,1.353,0.907,2.392,1.919,3.219c0.062-0.197,0.128-0.393,0.193-0.589
		c-0.926,0.402-2.413,1.068-2.334,2.307c0.069,1.067,0.883,1.831,0.692,2.968c-0.079,0.459,0.579,0.161,0.636-0.17
		c0.146-0.849-0.134-1.577-0.472-2.34c-0.137-0.31-0.284-0.652-0.181-0.991c0.186-0.607,1.258-0.96,1.763-1.181
		c0.181-0.079,0.393-0.427,0.192-0.589c-1.039-0.852-1.749-1.833-1.789-3.207c-0.027-0.941,0.132-1.858-0.129-2.782
		C21.971,21.366,21.367,21.791,21.456,22.114z M21.689,3.437c-4.065,0-7.364,4.191-7.364,9.362c0,5.169,5.493,9.736,7.364,9.736
		c1.874,0,7.365-4.566,7.365-9.736C29.054,7.628,25.757,3.437,21.689,3.437z M23.63,6.278l1.358-0.612
		c4.159,4.383,1.037,7.747,1.037,7.747C27.453,9.335,23.63,6.278,23.63,6.278z M12.336,18.583h-0.995c0,0-0.169,0.938-0.611,1.223
		c-0.441,0.286,1.261-0.665,1.956-0.026C12.565,19.674,12.138,19.243,12.336,18.583z M12.686,19.78
		c0.02,0.018,0.032,0.026,0.032,0.026C12.707,19.797,12.695,19.79,12.686,19.78z M22.606,21.896h-0.994c0,0-0.17,0.937-0.61,1.223
		c-0.443,0.286,1.26-0.665,1.954-0.025C22.835,22.985,22.409,22.555,22.606,21.896z M22.955,23.093
		c0.021,0.016,0.033,0.025,0.033,0.025C22.978,23.109,22.967,23.102,22.955,23.093z M17.626,4.006C16.294,1.585,14.088,0,11.587,0
		C7.52,0,4.223,4.191,4.223,9.361s5.492,9.736,7.364,9.736c0.73,0,2.012-0.697,3.304-1.853c-0.869-1.433-1.472-3.073-1.472-4.78
		C13.419,8.731,15.139,5.509,17.626,4.006z M8.617,4.82C8.549,4.891,8.482,4.963,8.415,5.037C8.283,5.185,8.154,5.339,8.03,5.496
		c-0.25,0.315-0.479,0.646-0.689,0.99C6.922,7.174,6.592,7.919,6.412,8.705c-0.18,0.784-0.195,1.612-0.002,2.416
		c0.189,0.804,0.588,1.57,1.114,2.245c-0.621-0.588-1.149-1.302-1.482-2.126c-0.337-0.822-0.464-1.742-0.396-2.646
		C5.711,7.688,5.955,6.8,6.303,5.965c0.174-0.419,0.375-0.826,0.6-1.221C7.016,4.546,7.134,4.352,7.259,4.16
		c0.064-0.097,0.127-0.191,0.194-0.287c0.07-0.097,0.133-0.186,0.219-0.293l1.142,1.046C8.756,4.677,8.681,4.751,8.617,4.82z" />
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>

                                <p>Tous nos événements</p>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(get_permalink(15)); ?>">
                            <div class="block-event">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M426.667,0h-320C83.146,0,64,19.135,64,42.667v42.667H53.333c-5.896,0-10.667,4.771-10.667,10.667
			s4.771,10.667,10.667,10.667H96c5.875,0,10.667,4.781,10.667,10.667c0,5.885-4.792,10.667-10.667,10.667H74.667
			C68.771,128,64,132.771,64,138.667V192H53.333c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667H96
			c5.875,0,10.667,4.781,10.667,10.667S101.875,234.667,96,234.667H74.667c-5.896,0-10.667,4.771-10.667,10.667v53.333H53.333
			c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667H96c5.875,0,10.667,4.781,10.667,10.667
			c0,5.885-4.792,10.667-10.667,10.667H74.667C68.771,341.333,64,346.104,64,352v53.333H53.333c-5.896,0-10.667,4.771-10.667,10.667
			c0,5.896,4.771,10.667,10.667,10.667H96c5.875,0,10.667,4.781,10.667,10.667c0,5.885-4.792,10.667-10.667,10.667H74.667
			C68.771,448,64,452.771,64,458.667v10.667C64,492.865,83.146,512,106.667,512h320c23.521,0,42.667-19.135,42.667-42.667V42.667
			C469.333,19.135,450.188,0,426.667,0z M405.333,338.958c0,13.073-10.646,23.708-23.708,23.708
			c-128.083,0-232.292-104.208-232.292-232.292c0-13.073,10.646-23.708,23.708-23.708h45.625c13.063,0,23.708,10.635,23.708,23.708
			c0,14.813,2.313,29.344,6.875,43.208c2.729,8.646,0.479,17.854-5.833,24.167l-18.688,24.885
			c16.063,29.51,34.896,48.344,64.625,64.615l26-19.635c5.25-5.365,14.729-7.615,23.208-4.698
			c13.708,4.521,28.25,6.844,43.063,6.844c13.063,0,23.708,10.635,23.708,23.708V338.958z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                                <p>Nous contacter</p>
                            </div>
                        </a>
                        </div>
                    </div>

                </div>
    </div>
<?php endwhile; ?>


<?php
        }
?>
</div>

</section>

<?php get_footer(); ?>