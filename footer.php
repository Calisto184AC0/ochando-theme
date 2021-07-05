    <footer class="och-footer">

        <h2 class="och-section-title">Newsletter</h2>
        <form action="" class="och-form och-form-newsletter">
            <h3 class="och-form-title">Mantente al día con nuestra newsletter</h3>
            <input type="text" class="och-input" placeholder="Nombre">
            <input type="text" class="och-input" placeholder="Email">
            <input type="text" class="och-input" placeholder="Código postal">
            <p class="och-form-description">Donec nisi risus, volutpat in lectus non, efficitur pulvinar turpis. Suspendisse aliquet ante in dui convallis accumsan. Phasellus ac sem vitae purus elementum ullamcorper vitae id augue.</p>
            <button class="och-btn">Enviar</button>
        </form>

        <h2 class="och-section-title">Contacta conmigo</h2>
        <form action="" class="och-form och-form-contacto">
            <h3 class="och-form-title">Mantente al día con nuestra newsletter</h3>
            <input type="text" class="och-input" placeholder="Nombre">
            <input type="text" class="och-input" placeholder="Email">
            <input type="text" class="och-input" placeholder="Código postal">
            <textarea name="" id="" rows="10" class="och-input" placeholder="Asunto"></textarea>
            <p class="och-form-description">Donec nisi risus, volutpat in lectus non, efficitur pulvinar turpis. Suspendisse aliquet ante in dui convallis accumsan. Phasellus ac sem vitae purus elementum ullamcorper vitae id augue.</p>
            <button class="och-btn">Enviar</button>
        </form>


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