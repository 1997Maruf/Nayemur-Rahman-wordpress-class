<div class="bg-[#2E2100] py-20">
    <div class="container mx-auto px-4 max-w-[1170px]">
        <div class="flex flex-wrap gap-x-10 gap-y-16 justify-between">
            <div class="w-full md:w-[277px]">
                <img class="mt-1" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/footer-logo.png" alt="Footer Logo" />
                <p class="text-[#BFBCB2] text-sm font-normal leading-6 mt-6 max-w-[267px]">
                    <?php echo get_theme_mod('footer_text', 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.'); ?>
                </p>
                <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="111" height="15" viewBox="0 0 111 15" fill="none">
                    <!-- SVG paths unchanged -->
                    <path d="M5.64991 15C3.57026 15 1.63168 14.3864 0 13.3276C1.38535 13.4185 3.83019 13.2007 5.35087 11.7292C3.06326 11.6227 2.0316 9.8428 1.89703 9.08215C2.0914 9.15822 3.01841 9.24949 3.54172 9.03651C0.91022 8.36714 0.506525 6.02434 0.596235 5.30933C1.08964 5.65923 1.92694 5.78093 2.25587 5.75051C-0.196205 3.97059 0.685945 1.2931 1.11954 0.71501C2.87924 3.18826 5.51649 4.57733 8.7791 4.65459C8.71759 4.38089 8.6851 4.09593 8.6851 3.80325C8.6851 1.70277 10.3586 0 12.423 0C13.5016 0 14.4735 0.46484 15.1558 1.20837C15.8766 1.03703 16.9613 0.635914 17.4916 0.289047C17.2243 1.26268 16.3922 2.07488 15.8888 2.37592C15.8847 2.36563 15.893 2.38616 15.8888 2.37592C16.331 2.30807 17.5274 2.07481 18 1.74949C17.7663 2.29647 16.884 3.20591 16.16 3.71506C16.2947 9.74221 11.7492 15 5.64991 15Z" fill="white" />
                    <!-- Other paths omitted for brevity -->
                </svg>
            </div>
            <div class="flex flex-wrap gap-x-10 gap-y-10 flex-1 min-w-[250px]">
                <div class="min-w-[150px] flex-1">
                    <h3 class="text-white text-lg font-semibold leading-7"><?php echo esc_html(get_theme_mod('footer_menu_1_title', 'Company')); ?></h3>
                    <div class="w-[130px] h-[1px] mt-3 bg-[#59554B]"></div>
                    <!-- <p class="mt-7 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">About Us</p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">Features</p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">Our Pricing</p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">Latest News</p> -->
                    <ul class="footer-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer_menu_1',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                        )); ?>
                    </ul>
                </div>
                <div class="min-w-[150px] flex-1">
                    <h3 class="text-white text-lg font-semibold leading-7"><?php echo esc_html(get_theme_mod('footer_menu_2_title', 'Support')); ?></h3>
                    <div class="w-[130px] h-[1px] mt-3 bg-[#59554B]"></div>
                    <!-- <p class="mt-7 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">FAQ’s</p>
                    <p class="mt-3 text-[#BFBCB2] text-sm leading-6 cursor-pointer hover:text-white">Terms & Conditions</p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">Privacy Policy</p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6 cursor-pointer hover:text-white">Contact Us</p> -->
                    <ul class="footer-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer_menu_2',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                        )); ?>
                </div>
                <div class="min-w-[150px] flex-1">
                    <h3 class="text-white text-lg font-semibold leading-7"><?php echo esc_html(get_theme_mod('footer_address', 'Address')); ?></h3>
                    <div class="w-[130px] h-[1px] mt-3 bg-[#59554B]"></div>
                    <p class="mt-7 text-[#BFBCB2] text-base leading-6"><span class="font-semibold">Location: </span> <?php echo esc_html(get_theme_mod('footer_location', 'Location')); ?></p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6"><span class="font-semibold">Email: </span> <?php echo esc_html(get_theme_mod('footer_email', 'email@gmail.com')); ?></p>
                    <p class="mt-3 text-[#BFBCB2] text-base leading-6"><span class="font-semibold">Phone: </span> <?php echo esc_html(get_theme_mod('footer_phone', '+ 000 1234 567 890')); ?></p>

                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-10 border-t border-[#59554B]"></div>
        <p class="py-7 text-[#807D74] text-center text-base leading-6">
            Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All rights reserved
        </p>
    </div>
</div>