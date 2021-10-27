<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <!-- section -->
    <div class="row">

        <section>
            <h1>
                <?php the_title(); ?>
            </h1>
            <!-- excerpt -->
            <div>
                <?php
                $my_excerpt = get_the_excerpt();
                echo $my_excerpt;
                ?>
            </div>
            <!-- /excerpt -->
            <header>
                <?php get_template_part('templates/components/header-post-author'); ?>
            </header>
            <article id="post-<?php the_ID(); ?>">
                <!-- post thumbnail -->
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail();
                endif; ?>

                <?php the_content(); ?>
            </article>
            <div>
                <!-- post tags -->
                <div>
                    <hr>
                    <?php the_tags('<h6>Tags</h6> <ul class="list-unstyled"><li>', '</li><li>', '</li></ul>'); ?>
                    <hr>
                </div>
                <!-- /post tags -->

                <!-- post author -->
            </div>
        </section>
        <!-- /related posts-->
        <div>
            <p>Relacionados</p>
            <?php get_template_part('templates/components/related-bottom'); ?>
        </div>
    </div>
</div><!-- #primary -->


<?php get_footer(); ?>