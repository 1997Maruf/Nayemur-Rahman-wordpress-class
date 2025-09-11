<div class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 mb-14">
            <div>
                <h2 class="text-3xl sm:text-4xl text-[#171100] font-bold leading-tight">Our popular courses</h2>
                <p class="mt-4 text-[#5F5B53] text-base sm:text-lg leading-relaxed max-w-md">
                    Build new skills with new trendy courses and shine for the next future career.
                </p>
            </div>
            <div>
                <!-- SVG Navigation Arrows -->
                <svg xmlns="http://www.w3.org/2000/svg" width="98" height="40" viewBox="0 0 98 40" fill="none">
                    <circle cx="78" cy="20" r="20" fill="#FFB900" />
                    <path d="M75 14L81 20L75 26" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#FFB900" />
                    <path d="M23 14L17 20L23 26" stroke="#FFB900" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Courses Grid -->
        <div class="container mx-auto px-4 py-12">
    <?php 
    $courses = new WP_Query(array(
        'post_type'      => 'course',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));

    if($courses->have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            while($courses->have_posts()) : $courses->the_post();
                $rating = get_post_meta(get_the_ID(), 'rating', true);
                $price  = get_post_meta(get_the_ID(), 'price', true);

                $price  = !empty($price) ? '$' . number_format((float)$price, 2) : 'Free';
                $rating = !empty($rating) ? $rating : 'No rating';
            ?>
            
            <!-- Single Course Card -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                <!-- Thumbnail -->
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-56 object-cover']); ?>
                <?php else : ?>
                    <img class="w-full h-56 object-cover" 
                         src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/blog-img1.png" 
                         alt="Course Image">
                <?php endif; ?>

                <!-- Content -->
                <div class="p-6 flex flex-col flex-grow">
                    <!-- Title & Rating -->
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-lg font-semibold text-[#171100] leading-snug">
                            <?php the_title(); ?>
                        </h3>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/src/img/Rating.png" alt="Rating" class="w-4 h-4">
                            <span class="text-sm text-[#5F5B53]"><?php echo esc_html($rating); ?></span>
                        </div>
                    </div>

                    <!-- Excerpt -->
                    <p class="text-sm text-[#5F5B53] mb-4 line-clamp-3">
                        <?php echo wp_trim_words(get_the_content(), 15); ?>
                    </p>

                    <!-- Price & Button -->
                    <div class="mt-auto flex justify-between items-center">
                        <p class="text-lg font-bold text-[#171100]"><?php echo esc_html($price); ?></p>
                        <a href="<?php the_permalink(); ?>" 
                           class="bg-[#171100] hover:bg-[#FFB900] text-white text-sm font-semibold py-2 px-6 rounded-full transition">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <?php endwhile; ?>
        </div>
    <?php 
    else : 
        echo '<p class="text-center text-gray-600">No courses found.</p>';
    endif; 
    wp_reset_postdata(); 
    ?>
</div>
<div class="flex justify-center mt-12">
    <button class="mt-8 w-full sm:w-auto px-10 py-3 rounded-full bg-[#FFB900] hover:bg-black text-white text-base font-semibold transition">
        <a href="<?php echo get_post_type_archive_link('course'); ?>">View All Courses</a>
    </button>
</div>
    </div>
</div>