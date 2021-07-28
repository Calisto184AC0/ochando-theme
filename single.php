<?php get_header(); ?>

<main class="och-container">

<?php if (in_category('programa')): ?>

    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'programas_init') : ?>
            
                <section class="och-section och-section-programas-init">
                    <h1 class="och-title"><?php the_sub_field_without_p_tags('titulo'); ?></h1>
                </section>

            <?php elseif (get_row_layout() == 'programas_pasos') : ?>

                <section class="och-section och-section-programas-pasos">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bolb-2.svg" id="och-blob-1" class="och-blob" alt="">
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'programas_text') : ?>

                <section class="och-section och-section-programas-text">
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_1'); ?></p>
                    <p class="och-description och-programas-description"><?php the_sub_field_without_p_tags('descripcion_2'); ?></p>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_3'); ?></p>
                </section>

            <?php elseif (get_row_layout() == 'programas_pasos_extended') : ?>

                <section class="och-section och-section-programas-extended-pasos">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>
                    <div class="och-list-extended-container">

                        <?php while( have_rows('pasos_extended') ): the_row(); ?>

                            <div class="och-list-extended">
                                <span class="och-list-enum"><?php echo get_row_index() ?></span>
                                <h3 class="och-list-title"><?php the_sub_field('titulo'); ?></h3>
                                <p class="och-description"><?php the_sub_field('descripcion'); ?></p>
                                <?php the_sub_field('lista'); ?>
                            </div>

                        <?php endwhile; ?>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1132.524" height="1101.809" viewBox="0 0 1132.524 1101.809" class="och-blob" id="och-blob-6">
                        <path id="Trazado_73" data-name="Trazado 73" d="M529.3,924.011C343.97,894.366,0,680.317,0,495.5S213.489-31.185,442.463,2.289s422.378,237.868,437.453,397.9S714.622,953.657,529.3,924.011Z" transform="translate(242.781 1101.809) rotate(-106)" fill="#fdfde5"/>
                    </svg>
                </section>

            <?php elseif (get_row_layout() == 'programas_procedimeinto') : ?>

                <section class="och-section och-section-programas-procedimiento">
                    <h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_1'); ?></p>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion_2'); ?></p>
                    <?php while( have_rows('fases') ): the_row(); ?>

                        <span class="och-btn och-btn-<?php the_sub_field('color'); ?>"><?php the_sub_field('titulo'); ?></span>

                    <?php endwhile; ?>
                </section>

            <?php elseif (get_row_layout() == 'programas_slogan') : ?>

                <section class="och-section och-section-programas-slogan">
                    <p class="och-section-title"><?php the_sub_field_without_p_tags('slogan'); ?></p>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <svg xmlns="http://www.w3.org/2000/svg" width="1363.525" height="1331.104" viewbox="0 0 1363.525 1331.104" class="och-blob" id="och-blob-7">
        <path id="Trazado_1" data-name="Trazado 1" d="M490.5,0C966.158,106.291,1125.311,30.726,981,448.5S520.812,927.87,249.917,927.87,0,696.2,0,448.5,14.842-106.291,490.5,0Z" transform="translate(1352.707 811.717) rotate(151)" fill="#f2d9d2"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="1176.196" height="1087.687" viewbox="0 0 1176.196 1087.687" class="och-blob" id="och-blob-8">
        <path id="Trazado_2" data-name="Trazado 2" d="M306.355,17.807c221.659,22.944,633.066,188.61,633.066,331.652S684.077,757.091,410.212,731.184,125.038,620.437,24,343.657,84.7-5.138,306.355,17.807Z" transform="translate(1176.98 644.338) rotate(151)" fill="#e6ede7"/>
    </svg>

<?php endif; ?>

</main>

<?php get_footer(); ?>