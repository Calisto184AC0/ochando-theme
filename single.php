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
                    <?php if (get_sub_field('descripcion_2')) :  ?><p class="och-description och-programas-description"><?php the_sub_field_without_p_tags('descripcion_2'); ?></p> <?php endif; ?>
                    <?php if (get_sub_field('descripcion_2')) :  ?><p class="och-description"><?php the_sub_field_without_p_tags('descripcion_3'); ?></p></p> <?php endif; ?>
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
                                <?php
                                    $list_with_check = str_replace('</li>', '</li><img src= "' . get_template_directory_uri() . '/assets/icon/check.svg" >', get_sub_field('lista'));
                                    echo $list_with_check;
                                ?>
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
                    <?php if (get_sub_field('descripcion_1')) : ?>
                        <div class="och-description"><?php the_sub_field_without_p_tags('descripcion_1'); ?></div>
                    <?php endif; ?>
                    <div class="och-description"><?php the_sub_field_without_p_tags('descripcion_2', false); ?></div>
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

<?php elseif (in_category('blog')): ?>

    <?php if( have_rows('contenido') ): ?>
        <?php while( have_rows('contenido') ): the_row(); ?>

            <?php if (get_row_layout() == 'articulo_parrafo') : ?>
            
                <section class="och-section och-section-articulo-parrafo">
                    <?php if (get_sub_field('titulo')) :  ?><h2 class="och-section-title"><?php the_sub_field('titulo'); ?></h2><?php endif; ?>
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion'); ?></p>
                </section>

            <?php elseif (get_row_layout() == 'articulo_title') : ?>

                <section class="och-section och-section-articulo-title">
                    <h1 class="och-title"><?php the_sub_field('titulo'); ?></h1>
                </section>

            <?php elseif (get_row_layout() == 'articulo_cta') : ?>

                <section class="och-section och-section-articulo-cta">
                    <p class="och-description"><?php the_sub_field_without_p_tags('descripcion'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="och-btn"><?php the_sub_field('name'); ?></a>
                </section>

            <?php elseif (get_row_layout() == 'articulo_img') : ?>

                <section class="och-section och-section-articulo-img-<?php the_sub_field('size'); ?>">
                    <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="<?php echo esc_url(get_sub_field('imagen')['alt']); ?>" class="och-img">
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <section class="och-section och-section-articulo-relacionados">
        <h2 class="och-section-title">Art??culos relacionados</h2>

        <?php
            $loop = new WP_Query(array(
                'category_name'     => 'blog',
                'posts_per_page'    => 3        // Se puede seleccionar el n??mero de p??ginas desde el ACF
            ));

            while ($loop->have_posts()) : $loop->the_post();
        ?>

            <div class="och-card">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'och-card-img')); ?></a>
                <a href="<?php the_permalink(); ?>"><h3 class="och-card-title"><?php the_title(); ?></h3></a>
                <p class="och-card-description"><?php echo get_the_excerpt(); ?></p>
            </div>

        <?php endwhile; ?>

        <a href="<?php echo get_permalink( get_page_by_path( 'articulos' ) ); ?>" class="och-btn">Ver todos los art??culos</a>

    </section>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="1369.073" height="1338.63" viewbox="0 0 1369.073 1338.63" class="och-blob" id="och-blob-9">
        <path id="Trazado_1" data-name="Trazado 1" d="M490.5,0C966.158,106.291,1125.311,30.726,981,448.5S520.812,927.87,249.917,927.87,0,696.2,0,448.5,14.842-106.291,490.5,0Z" transform="translate(1357.93 803.748) rotate(150)" fill="#e7edf3"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="1178.988" height="1095.879" viewbox="0 0 1178.988 1095.879" class="och-blob" id="och-blob-10">
        <path id="Trazado_2" data-name="Trazado 2" d="M306.355,17.807c221.659,22.944,633.066,188.61,633.066,331.652S684.077,757.091,410.212,731.184,125.038,620.437,24,343.657,84.7-5.138,306.355,17.807Z" transform="translate(1180.041 638.141) rotate(150)" fill="#fdfde5"/>
    </svg>

<?php endif; ?>

</main>

<?php get_footer(); ?>