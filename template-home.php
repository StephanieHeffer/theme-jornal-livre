<?php /* Template Name: Home */ ?>


<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
}

get_header(); ?>

<div>
        <!-- highlight author-->
        <div class="flex">
                <?php
                get_template_part('highlight-author');
                ?>
        </div>
        <!-- /highlight author-->
        <hr>
        <!-- all posts-->
        <div class="row">

                <?php

                $the_query = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order'  => 'DESC',
                        'posts_per_page' => '-1',
                ));
                $post_count;
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                                get_template_part('templates/components/highlight-column-3');
                                $post_count++;
                ?>
                <?php
                        endwhile;
                endif;
                ?>
        </div>
        <!-- /all posts-->
</div><!-- #primary -->


<?php get_footer(); ?>