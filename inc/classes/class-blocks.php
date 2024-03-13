<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Blocks
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_filter('block_categories_all', [$this, 'add_block_categories']);
    }

    function add_block_categories($categories)
    {
        $category_slugs = wp_list_pluck($categories, 'slug');

        return in_array('ecmmm', $category_slugs, true) ? $categories : array_merge(
            $categories,
            [
                [
                    'slug' => 'ecmmm',
                    'title' => __('Aquila Blocks', 'ecmmm'),
                    'icon' => 'table-row-after',
                ],
            ]
        );

    }
}