<!DOCTYPE html>
<html>
    <head>

            <title>

                <?php

                    wp_title( '-', true, 'right' );
                    bloginfo( 'name' );

                ?>

            </title>
            <meta name="viewport" content="width=device-width, initial-scale = 1.0">
            <?php wp_head(); ?>

    </head>
    <body>

        <div>
            <header>
                <div class="omega none">
                    <hgroup>
                        <!-- Site Title and Tagline are now editable through wp-admin Settings -> General -->
                        <h1><a href="<?php bloginfo( 'siteurl' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2><?php bloginfo( 'description' ); ?></h2>
                    </hgroup>
                </div>
                <div class="omega">
                    <nav class="container">
 
                        <?php
                            // Add menu capabilities into header; pulled from menu support in function.php
                            // strip_tags() allows us to use webkit-box and other css styles properly on <a> items (Nav items)
                            $args = array(
                                'menu' => 'main-menu',
                                'echo' => false,
                            );
                            echo strip_tags(wp_nav_menu( $args ), '<a>');
                        
                        ?>
<?php
add_filter('main-menu' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if(is_page()){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "special-class";
     }
     return $classes;
}
?>
                    </nav>
                </div>
            </header>
            <div class="container clearfix">
