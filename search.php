<?php

/**
 * The template for displaying archive pages.
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
    <h2>
        <?php echo sprintf(__('%s resultados encontrados para '), $wp_query->found_posts); ?>
        <strong>
            "<?php echo get_search_query(); ?>"
        </strong>
    </h2>

    <div class="row">
        <?php
        $current_category = get_queried_object();
        $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => '-1',
            'cat' => $current_category->cat_ID
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
                get_template_part('templates/components/highlight-column-3');
            endwhile;
        endif;
        ?>
    </div>
    <?php get_footer(); ?>