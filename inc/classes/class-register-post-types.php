<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Register_Post_Types
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, 'create_movie_cpt'], 0);
    }

    function create_movie_cpt()
    {

        $labels = array(
            'name' => _x('Movies', 'Post Type General Name', 'ecmmm'),
            'singular_name' => _x('Movie', 'Post Type Singular Name', 'ecmmm'),
            'menu_name' => _x('Movies', 'Admin Menu text', 'ecmmm'),
            'name_admin_bar' => _x('Movie', 'Add New on Toolbar', 'ecmmm'),
            'archives' => __('Movie Archives', 'ecmmm'),
            'attributes' => __('Movie Attributes', 'ecmmm'),
            'parent_item_colon' => __('Parent Movie:', 'ecmmm'),
            'all_items' => __('All Movies', 'ecmmm'),
            'add_new_item' => __('Add New Movie', 'ecmmm'),
            'add_new' => __('Add New', 'ecmmm'),
            'new_item' => __('New Movie', 'ecmmm'),
            'edit_item' => __('Edit Movie', 'ecmmm'),
            'update_item' => __('Update Movie', 'ecmmm'),
            'view_item' => __('View Movie', 'ecmmm'),
            'view_items' => __('View Movies', 'ecmmm'),
            'search_items' => __('Search Movie', 'ecmmm'),
            'not_found' => __('Not found', 'ecmmm'),
            'not_found_in_trash' => __('Not found in Trash', 'ecmmm'),
            'featured_image' => __('Featured Image', 'ecmmm'),
            'set_featured_image' => __('Set featured image', 'ecmmm'),
            'remove_featured_image' => __('Remove featured image', 'ecmmm'),
            'use_featured_image' => __('Use as featured image', 'ecmmm'),
            'insert_into_item' => __('Insert into Movie', 'ecmmm'),
            'uploaded_to_this_item' => __('Uploaded to this Movie', 'ecmmm'),
            'items_list' => __('Movies list', 'ecmmm'),
            'items_list_navigation' => __('Movies list navigation', 'ecmmm'),
            'filter_items_list' => __('Filter Movies list', 'ecmmm'),
        );
        $args = array(
            'label' => __('Movie', 'ecmmm'),
            'description' => __('The Movies', 'ecmmm'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-video-alt',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'custom-fields'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('movie', $args);
    }
}