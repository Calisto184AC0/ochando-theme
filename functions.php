<?php

require_once( __DIR__ . '/functions/menus.php');
require_once( __DIR__ . '/functions/scripts.php');

// Sin categorizar

// Añadir imágenes destacadas a los artículos
add_theme_support( 'post-thumbnails' );

// Contact Form 7 Quitar el div que envuelve al footer, quitar el span, las p y los br
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});
add_filter('wpcf7_autop_or_not', '__return_false');