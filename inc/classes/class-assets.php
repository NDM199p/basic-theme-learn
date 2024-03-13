<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // add_action('enqueue_block_assets', [$this, 'enqueue_editor_assets']);
        add_action('enqueue_block_assets', [$this, 'enqueue_editor_assets']);
        add_action('enqueue_block_editor_assets', [$this, 'enqueue_block_editor_assets']);

    }

    function enqueue_block_editor_assets()
    {
        $asset_config_file = sprintf('%s/assets.php', ECMMM_BUILD_PATH);
        if (!file_exists($asset_config_file)) {
            return;
        }

        $asset_config = require_once $asset_config_file;
        $editor_asset = $asset_config['js/editor.js'];
        $js_dependencies = (!empty($editor_asset['dependencies'])) ? $editor_asset['dependencies'] : [];
        $version = (!empty($editor_asset['version'])) ? $editor_asset['version'] : filemtime($asset_config_file);

        // Theme Gutenberg blocks JS.
        if (is_admin()) {
            wp_enqueue_script(
                'ecmmm-blocks-js',
                ECMMM_BUILD_JS_URI . '/blocks.js',
                $js_dependencies,
                $version,
                true
            );
        }

        // Theme Gutenberg blocks CSS.
        $css_dependencies = [
            'wp-block-library-theme',
            'wp-block-library',
        ];

        wp_enqueue_style(
            'admin-ecmmm-blocks-css',
            ECMMM_BUILD_CSS_URI . '/blocks.css',
            $css_dependencies,
            filemtime(ECMMM_BUILD_CSS_DIR_PATH . '/blocks.css'),
            'all'
        );
    }

    function enqueue_editor_assets()
    {
        $asset_config_file = sprintf('%s/assets.php', ECMMM_BUILD_PATH);

        if (!file_exists($asset_config_file)) {
            return;
        }

        $asset_config = require_once $asset_config_file;

        if (empty($asset_config['js/editor.js'])) {
            return;
        }

        $editor_asset = $asset_config['js/editor.js'];
        $js_dependencies = (!empty($editor_asset['dependencies'])) ? $editor_asset['dependencies'] : [];
        $version = (!empty($editor_asset['version'])) ? $editor_asset['version'] : filemtime($asset_config_file);

        // Theme Gutenberg blocks JS.
        if (is_admin()) {
            wp_enqueue_script(
                'ecmmm-blocks-js',
                ECMMM_BUILD_JS_URI . '/blocks.js',
                $js_dependencies,
                $version,
                true
            );
        }

        // Theme Gutenberg blocks CSS.
        $css_dependencies = [
            'wp-block-library-theme',
            'wp-block-library',
        ];

        wp_enqueue_style(
            'ecmmm-blocks-css',
            ECMMM_BUILD_CSS_URI . '/blocks.css',
            $css_dependencies,
            filemtime(ECMMM_BUILD_CSS_DIR_PATH . '/blocks.css'),
            'all'
        );
    }
}