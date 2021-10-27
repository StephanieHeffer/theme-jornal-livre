<div class="col col-sm-4">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>">
    </a>
    <h3>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
            <?php the_title(); ?>
        </a>
    </h3>
    <!-- /post title -->
    <?php $categories = get_the_category();
    $separator = ' ';
    $output = '';
    if (!empty($categories)) {
        foreach ($categories as $category) {
            $cat_obj = get_term($term->term_id, 'category');
            $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="post-category-' . esc_attr($category->slug) . '" alt="' . esc_attr(sprintf(__('Veja todos os posts sobre %s'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
        }

        echo get_the_date() . "|" . trim($output, $separator);
    }
    ?>
    <div>
        <a href="<?php the_permalink(); ?>" class="">
            <?php the_excerpt(); ?>
        </a>
    </div>
</div>