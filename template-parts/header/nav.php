<?php

$menu_class = \ECMMM_THEME\Inc\Menus::get_instance();

$header_menu_id = $menu_class->get_menu_id('ecmmm-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

// wp_nav_menu(array('theme_location' => 'ecmmm-header-menu'));


// echo '<pre>';
// print_r($header_menus);
// wp_die();

?>

<?php

if (!empty($header_menus) && is_array($header_menus)) {

    // print navigation
    ?>
    <ul class="flex gap-12 ms-10">
        <?php
        foreach ($header_menus as $menu_item) {
            if ($menu_item->menu_item_parent == 0) {
                $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                // echo $has_children ? 'true' : 'false';
                // var_dump($child_menu_items)
                // exit;
                // var_dump($child_menu_items);
                if (!$has_children) {
                    // no child
                    ?>
                    <li>
                        <a class="text-black text-base font-normal font-['Poppins'] leading-normal"
                            href="<?php echo $menu_item->url ?>">
                            <?php echo esc_html($menu_item->title); ?>
                        </a>
                    </li>
                    <?php
                } else {

                    ?>
                    <li>
                        <a class="text-black text-base font-normal font-['Poppins'] leading-normal"
                            href="<?php echo $menu_item->url ?>">
                            <?php echo esc_html($menu_item->title); ?>
                        </a>
                    </li>
                    <?php
                    foreach ($child_menu_items as $submenu_item) {
                        $submenu_item->title;
                        // wp_die();
                    }
                }
            }
        }
        ?>

    </ul>
    <?php
}
?>

<!-- 
<ul class="flex gap-12 ms-10">
    <li>
        <a class="text-black text-base font-normal font-['Poppins'] leading-normal" href="">Home</a>
    </li>
    <li>
        <a class="text-black text-base font-normal font-['Poppins'] leading-normal" href="">Contact</a>
    </li>

    <li>
        <a class="text-black text-base font-normal font-['Poppins'] leading-normal" href="">About</a>
    </li>

    <li>
        <a class="text-black text-base font-normal font-['Poppins'] leading-normal" href="">Sign
            up</a>
    </li>
</ul> -->