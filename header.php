<?php
/**
 * Header template
 * 
 * @package Ecmmm
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="headertop text-center py-3 bg-black">
            <div class="container mx-auto">
                <select class="float-right border-0 bg-none text-neutral-50 bg-black text-sm" name="" id="">
                    <option value="">English</option>
                </select>
                <p class="text-neutral-50 text-sm font-normal font-['Poppins'] leading-[21px]">
                    Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%!
                    <a class="ms-2 text-neutral-50 text-sm font-semibold font-['Poppins'] underline leading-normal"
                        href="#">ShopNow</a>
                </p>
            </div>
        </div>

        <div class="mainheader pt-10 pb-4 border-b">
            <div class="container mx-auto">
                <div class="flex justify-between">
                    <div class="left flex items-center">
                        <div>

                            <?php
                            if (function_exists('the_custom_logo')) {
                                // the_custom_logo();
                            }
                            ?>
                        </div>

                        <h1 class="text-black text-2xl font-bold font-['Inter'] leading-normal tracking-wide">
                            <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
                        </h1>

                        <?php get_template_part("template-parts/header/nav"); ?>

                    </div>

                    <div class="right">
                        <div class="flex gap-6">
                            <div class="serchform flex items-center">

                                <?php get_search_form(); ?>


                            </div>

                            <div class="flex gap-4">
                                <button>
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Wishlist.svg')); ?>"
                                        alt="" />
                                </button>

                                <button>
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Cart1.svg')); ?>"
                                        alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- <header> -->
    <!-- <h1>Header</h1> -->

    <!-- </header> -->