<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

//Export Post Information
function admin_post_list_add_export_button($which)
{
    global $typenow;

    if ('post' === $typenow && 'top' === $which) {
?>
        <input type="submit" name="export_all_posts" class="button button-primary" value="<?php _e('Exportar Posts'); ?>" />
    <?php
    }
}
add_action('manage_posts_extra_tablenav', 'admin_post_list_add_export_button', 20, 1);
function func_export_all_posts()
{
    if (isset($_GET['export_all_posts'])) {

        $timestamp = date('d_m_Y');
        $arg = array(
            'post_type' => 'post',
            'post_status' => 'any',
            'posts_per_page' => -1,
        );

        global $post;
        $arr_post = get_posts($arg);
        if ($arr_post) {
            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header('Content-Disposition: attachment; filename="jl-posts-' . $timestamp . '.csv"');
            header('Pragma: no-cache');
            header('Expires: 0');

            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF");
            fputcsv($file, array('Título', 'Status', 'ID', 'URL', 'Autor', 'Categorias', 'Tags', 'Data'));
            foreach ($arr_post as $post) {
                setup_postdata($post);

                $categories = get_the_category();
                $cats = array();
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        $cats[] = $category->name;
                    }
                }

                $post_tags = get_the_tags();
                $tags = array();
                if (!empty($post_tags)) {
                    foreach ($post_tags as $tag) {
                        $tags[] = $tag->name;
                    }
                }

                fputcsv($file, array(get_the_title(), get_post_status(), get_the_id(), get_the_permalink(), get_the_author(), implode(",", $cats), implode(",", $tags), get_the_date()));
            }

            exit();
        }
    }
}

add_action('init', 'func_export_all_posts');

//Custom logo admin
function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(http://staging.jornallivre.nousk.com.br/wp-content/themes/jornallivre/screenshot.png);
            background-size: 320px 65px;
            background-repeat: no-repeat;
            height: 65px;
            padding-bottom: 30px;
            width: 320px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');




?>