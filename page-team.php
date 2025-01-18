<?php 
/*
Template Name: Our team
*/
?>

<?php 
    get_header();
?>

    <div class="specialists">
        <div class="container">
            <div class="title"><?php the_field('our_team') ?></div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <img class="specialists__img" src="<?php the_field('image_team') ?>" alt="our team">
                </div>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>