<?php
/**
 * Theme fo=unctions
 * 
 * @package Ecmmm
 */

// register ECMMM_DIR_PATH
if (!defined("ECMMM_DIR_PATH")) {
    define("ECMMM_DIR_PATH", untrailingslashit(get_template_directory()));
}

if (!defined("ECMMM_DIR_URI")) {
    define("ECMMM_DIR_URI", untrailingslashit(get_template_directory_uri()));
}

if (!defined("ECMMM_BUILD_LIB_URI")) {
    define("ECMMM_BUILD_LIB_URI", untrailingslashit(get_template_directory_uri()) . '/assets/src/librarys');
}

if (!defined("ECMMM_BUILD_URI")) {
    define("ECMMM_BUILD_URI", untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined("ECMMM_BUILD_PATH")) {
    define("ECMMM_BUILD_PATH", untrailingslashit(get_template_directory()) . '/assets/build');
}

if (!defined("ECMMM_BUILD_JS_URI")) {
    define("ECMMM_BUILD_JS_URI", untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined("ECMMM_BUILD_JS_DIR_PATH")) {
    define("ECMMM_BUILD_JS_DIR_PATH", untrailingslashit(get_template_directory()) . '/assets/build/js');
}


if (!defined("ECMMM_BUILD_IMG_URI")) {
    define("ECMMM_BUILD_IMG_URI", untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined("ECMMM_BUILD_CSS_URI")) {
    define("ECMMM_BUILD_CSS_URI", untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined("ECMMM_BUILD_CSS_DIR_PATH")) {
    define("ECMMM_BUILD_CSS_DIR_PATH", untrailingslashit(get_template_directory()) . '/assets/build/css');
}

require_once ECMMM_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ECMMM_DIR_PATH . '/inc/helpers/template-tags.php';

function register_my_theme_settings_menu()
{
    add_menu_page(
        "My Theme's Settings",
        'My Theme',
        'manage_options',
        'my-theme-settings-menu'
    );
}

function register_my_theme_more_settings_menu()
{
    add_submenu_page(
        'my-theme-settings-menu',
        'More Settings for My Theme',
        'More Settings',
        'manage_options',
        'my-theme-more-settings-menu'
    );
}

add_action('admin_menu', 'register_my_theme_settings_menu');
add_action('admin_menu', 'register_my_theme_more_settings_menu');

function add_test_theme_page()
{
    add_theme_page('Theme Title Settings', 'Theme Menu Settings', 'edit_theme_options', 'test-theme-options', 'theme_option_page');
}
add_action('admin_menu', 'add_test_theme_page');

function theme_option_page()
{
    echo 'This is a test theme options page!';
}

// wp_die(ECMMM_DIR_PATH);

function theme_customizer_register($wp_customize)
{



    //Setting
    $wp_customize->add_setting('instagram', array('default' => ''));

    //Section
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => __('Social Media', '_s'),
            'priority' => 30,
            'description' => __('Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s')
        )
    );

    //Control
    //Instragram
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram',
            array(
                'label' => __('Instagram', '_s'),
                'section' => 'social-media',
                'settings' => 'instagram'
            )
        )
    );

    // echo '<pre>';
    // print_r($wp_customize->get_setting());
    // wp_die();

}
add_action('customize_register', 'theme_customizer_register');

function ecmmm_get_theme_instance()
{
    \ECMMM_THEME\Inc\ECMMM_THEME::get_instance();
}

ecmmm_get_theme_instance();

function ecmmm_enqueue_scripts()
{

}
