<?php
/**
 * Main template file
 * 
 * @package Ecmmm
 */
get_header();

if (function_exists('wp_body_open')) {
    wp_body_open();
} else {
    do_action('wp_body_open');
}
?>

<div class="container">
    <h1>Front Page </h1>
</div>
<?php
if (have_posts()):
    while (have_posts()):
        the_shortlink();
        the_post();
        the_content();
    endwhile;
else:
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;

?>

<?php get_sidebar(); ?>

<?php get_template_part("template-parts/components/posts-carousel") ?>

<section class="mb-14">
    <div class="container mx-auto">
        <div class="title flex justify-between items-end mb-10 group/item">
            <div class="left">
                <div class="flex flex-col gap-6">
                    <div class="flex justify-start items-center gap-4">
                        <div class="w-5 h-10 bg-[#DB4444]"></div>
                        <p class="text-red-500 text-base font-semibold font-['Poppins'] leading-tight">
                            This Month
                        </p>
                    </div>

                    <p class="text-black text-4xl font-semibold font-['Inter'] leading-[48px] tracking-wider">
                        Best Selling Products
                    </p>
                </div>
                <div class="div"></div>
            </div>
            <div class="right">
                <button
                    class="bg-[#DB4444] py-4 px-12 text-neutral-50 text-base font-medium font-['Poppins'] leading-normal">
                    View All
                </button>
            </div>
        </div>

        <div class="cardlist flex gap-7 mb-14">
            <div class="card w-[270px] group/item">
                <div class="card__head relative mb-4">
                    <div class="p-12 bg-[#F5F5F5]">
                        <img class=""
                            src="https://s3-alpha-sig.figma.com/img/5d5c/2e52/50752d55f8b60f2aa2923183dadbc135?Expires=1704067200&Signature=kgqazTkPk~QsW9Lv8NLxuNDD1uFF-41XB7p81l0Z1cCRNGtq669eZoVKGy7ZGw3mBNkNKKKw1i3yw2rSaumYB3qCfsv7evwq8TrT9zxQSE83GdMLM5jiZVEvN7D2sK1D3niLRhWxX6RBaDrmlDjIlLvpcKiwagSyZaBtBYyDBODeMKHqIkUJbmTeKpixe1Bk1dnHI3JXx0~OV0V4kVpVtUbtFN8o5uirgiSrtXGeb3R--YDUiE9vzopJ5zk6pIn1mlA5jmNa2rb~ySmLmqGXCI9Bs-v6X9zqIcrXd6w1v4wZBKzIgkPC2481wSiSBCaBWUbovtm9ryDH2ttiWnQEgg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="" />
                    </div>
                    <p
                        class="discountpercent absolute bg-[#DB4444] top-3 left-3 px-3 py-1 text-neutral-50 text-xs font-normal font-['Poppins'] leading-[18px]">
                        -40%
                    </p>

                    <div class="icon absolute top-3 right-3 flex flex-col gap-2">
                        <button class="heartsmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/heart small.svg')); ?>"
                                alt="" />
                        </button>

                        <button class="eyesmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Group.svg')); ?>" alt="" />
                        </button>
                    </div>

                    <button
                        class="group-hover/item:block hidden w-full absolute bottom-0 bg-black text-white text-base font-medium font-['Poppins'] leading-normal py-2">
                        Add To Card
                    </button>
                </div>
                <div class="card__content">
                    <p class="text-black text-base font-medium font-['Poppins'] leading-normal mb-2">
                        HAVIT HV-G92 Gamepad
                    </p>
                    <div class="flex gap-3 mb-2">
                        <p class="text-red-500 text-base font-medium font-['Poppins'] leading-normal">
                            $120
                        </p>
                        <p class="text-black text-base font-medium font-['Poppins'] line-through leading-normal">
                            $160
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <div class="stargro flex gap-1">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                        </div>

                        <p class="text-black text-sm font-semibold font-['Poppins'] leading-[21px]">(88)</p>
                    </div>
                </div>
            </div>
            <div class="card w-[270px] group/item">
                <div class="card__head relative mb-4">
                    <div class="p-12 bg-[#F5F5F5]">
                        <img class=""
                            src="https://s3-alpha-sig.figma.com/img/5d5c/2e52/50752d55f8b60f2aa2923183dadbc135?Expires=1704067200&Signature=kgqazTkPk~QsW9Lv8NLxuNDD1uFF-41XB7p81l0Z1cCRNGtq669eZoVKGy7ZGw3mBNkNKKKw1i3yw2rSaumYB3qCfsv7evwq8TrT9zxQSE83GdMLM5jiZVEvN7D2sK1D3niLRhWxX6RBaDrmlDjIlLvpcKiwagSyZaBtBYyDBODeMKHqIkUJbmTeKpixe1Bk1dnHI3JXx0~OV0V4kVpVtUbtFN8o5uirgiSrtXGeb3R--YDUiE9vzopJ5zk6pIn1mlA5jmNa2rb~ySmLmqGXCI9Bs-v6X9zqIcrXd6w1v4wZBKzIgkPC2481wSiSBCaBWUbovtm9ryDH2ttiWnQEgg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="" />
                    </div>
                    <p
                        class="discountpercent absolute bg-[#DB4444] top-3 left-3 px-3 py-1 text-neutral-50 text-xs font-normal font-['Poppins'] leading-[18px]">
                        -40%
                    </p>

                    <div class="icon absolute top-3 right-3 flex flex-col gap-2">
                        <button class="heartsmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/heart small.svg')); ?>"
                                alt="" />
                        </button>

                        <button class="eyesmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Group.svg')); ?>" alt="" />
                        </button>
                    </div>

                    <button
                        class="group-hover/item:block hidden w-full absolute bottom-0 bg-black text-white text-base font-medium font-['Poppins'] leading-normal py-2">
                        Add To Card
                    </button>
                </div>
                <div class="card__content">
                    <p class="text-black text-base font-medium font-['Poppins'] leading-normal mb-2">
                        HAVIT HV-G92 Gamepad
                    </p>
                    <div class="flex gap-3 mb-2">
                        <p class="text-red-500 text-base font-medium font-['Poppins'] leading-normal">
                            $120
                        </p>
                        <p class="text-black text-base font-medium font-['Poppins'] line-through leading-normal">
                            $160
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <div class="stargro flex gap-1">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                        </div>

                        <p class="text-black text-sm font-semibold font-['Poppins'] leading-[21px]">(88)</p>
                    </div>
                </div>
            </div>
            <div class="card w-[270px] group/item">
                <div class="card__head relative mb-4">
                    <div class="p-12 bg-[#F5F5F5]">
                        <img class=""
                            src="https://s3-alpha-sig.figma.com/img/5d5c/2e52/50752d55f8b60f2aa2923183dadbc135?Expires=1704067200&Signature=kgqazTkPk~QsW9Lv8NLxuNDD1uFF-41XB7p81l0Z1cCRNGtq669eZoVKGy7ZGw3mBNkNKKKw1i3yw2rSaumYB3qCfsv7evwq8TrT9zxQSE83GdMLM5jiZVEvN7D2sK1D3niLRhWxX6RBaDrmlDjIlLvpcKiwagSyZaBtBYyDBODeMKHqIkUJbmTeKpixe1Bk1dnHI3JXx0~OV0V4kVpVtUbtFN8o5uirgiSrtXGeb3R--YDUiE9vzopJ5zk6pIn1mlA5jmNa2rb~ySmLmqGXCI9Bs-v6X9zqIcrXd6w1v4wZBKzIgkPC2481wSiSBCaBWUbovtm9ryDH2ttiWnQEgg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="" />
                    </div>
                    <p
                        class="discountpercent absolute bg-[#DB4444] top-3 left-3 px-3 py-1 text-neutral-50 text-xs font-normal font-['Poppins'] leading-[18px]">
                        -40%
                    </p>

                    <div class="icon absolute top-3 right-3 flex flex-col gap-2">
                        <button class="heartsmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/heart small.svg')); ?>"
                                alt="" />
                        </button>

                        <button class="eyesmall p-1.5 rounded-full bg-white">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Group.svg')); ?>" alt="" />
                        </button>
                    </div>

                    <button
                        class="group-hover/item:block hidden w-full absolute bottom-0 bg-black text-white text-base font-medium font-['Poppins'] leading-normal py-2">
                        Add To Card
                    </button>
                </div>
                <div class="card__content">
                    <p class="text-black text-base font-medium font-['Poppins'] leading-normal mb-2">
                        HAVIT HV-G92 Gamepad
                    </p>
                    <div class="flex gap-3 mb-2">
                        <p class="text-red-500 text-base font-medium font-['Poppins'] leading-normal">
                            $120
                        </p>
                        <p class="text-black text-base font-medium font-['Poppins'] line-through leading-normal">
                            $160
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <div class="stargro flex gap-1">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Vector.svg')); ?>" alt="" />
                        </div>

                        <p class="text-black text-sm font-semibold font-['Poppins'] leading-[21px]">(88)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>