<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Sen:wght@400..800&display=swap"
        rel="stylesheet" />
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="nav-section bg-[#fffcf4]">
        <div class="container lg:w-[1170px] w-[300px] mx-auto px-4">
            <nav class="flex items-center gap-24  py-6 relative">
                <!-- Logo -->
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/img/Logo.png" alt="<?php echo esc_attr(bloginfo('name')); ?>" class="w-[120px]" />
                    </a>
                <?php endif; ?>
                <!-- Hamburger (peer checkbox) -->
                <input type="checkbox" id="menu-toggle" class="peer hidden" />
                <label for="menu-toggle" class="lg:hidden cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#171100]" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-[77px] text-[#5F5B53] text-[16px] font-normal">

                    <ul class="main-menu flex gap-[47px]">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'main-menu flex gap-[47px]',
                            'container'      => false,
                            'fallback_cb'    => false,
                        ));
                        ?>
                    </ul>
                    <button class="w-[144px] h-[49px] rounded-full bg-black text-white text-[16px] font-semibold px-[41px] py-[11px]">Sign Up</button>
                </div>

                <!-- Mobile Menu -->
                <div
                    class="peer-checked:flex hidden absolute top-[100%] left-0 w-[200px] flex-col bg-[#fffcf4] px-4 py-6  text-[#5F5B53] text-[16px] font-normal lg:hidden z-50">

                    <ul class="main-menu flex gap-[47px]">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                        ));
                        ?>
                    </ul>
                    <button class="w-[144px] h-[49px] rounded-full bg-black text-white text-[16px] font-semibold px-[41px] py-[11px]">Sign Up</button>
                </div>
            </nav>
        </div>
    </div>