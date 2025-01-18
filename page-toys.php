<?php 
/*
Template Name: Toys
*/
?>

<?php 
    get_header();
?>

    <div class="toys">
        <div class="container">
            
            <a href="<?php echo get_category_link(3);?>"><h2 class="subtitle">Soft toys</h2></a>

            <div class="toys__wrapper">
                <?php
                    // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'soft_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                    //global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post ); 
                ?>

                    <div class="toys__item" style="background-image: url(<?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                                echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                            ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('descr_toys'); ?>                            
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">More info</a>
                            </div>
                        </div>

                    
                        <?php
                            }
                            
                            wp_reset_postdata(); // сброс
                        ?>

                  
                </div>


                <a href="<?php echo get_category_link(4);?>"><h2 class="subtitle">Education toys</h2></a>
                <div class="toys__wrapper">

                    <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'education_toys',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        //global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>

                            <div class="toys__item" style="background-image: url(<?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                            ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('descr_toys'); ?>                            
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">More info</a>
                            </div>
                            </div>
                    
                        <?php
                            }
                            
                            wp_reset_postdata(); // сброс
                        ?>

                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span>Didn't find what you were looking for?</span> Contact us - and we will be happy to create any toy you wish. You can choose everything: size, material, shape...!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>