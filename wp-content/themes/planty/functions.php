<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/css/header.css', array(), filemtime(get_stylesheet_directory() . '/css/header.css'));
    wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), filemtime(get_stylesheet_directory() . '/css/footer.css'));
    wp_enqueue_style('shortcode-style', get_stylesheet_directory_uri() . '/css/shortcode.css', array(), filemtime(get_stylesheet_directory() . '/css/shortcode.css'));
}

/* SHORTCODES */

add_shortcode('banniere-image', 'banniere_image_func');

function banniere_image_func($atts)
{

    $atts = shortcode_atts(array(
        'src' => ''
    ), $atts, 'banniere-image');

    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="banniere-image" style="background-image: url(<?= $atts['src'] ?>)">
            
        </div>

        <?php
    }

    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}