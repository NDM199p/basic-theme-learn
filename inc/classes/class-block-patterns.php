<?php
namespace ECMMM_THEME\Inc;

use ECMMM_THEME\Inc\Traits\Singleton;

class Block_Patterns
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action("init", [$this, 'register_block_patterns']);
        add_action("init", [$this, 'register_block_pattern_categories']);
    }

    function register_block_patterns()
    {

        // about roadmap
        register_block_pattern(
            'ecmmm/about-roadmap-patterns',
            array(
                'title' => __('about roadmap patterns', 'ecmmm'),
                'templateTypes' => array('404'),
                'categories' => ['about'],
                'content' => $this->get_pattern_content('template-parts/patterns/about-roadmap'),
            )
        );
    }

    function get_pattern_content($template_part)
    {
        ob_start();
        get_template_part($template_part);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    function register_block_pattern_categories()
    {
        register_block_pattern_category(
            'about',
            array('label' => __('About', 'ecmmm'))
        );
    }
}