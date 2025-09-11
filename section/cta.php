<?php
$cta_title = get_theme_mod('cta_title', 'Take the next step toward your personal and professional goals with Lesson.');
$cta_description = get_theme_mod('cta_description', 'Take the next step toward. Join now to receive personalized and more recommendations from the full Coursera catalog.');
$cta_button_text = get_theme_mod('cta_button_text', 'Join Now');
$cta_button_url = get_theme_mod('cta_button_url', '#');
$cta_image = get_theme_mod('cta_image', get_stylesheet_directory_uri() . '/src/img/thounght3.png');
?>

<div class="section">
    <div class="container mx-auto px-4 max-w-screen-xl py-[150px] pb-[200px]">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-[130px] justify-center items-center">

            <!-- Text Content -->
            <div class="w-full lg:w-[570px]">
                <?php if ($cta_title) : ?>
                    <h2 class="text-[#171100] text-3xl sm:text-4xl font-bold leading-tight tracking-tight mt-14 lg:mt-0">
                        <?php echo esc_html($cta_title); ?>
                    </h2>
                <?php endif; ?>
                <p class="mt-4 mb-3 text-[#5F5B53] text-base sm:text-lg leading-relaxed">
                    <?php echo esc_html($cta_description); ?>
                </p>
               <a href="<?php echo esc_url($cta_button_url); ?>" 
                   class="mt-12 inline-block w-full sm:w-[137px] h-[50px] rounded-full px-8 py-3 
                   text-white bg-[#FFB900] hover:bg-black text-base font-semibold transition">
                   <?php echo esc_html($cta_button_text); ?>
                </a>
            </div>

            <!-- Image -->
            <div class="pt-12 lg:pt-0">
                <img src="<?php echo esc_url($cta_image); ?>" alt="<?php echo esc_attr($cta_title); ?>" class="w-full max-w-md lg:max-w-none" />
            </div>
        </div>
    </div>
</div>