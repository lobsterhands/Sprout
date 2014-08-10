<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><a href="<?php the_field( 'project_url' ); ?>"><?php the_title(); ?></a></h3>
    <?php the_field( 'description' ); ?>
    <?php the_Field( 'project_images' ); ?>
    <hr>

<?php endwhile; else: ?>

    <p>There are no posts or pages here.</p>

<?php endif; ?>

<?php get_footer(); ?>
