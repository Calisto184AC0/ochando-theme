<?php get_header(); ?>

<main class="och-container">
    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'main_init') : ?>
            
                <section class="och-section och-section-index-init">
                    <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                    <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="" class="och-img">
                    <p class="och-description"><?php the_sub_field('descripcion'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name_btn'); ?></a>
                </section>

            <?php elseif (get_row_layout() == 'main_metodo') : ?>

                <section class="och-section och-section-index-metodo">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="och-description"><?php the_sub_field('descripcion'); ?></p>

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
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'main_programas') : ?>

                <section class="och-section och-section-index-programas">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>

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

<?php get_footer(); ?>