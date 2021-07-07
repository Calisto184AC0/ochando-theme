<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
        <title>Página principal</title>
    </head>
<body>
    <header class="och-header">
        <a href="<?php echo home_url(); ?>" class="och-header-title">ESTHER OCHANDO</a>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/menu-icon.svg" alt="" class="och-header-menu-icon">
        <?php
            $args_menu = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'och-nav',
                'menu_class' => 'och-header-menu'
            );

            wp_nav_menu($args_menu);
        ?>
    </header>
    