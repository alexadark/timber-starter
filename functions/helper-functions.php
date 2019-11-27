<?php

/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function wst_add_slug_body_class($class)
{
    global $post;
    $class[] = $post->post_name . '-page';
    return $class;
}
add_filter('body_class', 'wst_add_slug_body_class');