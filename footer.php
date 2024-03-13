<?php
/**
 * Footer template
 * 
 * @package Ecmmm
 */
?>


<footer class="bg-black pt-20 pb-6">
    <div class="container mx-auto">
        <div class="flex justify-between mb-14">
            <div class="col">
                <p class="header mb-6 text-neutral-50 text-2xl font-bold font-['Inter'] leading-normal tracking-wide">
                    Exclusive
                </p>

                <div class="flex flex-col gap-4">
                    <p class="text-neutral-50 text-xl font-medium font-['Poppins'] leading-7">
                        Subscribe
                    </p>
                    <p class="text-neutral-50 text-base font-normal font-['Poppins'] leading-normal">
                        Get 10% off your first order
                    </p>
                    <input class="text-white bg-black" type="text" placeholder="Enter your email" />
                </div>
            </div>

            <div class="col">
                <p class="header mb-6 text-neutral-50 text-2xl font-bold font-['Inter'] leading-normal tracking-wide">
                    Support
                </p>

                <div class="flex flex-col gap-4">
                    <p class="text-neutral-50 text-base font-normal font-['Poppins'] leading-normal">
                        111 Bijoy sarani, Dhaka, DH 1515, Bangladesh.
                    </p>
                    <p class="text-neutral-50 text-base font-normal font-['Poppins'] leading-normal">
                        exclusive@gmail.com
                    </p>
                    <p class="text-neutral-50 text-base font-normal font-['Poppins'] leading-normal">
                        +88015-88888-9999
                    </p>
                </div>
            </div>

            <div class="col">
                <p class="header mb-6 text-neutral-50 text-2xl font-bold font-['Inter'] leading-normal tracking-wide">
                    Download App
                </p>

                <div class="flex flex-col gap-6">
                    <div>
                        <p>Save $3 with App New User Only</p>
                        <div class="flex gap-2">
                            <div class="qr">
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Qrcode 1.png')); ?>"
                                    alt="" />
                            </div>
                            <div class="ggpl flex flex-col justify-between">
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/img/png-transparent-google-play-store-logo-google-play-app-store-android-wallets-text-label-logo.png')); ?>"
                                    alt="" />
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/img/download-appstore.png')); ?>"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Icon-Facebook.svg')); ?>" alt="" />
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/icon-x.svg')); ?>" alt="" />
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/icon-ig.svg')); ?>" alt="" />
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/Icon-Linkedin.svg')); ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center gap-1">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/c.svg')); ?>" alt="" />
            <p class="text-white text-base font-normal font-['Poppins'] leading-normal">
                Copyright Rimel 2022. All right reserved
            </p>
        </div>
    </div>
</footer>

<?php wp_footer() ?>

</body>

</html>