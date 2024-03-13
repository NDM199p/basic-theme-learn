<?php
get_header();
function_exists('wp_body_open') ? wp_body_open() : do_action('wp_body_open');
?>

<div class="container">
    <h1>Single Page</h1>
</div>

<?php
while (have_posts()):
    the_post();
    the_content();
endwhile;
?>

<h2>Single Posts</h2>
<?php echo do_shortcode('[single_post_listings]'); ?>

<?php get_footer(); ?>