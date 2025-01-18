<?php 
/*
Template Name: Our history
*/
?>

<?php 
    get_header();
?>

    <div class="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('our_history') ?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history1-title') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history1-text') ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('image1_history') ?>" alt="world of child">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_2.jpg" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history2-title') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history2-text') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history3-title') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history3-text') ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_3.jpg" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

<?php
    get_footer();
?>