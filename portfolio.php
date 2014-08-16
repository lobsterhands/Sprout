<?php 

/*
    Template Name: Portfolio Page
*/

get_header(); ?>
<h3><?php the_title(); ?></h3>
<?php

    $args = array(
        'post_type' => 'portfolio'
    );

    $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div id="portfolio">
            <h3><a class="project-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_field( 'description' ); ?></p>
    </div>
<?php endwhile; else: ?>

    <p>There are no posts or pages here.</p>

<?php endif; ?>

<?php get_footer(); ?>
