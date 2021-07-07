<?php

// Agregar javascripts y css
function och_scripts_styles() {
    // Estilos
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.5>');
    wp_enqueue_script('script', get_template_directory_uri() .'/assets/js/script.js', array(), '1.0.2', true);
}

add_action( 'wp_enqueue_scripts', 'och_scripts_styles' );