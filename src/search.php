<?php get_header(); ?>
<div class="content-block -fullbleed">
    <div class="content_inner">
        <div class="content_post">
            <?php do_action("__gulp_init__namespace_before_content"); ?>

            <div class="content_search-form_container search-form_container">
                <?php get_search_form(); ?>
            </div><!--/.content_search-form_container.search-form_container-->

            <?php
            if (have_posts()) {
                while (have_posts()) { the_post();
                    __gulp_init__namespace_get_template_part("partials/articles/post-excerpt.php", array("post" => $post, "class" => "content_article"));
                }
            } else {
                __gulp_init__namespace_get_template_part("partials/articles/post-none.php", array("class" => "content_article", "error" => get_no_posts_message(get_queried_object())));
            }
            ?>

            <?php __gulp_init__namespace_get_template_part("partials/modules/menu-list-pagination.php"); ?>

            <?php do_action("__gulp_init__namespace_after_content"); ?>
        </div><!--/.content_post-->
    </div><!--/.content_inner-->
</div><!--/.content-block.-fullbleed-->
<?php get_footer(); ?>
