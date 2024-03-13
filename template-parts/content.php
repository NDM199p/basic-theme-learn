<?php
/**
 * Content template
 *
 * @package aquila
 */

$container_classes = !empty($args['container_classes']) ? $args['container_classes'] : 'mb-5';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($container_classes); ?>>
    <?php
    the_title();
    the_shortlink();
    ?>
</article>