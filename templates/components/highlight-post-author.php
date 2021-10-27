<div class="text-center">
  <!-- author area-->
  <?php
  $author_details = '<div>' . get_avatar($post->post_author) . '</div>';

  echo $author_details;
  ?>

  <div>
    <?php $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author)); ?>
    <a <?php echo 'href="' . $user_posts . '"'; ?>>
      <?php echo get_the_author(); ?>
    </a>
    <!-- /author area -->
    <!-- post title -->
    <h3>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h3>
    <!-- /post title -->

  </div>
</div>