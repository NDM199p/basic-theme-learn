<?php
use ECMMM_THEME\Inc\Loadmore_Posts;

/**
 * Main template file
 * 
 * @package Ecmmm
 */
get_header();

if (function_exists('wp_body_open')) {
    wp_body_open();
} else {
    do_action('wp_body_open');
}
?>

<div class="container">
    <h1>page-loadmore-posts.php</h1>
</div>

<?php $loadmore_posts = Loadmore_Posts::get_instance(); ?>

<div class="container">
    <h1 class="mb-4">Loadmore/Infinite Scroll Demo</h1>
    <?php $loadmore_posts->post_script_load_more(); ?>
</div>


<?php
get_footer();
?>