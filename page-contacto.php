<?php get_header(); ?>

<main class="och-container">

    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'contacto_init') : ?>

                <section class="och-section och-section-contacto-init">
                    <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                </section>

            <?php elseif (get_row_layout() == 'contacto_info') : ?>
                
                <section class="och-section och-section-contacto-info">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion'); ?></p>
                </section>

            <?php elseif (get_row_layout() == 'contacto_form') : ?>

                <section class="och-section och-section-contacto-form">
                <?php echo do_shortcode('[contact-form-7 id="324" title="Formulario de contacto html_class="och-form och-form-contacto"]'); ?>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<svg xmlns="http://www.w3.org/2000/svg" width="1369.073" height="1338.63" viewbox="0 0 1369.073 1338.63" class="och-blob" id="och-blob-9">
        <path id="Trazado_1" data-name="Trazado 1" d="M490.5,0C966.158,106.291,1125.311,30.726,981,448.5S520.812,927.87,249.917,927.87,0,696.2,0,448.5,14.842-106.291,490.5,0Z" transform="translate(1357.93 803.748) rotate(150)" fill="#e7edf3"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="1178.988" height="1095.879" viewbox="0 0 1178.988 1095.879" class="och-blob" id="och-blob-10">
    <path id="Trazado_2" data-name="Trazado 2" d="M306.355,17.807c221.659,22.944,633.066,188.61,633.066,331.652S684.077,757.091,410.212,731.184,125.038,620.437,24,343.657,84.7-5.138,306.355,17.807Z" transform="translate(1180.041 638.141) rotate(150)" fill="#fdfde5"/>
</svg>

<footer class="och-footer">

<nav class="och-footer-links">
    <?php
        $args_menu1 = array(
            'theme_location' => 'footer-menu1',
            'container' => false,
            'menu_class' => 'och-rrss'
        );

        $args_menu2 = array(
            'theme_location' => 'footer-menu2',
            'container' => false,
            'menu_class' => 'och-info'
        );

        wp_nav_menu($args_menu1);
        wp_nav_menu($args_menu2);
    ?>
</nav>

</footer>
<?php wp_footer(); ?>
</body>
</html>