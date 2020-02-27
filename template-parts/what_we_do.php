<div class="prestations">

    <div class="container">
        <h2><?php the_field("titre_prestations", "option"); ?></h2>
    </div>

<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_birthdays', "option");
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_birthdays', "option") ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_birthdays', "option"); ?>
                        </p>
                    </div>                 
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_family', "option");
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_family', "option") ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_family', "option"); ?>
                        </p>
                    </div>               
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_atelier', "option");
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_ateliers', "option") ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_ateliers', "option"); ?>
                        </p>
                    </div>                 
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-content">
                    <div class="block-img">
                        <?php
                        $image = get_field('img_location', "option");
                        $size = 'custom-size';
                        $thumb = $image['sizes'][$size];

                        if ($image) { ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $image['title']; ?>" />
                        <?php
                        } ?>
                    </div>
                    <div class="block-title">
                        <h3><?php the_field('titre_location', "option") ?></h3>
                    </div>
                    <div class="block-description">
                        <p>
                            <?php the_field('descr_location', "option"); ?>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>

</div>