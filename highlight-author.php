<div class="flex">
    <?php
    $users = get_users('role=editor');
    $count;
    foreach ($users as $user) {
        $count++;
    }
    ?>

    <?php
    for ($i; $i <= $count; ++$i) {
        $destaque_autor = get_field('destaque_' . $i, '2');
        if ($destaque_autor) :
            $post = $destaque_autor;
            setup_postdata($post);
            get_template_part('templates/components/highlight-post-author');
            wp_reset_postdata();
        endif;
    }

    ?>
</div>