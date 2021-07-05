<?php

// Agregar menús de navegación
function och_menus() {
    $locations = array(
        'header-menu' => __('Menú Header', 'ochando'),
        'footer-menu1' => __('Menú 1 Footer', 'ochando'),
        'footer-menu2' => __('Menú 2 Footer', 'ochando')
    );

    register_nav_menus($locations);
}

add_action('init', 'och_menus');