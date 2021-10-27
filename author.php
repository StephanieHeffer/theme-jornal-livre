<?php /* Template Name: Autores */  ?>

<?php get_header(); ?>

<main class="container">

        <h3>Repórter</h3>
        <div class="row">
                <!--about author -->
                <div>
                        <?php
                        $display_name = get_the_author_meta('display_name', $post->post_author);

                        $user_description = get_the_author_meta('user_description', $post->post_author);

                        $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));

                        $author_details = '<div>' . get_avatar($post->post_author) . '<div>' . '<h3>' . $display_name . '</h3>' . $user_description . '</div></div>';


                        echo $author_details;
                        ?>
                </div>
                <!-- /about author-->

                <!-- select author-->
                <div>
                        <select name="author-dropdown" id="author-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                                <option selected disabled><?php echo esc_attr(__('+ Repórteres')); ?></option>
                                <?php
                                $users = get_users('role=editor');
                                foreach ($users as $user) {
                                        if (count_user_posts($user->id) > 0) {
                                                echo '<option value="' . get_author_posts_url($user->id) . '">';
                                                echo $user->display_name;
                                                echo '</option>';
                                        }
                                }


                                ?>
                        </select> </div>
                <!-- /select author -->
        </div>
        <hr>
        <?php if (have_posts()) : ?>
                <section>
                        <div class="row">
                                <?php while (have_posts()) : ?>
                                        <?php the_post(); ?>
                                        <?php get_template_part('templates/components/highlight-column-3'); ?>
                                <?php endwhile; ?>
                        </div>
                </section>
        <?php endif; ?>

</main>

<?php get_footer(); ?>