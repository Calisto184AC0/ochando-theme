<?php get_header(); ?>

<main class="och-container">

    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'articulos_init') : ?>

            <section class="och-section och-section-articulos-init">
                <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="<?php echo esc_url(get_sub_field('imagen')['alt']); ?>" class="och-img">
                <h2 class="och-section-title"><?php the_sub_field('sub_titulo'); ?></h2>
                <p class="och-description"><?php the_sub_field_without_p_tags('descripcion'); ?></p>
            </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <section class="och-section och-section-articulos-articulos">
        <?php
            $loop = new WP_Query(array(
                'category_name'     => 'blog',
                'posts_per_page'    => -1        // Se puede seleccionar el número de páginas desde el ACF
            ));

            while ($loop->have_posts()) : $loop->the_post();
        ?>

            <div class="och-card">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'och-card-img')); ?></a>
                <a href="<?php the_permalink(); ?>"><h3 class="och-card-title"><?php the_title(); ?></h3></a>
                <p class="och-card-description"><?php echo get_the_excerpt(); ?></p>
            </div>

        <?php endwhile; ?>
    </section>

</main>

<svg xmlns="http://www.w3.org/2000/svg" width="1369.073" height="1338.63" viewbox="0 0 1369.073 1338.63" class="och-blob" id="och-blob-9">
        <path id="Trazado_1" data-name="Trazado 1" d="M490.5,0C966.158,106.291,1125.311,30.726,981,448.5S520.812,927.87,249.917,927.87,0,696.2,0,448.5,14.842-106.291,490.5,0Z" transform="translate(1357.93 803.748) rotate(150)" fill="#e7edf3"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="1178.988" height="1095.879" viewbox="0 0 1178.988 1095.879" class="och-blob" id="och-blob-10">
    <path id="Trazado_2" data-name="Trazado 2" d="M306.355,17.807c221.659,22.944,633.066,188.61,633.066,331.652S684.077,757.091,410.212,731.184,125.038,620.437,24,343.657,84.7-5.138,306.355,17.807Z" transform="translate(1180.041 638.141) rotate(150)" fill="#fdfde5"/>
</svg>

<?php get_footer(); ?>