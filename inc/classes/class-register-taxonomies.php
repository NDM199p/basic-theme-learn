<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Register_Taxonomies
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, 'create_genre_tax']);
    }

    function create_genre_tax()
    {

        $labels = array(
            'name' => _x('Genres', 'taxonomy general name', 'ecmmm'),
            'singular_name' => _x('Genre', 'taxonomy singular name', 'ecmmm'),
            'search_items' => __('Search Genres', 'ecmmm'),
            'all_items' => __('All Genres', 'ecmmm'),
            'parent_item' => __('Parent Genre', 'ecmmm'),
            'parent_item_colon' => __('Parent Genre:', 'ecmmm'),
            'edit_item' => __('Edit Genre', 'ecmmm'),
            'update_item' => __('Update Genre', 'ecmmm'),
            'add_new_item' => __('Add New Genre', 'ecmmm'),
            'new_item_name' => __('New Genre Name', 'ecmmm'),
            'menu_name' => __('Genre', 'ecmmm'),
        );
        $args = array(
            'labels' => $labels,
            'description' => __('Movie Genre', 'ecmmm'),
            'hierarchical' => true,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'show_in_quick_edit' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
        );
        register_taxonomy('genre', array('movie'), $args);
    }

}