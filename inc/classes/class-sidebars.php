<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Sidebars
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action("widgets_init", [$this, "register_sidebars"]);
        add_action('widgets_init', [$this, "register_widgets"]);
    }

    function register_sidebars()
    {
        register_sidebar(
            array(
                'name' => __('Primary Sidebar', 'ecmmm'),
                'id' => 'primary',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name' => __('Secondary Sidebar', 'ecmmm'),
                'id' => 'sidebar-2',
                'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
                'after_widget' => '</li></ul>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }

    function register_widgets()
    {
        register_widget('ECMMM_THEME\Inc\Clock_Widget');
    }
}