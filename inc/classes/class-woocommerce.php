<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Woocommerce
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'ecmmm_add_woocommerce_support']);
    }

    function ecmmm_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
}