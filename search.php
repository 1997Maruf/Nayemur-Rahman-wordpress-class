<?php get_header(); ?>

<section class="blog-area search-results py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Search Title -->
        <div class="blog-comment-title mb-8 text-center">
            <h3 class="text-2xl font-bold text-gray-800">
                <?php echo esc_html(sprintf(__('Search Results for "%s"', 'lessonlms'), get_search_query())); ?>
            </h3>
        </div>

        <?php if (have_posts()) : ?>
            <div class="blog-list grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="blog-item bg-white shadow-md rounded-xl p-6 flex flex-col">
                        <div class="blog-title mb-4">
                            <h3 class="text-xl font-semibold text-gray-900 hover:text-yellow-500 transition">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <div class="blog-excerpt text-gray-600 flex-grow">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"
                            class="mt-4 inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-full text-sm font-medium transition">
                            <?php _e('Read More', 'lessonlms'); ?>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="no-results py-10 text-center space-y-4">
                <h3 class="text-xl font-semibold text-gray-800"><?php _e('No results found', 'lessonlms'); ?></h3>
                <p class="text-gray-600"><?php _e('Try searching for something else.', 'lessonlms'); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-full text-sm font-medium transition">
                    <?php _e('Return Home', 'lessonlms'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>