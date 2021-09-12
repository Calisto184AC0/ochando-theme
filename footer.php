    <footer class="och-footer">

        <h2 class="och-section-title">Newsletter</h2>
        <?php echo do_shortcode('[contact-form-7 id="325" title="Formulario Newsletter" html_class="och-form och-form-newsletter"]'); ?>

        <h2 class="och-section-title">Contacta conmigo</h2>
        <?php echo do_shortcode('[contact-form-7 id="324" title="Formulario de contacto html_class="och-form och-form-contacto"]'); ?>

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