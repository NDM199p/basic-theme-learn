<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class ECMMM_THEME
{
    use Singleton;

    protected function __construct()
    {
        Assets::get_instance();
        Menus::get_instance();
        Sidebars::get_instance();
        Block_Patterns::get_instance();
        Blocks::get_instance();
        Loadmore_Posts::get_instance();
        Loadmore_Single::get_instance();
        Register_Post_Types::get_instance();
        Register_Taxonomies::get_instance();
        Archive_Settings::get_instance();
        Woocommerce::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action("wp_enqueue_scripts", [$this, "register_styles"]);
        add_action("wp_enqueue_scripts", [$this, "register_scripts"]);
        // setup theme
        add_action("after_setup_theme", [$this, "setup_theme"]);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');

        $defaults = array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $defaults);

        // custom background
        add_theme_support('custom-background');

        // algin wide
        add_theme_support('align-wide');


        // add theme supports
        add_theme_support('editor-styles');

        add_theme_support('wp-block-styles');

        // Remove the core block patterns
        remove_theme_support('core-block-patterns');

        // add editor styles
        add_editor_style('assets/build/css/editor.css');



    }

    public function register_styles()
    {

        // slick css
        wp_register_style('slick-css', ECMMM_BUILD_LIB_URI . '/css/slick.css', [], false, 'all');
        wp_register_style('slick-theme-css', ECMMM_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all');


        // register style
        wp_register_style(
            'style',
            get_stylesheet_uri()
        );

        wp_register_style(
            "tailwind",
            ECMMM_BUILD_CSS_URI . '/main.css',
            array(),
            wp_get_theme()->get('Version'),
            "all"
        );
        wp_enqueue_style("style");
        wp_enqueue_style("tailwind");
        wp_enqueue_style("slick-css");
        wp_enqueue_style("slick-theme-css");

        // add editor styles

    }

    public function register_scripts()
    {
        // slick.js
        wp_register_script('slick-js', ECMMM_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, true);

        // register script
        wp_register_script(
            'main',
            ECMMM_BUILD_JS_URI . '/main.js',
            ['jquery', "slick-js"],
            filemtime(ECMMM_BUILD_JS_DIR_PATH . '/main.js'),
            true
        );

        wp_register_script('search', ECMMM_BUILD_JS_URI . '/search.js', ['main'], filemtime(ECMMM_BUILD_JS_DIR_PATH . '/search.js'), true);


        // enqueue scrips
        wp_enqueue_script("main");
        wp_enqueue_script("slick-js");

        // If search page.
        if (is_page('search')) {
            $filters_data = get_filters_data();
            wp_enqueue_script('search');

            wp_localize_script(
                'search',
                'search_settings',
                [
                    'rest_api_url' => home_url('/wp-json/wp/v2/posts'),
                    'root_url' => home_url('search'),
                    'filter_ids' => get_filter_ids($filters_data),
                ]
            );
        }


        // loadmore ajax register config file
        wp_localize_script('main', 'siteConfig', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'ajax_nonce' => wp_create_nonce('loadmore_post_nonce'),
        ]);
    }
}