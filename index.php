<?php
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
    <h1>Hello </h1>
</div>


<?php
get_footer();
?>