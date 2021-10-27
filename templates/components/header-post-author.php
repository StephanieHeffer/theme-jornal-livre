 <div>

         <?php

                $display_name = get_the_author_meta('display_name', $post->post_author);
                $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));
                $date = get_the_date();

                $author_details = '<div>' . get_avatar($post->post_author) . '<div> <a href="' . $user_posts . '"> ' . $display_name . '</a>' . ' postou em ' . $date . '</div></div>';

                echo $author_details;
                ?>
 </div>