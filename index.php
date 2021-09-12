<?php get_header(); ?>

<main class="och-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="och-section och-section-default">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>

    
<?php endwhile; endif; ?>


</main>

<?php get_footer(); ?>