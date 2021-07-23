    <footer class="och-footer">

        <h2 class="och-section-title">Newsletter</h2>
        <form action="" class="och-form och-form-newsletter">
            <h3 class="och-form-title">Mantente al día con nuestra newsletter</h3>
            <input type="text" class="och-input" placeholder="Nombre">
            <input type="text" class="och-input" placeholder="Email">
            <input type="text" class="och-input" placeholder="Código postal">
            <p class="och-form-description">Donec nisi risus, volutpat in lectus non, efficitur pulvinar turpis. Suspendisse aliquet ante in dui convallis accumsan. Phasellus ac sem vitae purus elementum ullamcorper vitae id augue.</p>
            <button class="och-btn">Enviar</button>
            <svg xmlns="http://www.w3.org/2000/svg" width="880.8" height="925.599" viewbox="0 0 880.8 925.599" class="och-blob" id="och-blob-4">
                <path id="Trazado_11" data-name="Trazado 11" d="M529.3,924.011C343.97,894.366,0,680.317,0,495.5S213.489-31.185,442.463,2.289s422.378,237.868,437.453,397.9S714.622,953.657,529.3,924.011Z" transform="translate(0)" fill="#e7edf3"/>
            </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="962.483" height="805.676" viewbox="0 0 962.483 805.676" class="och-blob" id="och-blob-5">
                <path id="Trazado_12" data-name="Trazado 12" d="M538.411-.867C255.073-101.19-69.4,42.652,38.272,382.971s343.352,390.5,545.47,390.5,395.869-56.422,395.869-258.2S821.749,99.456,538.411-.867Z" transform="translate(-17.128 32.209)" fill="#f2d9d2"/>
            </svg>
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