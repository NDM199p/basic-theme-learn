<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, "register_menus"]);

    }

    function register_menus()
    {
        register_nav_menus(
            [
                'ecmmm-header-menu' => esc_html__("Header Menu", "ecmmm"),
                'ecmmm-footer-menu' => esc_html__("Footer Menu", "ecmmm")
            ]
        );
    }

    function get_menu_id($location)
    {
        $locations = get_nav_menu_locations();

        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }

    function get_child_menu_items($menu_array, $parent_id)
    {

        $child_menus = [];

        if (!empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu_item) {
                if (intval($menu_item->menu_item_parent) === $parent_id) {
                    // hienthi item menu
                    array_push($child_menus, $menu_item);
                    // hien thi submenu
                }
            }
        }

        return $child_menus;
    }

}