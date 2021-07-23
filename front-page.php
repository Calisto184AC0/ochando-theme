<?php get_header(); ?>

<main class="och-container">
    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'main_init') : ?>
            
                <section class="och-section och-section-index-init">
                    <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                    <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="" class="och-img">
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion') ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name_btn'); ?></a>
                </section>

            <?php elseif (get_row_layout() == 'main_programas') : ?>

                <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>

                <section class="och-section och-section-index-metodo">
                    <h2 class="och-section-title"><?php the_sub_field('titulo_2'); ?></h2>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_1'); ?></p>
                    <div class="och-list-container">
                        <div class="och-carousel">

                            <?php while( have_rows('pasos') ): the_row(); ?>
                                <div class="och-list">
                                    <span class="och-list-enum"><?php echo get_row_index() ?></span>
                                    <h3 class="och-list-title"><?php the_sub_field('titulo'); ?></h3>
                                    <p class="och-list-description"><?php the_sub_field('descripcion'); ?></p>
                                </div>
                            <?php endwhile; ?>

                        </div>
                        <div class="och-list-controller-container">
                            <span class="och-list-controller" id="list-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/arrow-left.svg" alt=""></span>
                            <span class="och-list-controller" id="list-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/arrow-right.svg" alt=""></span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bolb-1.svg" id="och-blob-1" class="och-blob" alt="">
                    </div>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_2'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name_btn'); ?></a>
                </section>

                <section class="och-section och-section-index-programas">
                    <?php while ( have_rows('programas') ): the_row(); ?>
                        <div class="och-card och-card-<?php the_sub_field('color'); ?>">
                            <h3 class="och-card-title"><?php the_sub_field('titulo'); ?></h3>
                            <p class="och-card-description"><?php the_sub_field_without_p_tags('descripcion'); ?></p>
                            <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name_btn'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </section>

            <?php elseif (get_row_layout() == 'main_articulos') : ?>

                <section class="och-section och-section-index-articulos">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>

                    <?php
                        $loop = new WP_Query(array(
                            'category_name'     => 'blog',
                            'posts_per_page'    => 3        // Se puede seleccionar el número de páginas desde el ACF
                        ));

                        while ($loop->have_posts()) : $loop->the_post();
                    ?>

                        <div class="och-card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'och-card-img')); ?></a>
                            <h3 class="och-card-title"><?php the_title(); ?></h3>
                            <p class="och-card-description"><?php echo get_the_excerpt(); ?></p>
                        </div>

                    <?php endwhile; ?>

                    <a href="" class="och-btn">Ver todos los artículos</a>

                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<svg xmlns="http://www.w3.org/2000/svg" width="1032.673" height="949.503" viewbox="0 0 1032.673 949.503" class="och-blob" id="och-blob-2">
        <path id="Trazado_1" data-name="Trazado 1" d="M490.5,0C966.158,106.291,1125.311,30.726,981,448.5S520.812,927.87,249.917,927.87,0,696.2,0,448.5,14.842-106.291,490.5,0Z" transform="translate(0.377 21.633)" fill="#e7edf3"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="946.188" height="719.131" viewbox="0 0 946.188 719.131" class="och-blob" id="och-blob-3">
    <path id="Trazado_2" data-name="Trazado 2" d="M306.355,17.807c221.659,22.944,633.066,188.61,633.066,331.652S684.077,757.091,410.212,731.184,125.038,620.437,24,343.657,84.7-5.138,306.355,17.807Z" transform="translate(6.766 -13.825)" fill="#e6ede7"/>
</svg>

<?php get_footer(); ?>