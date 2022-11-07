<?php

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {

    add_theme_support('post-thumbnails'); //imagem destacada nos posts 

    add_theme_support('title-tag'); //vamos gerar um titulo a pagina

    register_nav_menus(
        array(
            'primary' => 'Primary'
        )
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts() {

    wp_enqueue_style('my-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('Jquery'), '1', true);

    wp_enqueue_script('my-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true);
    
}