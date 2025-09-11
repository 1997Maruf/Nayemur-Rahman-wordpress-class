
<?php
$featured_title = get_theme_mod('featured_title', 'Featured Courses');

$featured_description = get_theme_mod('featured_description', ' 87% of people learning for professional development<br />
  report career benefits like getting a promotion, a raise, or<br />
  starting a new career.');

$featured_description_two = get_theme_mod('featured_description_two', 'Lesson Impact Report (2022)');

$featured_button_text = get_theme_mod('featured_button_text', 'Sign Up');

$featured_button_url = get_theme_mod('featured_button_url', '#');

$featured_image_one = get_theme_mod('featured_image_one', get_stylesheet_directory_uri() . '/src/img/thounght1.png');

$featured_image_two = get_theme_mod('featured_image_two', get_stylesheet_directory_uri() . '/src/img/thounght2.png');
?>

<div class="section py-24 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="flex flex-col lg:flex-row lg:gap-16 gap-8 mt-20 items-center lg:items-start">

            <!-- Images -->
            <div class="flex gap-6">
                <img class="mt-8 w-20 h-auto lg:w-auto lg:h-[405px] object-contain" src="<?php echo esc_url($featured_image_one); ?>" alt="Thought 1" />
                <img class="h-[280px] lg:h-[405px] w-auto object-contain" src="<?php echo esc_url($featured_image_two); ?>" alt="Thought 2" />
            </div>

            <!-- Text Content -->
            <div class="mt-12 lg:mt-0 max-w-md lg:max-w-lg">
                <h2 class="text-[#171100] text-3xl sm:text-4xl font-bold leading-tight tracking-tight">
                    <?php echo esc_html($featured_title );?>
                </h2>
                <p class="mt-4 text-[#5F5B53] text-base sm:text-lg leading-relaxed">
                   <?php echo esc_html($featured_description); ?>
                </p>
                <p class="mt-4 text-[#5F5B53] text-base sm:text-lg leading-relaxed">
                    <?php echo esc_html($featured_description_two); ?>
                </p>
                <button class="mt-8 w-full sm:w-auto px-10 py-3 rounded-full bg-[#FFB900] hover:bg-black text-white text-base font-semibold transition">
                    <a href="<?php echo esc_url($featured_button_url); ?>"><?php echo esc_html($featured_button_text); ?></a>
                </button>
            </div>
        </div>
    </div>
</div>