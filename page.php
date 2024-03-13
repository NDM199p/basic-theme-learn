<?php
get_header();
function_exists('wp_body_open') ? wp_body_open() : do_action('wp_body_open');
?>

<h1>Page.php</h1>
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
else:
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>

<?php get_footer(); ?>