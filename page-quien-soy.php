<?php get_header(); ?>

<main class="och-container">
    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'quiensoy_init') : ?>
            
                <section class="och-section och-section-quiensoy-init">
                    <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                    <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="" class="och-img">
                    <p class="och-description"><?php the_sub_field('descripcion'); ?></p>
                </section>

            <?php elseif (get_row_layout() == 'quiensoy_info') : ?>

                <section class="och-section och-section-quiensoy-info">
                    <p class="och-section-title"><?php the_sub_field('descripcion'); ?></p>

                    <?php while( have_rows('info') ): the_row(); ?>

                        <div class="och-card">
                            <h3 class="och-card-title"><?php the_sub_field('titulo'); ?></h3>
                            <p class="och-card-description"><?php the_sub_field('descripcion'); ?></p>
                            <?php if ( get_sub_field('url') ) : ?>
                                <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name_btn'); ?></a>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>

                </section>

            <?php elseif (get_row_layout() == 'quiensoy_more') : ?>

                <section class="och-section och-section-quiensoy-more">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="och-description"><?php the_sub_field('descripcion'); ?></p>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>