<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');


function childhood_styles() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    //wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css');
    //wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
};
function childhood_scripts() {
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

 add_theme_support( 'custom-logo' );
 add_theme_support( 'post-thumbnails' );

 add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2 );
function acf_add_allowed_iframe_tag( $tags, $context ) {
    if ($context === 'acf' ) {
        $tags['iframe'] = array(
        'src' => true,
        'height' => true,
        'width' => true,
        'frameborder' => true,
        'allowfullscreen' => true,
        );
    }
    return $tags;
}

?>