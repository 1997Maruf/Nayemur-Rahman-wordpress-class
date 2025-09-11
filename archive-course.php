<?php get_header(); ?>

<!-- All Courses Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-screen-xl">
        
        <!-- Section Title -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">All Courses</h2>
            <p class="text-gray-600 text-base sm:text-lg">
                Browse our complete collection of courses and find the perfect one for your career growth.
            </p>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
                $courses = new WP_Query(array(
                    'post_type'      => 'course',
                    'posts_per_page' => 6,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                ));

                if($courses->have_posts()) :
                    while($courses->have_posts()) : $courses->the_post(); 
                    
                        $rating = get_post_meta(get_the_ID(),'rating',true);
                        $price  = get_post_meta(get_the_ID(),'price',true);

                        $price  = !empty($price) ? '$' . number_format((float)$price, 2) : 'Free';
                        $rating = !empty($rating) ? $rating : '0.0';
            ?>
            
            <!-- Single Course Card -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden flex flex-col">
                
                <!-- Thumbnail -->
                <div class="h-56 overflow-hidden">
                    <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover hover:scale-105 transition-transform']); ?>
                    <?php else: ?>
                        <div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">
                            <span>No Image Found</span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Content -->
                <div class="p-6 flex flex-col flex-grow">
                    <!-- Title & Rating -->
                    <div class="flex justify-between items-center mb-3">
                        <a href="<?php the_permalink(); ?>" class="text-lg font-semibold text-gray-900 hover:text-yellow-500">
                            <?php the_title(); ?>
                        </a>
                        <div class="flex items-center gap-1 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-yellow-400" viewBox="0 0 18 17">
                                <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" />
                            </svg>
                            <span class="text-sm text-gray-600"><?php echo esc_html($rating); ?></span>
                        </div>
                    </div>

                    <!-- Excerpt -->
                    <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                    </p>

                    <!-- Price & Button -->
                    <div class="mt-auto flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900"><?php echo esc_html($price); ?></span>
                        <a href="<?php the_permalink(); ?>" 
                           class="bg-yellow-500 hover:bg-black text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <?php endwhile; wp_reset_postdata(); else: ?>
                <p class="col-span-3 text-center text-gray-600">No courses found.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <?php 
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('<span class="px-3 py-2 bg-gray-200 rounded-full hover:bg-gray-300">Prev</span>','lessonlms'),
                    'next_text' => __('<span class="px-3 py-2 bg-gray-200 rounded-full hover:bg-gray-300">Next</span>','lessonlms'),
                )); 
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>