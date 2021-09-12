<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LV83P7J84R"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LV83P7J84R');
        </script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet"> 

        <title>Página principal</title>
    </head>
<body>
    <header class="och-header">
        <a href="<?php echo home_url(); ?>" class="och-header-title">ESTHER OCHANDO</a>
        <div class="och-header-links-container">
            <a href="<?php echo get_permalink( get_page_by_path( 'contacto' ) ); ?>" class="och-btn">Contacta conmigo</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/menu-icon.svg" alt="" class="och-header-menu-icon">
        </div>
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

<?php 

function the_sub_field_without_p_tags($subfield, $wo_br = true) {
    $res = get_sub_field($subfield);
    if ($wo_br)
        $res = str_replace('</p>', '<br>', $res);
    $res = str_replace(array('<p>', '</p>'), '', $res);

    if (!$wo_br)
        $res = str_replace(array('<hr />', '<hr>'), '<br><br><hr style="border-top: 0px; border-color: #999;"><br>', $res);

    echo $res;

    //echo '<pre>' . str_replace(array('<', '>'), array('&lt;', '&gt;'), get_sub_field($subfield)) . '</pre>';
    //echo str_replace(array('<', '>'), array('&lt;', '&gt;'), get_sub_field($subfield));

    //echo strip_tags(get_sub_field($subfield), '<br><strong><em>');
}

?>
    