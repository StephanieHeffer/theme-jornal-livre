<section class="row">
    <?php
    global $post;
    $categories = get_the_category($post->ID);
    $catidlist = '';
    foreach ($categories as $category) {
        $catidlist .= $category->cat_ID . ",";
    }
    $custom_query_args = array(
        'posts_per_page' => 3,
        'post__not_in' => array($post->ID),
        'orderby' => 'rand',
        'cat' => $catidlist,
    );
    $custom_query = new WP_Query($custom_query_args);

    if ($custom_query->have_posts()) : ?>
        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="col col-sm-4">
                <div>
                    <!-- post thumbnail -->
                    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>">
                    </a>
                    <!-- /post thumbnail -->

                    <!-- post title -->
                    <h4>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <!-- /post title -->

                    <hr>
                    <!-- excerpt -->
                    <div>
                        <a href="<?php the_permalink(); ?>" class="" title="<?php the_excerpt(); ?>">
                            <?php echo get_the_excerpt(); ?>
                        </a>
                    </div>
                    <!-- /excerpt -->
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>