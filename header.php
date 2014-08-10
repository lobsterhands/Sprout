<!DOCTYPE html>
<html>
    <head>

            <title>

                <?php

                    wp_title( '-', true, 'right' );
                    bloginfo( 'name' );

                ?>

            </title>
            <?php wp_head(); ?>

    </head>
    <body>

        <?php
            // Add menu capabilities into header; pulled from menu support in function.php
            $args = array(
                'menu' => 'main-menu'
            );

            wp_nav_menu( $args );

        ?>
