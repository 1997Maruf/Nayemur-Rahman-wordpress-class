<div class="blog-section bg-[#fffcf4]">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="blog-content py-24">
            <h2 class="text-[#130606] text-center text-3xl sm:text-4xl font-bold leading-tight tracking-tight">
                <?php echo get_theme_mod('blog_heading', 'Our Blog'); ?>
            </h2>
            <p class="mt-4 text-center text-[#696262] text-base sm:text-lg font-normal leading-relaxed">
                <?php echo get_theme_mod('blog_description', 'Read our regular travel blog and know the latest update of tour and travel'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-6 mt-14">
                <?php
                $post_query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));

                if ($post_query->have_posts()) :
                    while ($post_query->have_posts()) : $post_query->the_post();
                ?>
                        <!-- Single Card -->
                        <div class="single-cart bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full', ['class' => 'w-full h-56 object-cover']);
                                } else {
                                    echo '<img class="w-full h-56 object-cover" src="' . get_stylesheet_directory_uri() . '/src/img/blog-img1.png" alt="Default Image">';
                                }
                                ?>
                            </a>
                            <div class=" py-7 flex flex-col items-center justify-center flex-grow">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                        <circle cx="3" cy="3" r="3" fill="#FFB900" />
                                    </svg>
                                    <p class="text-[#5F5B53] text-sm font-normal leading-6">
                                        <?php echo get_the_date('d F Y'); ?>
                                    </p>
                                </div>
                                <div class="w-40 h-[1px] bg-[#E2DFDA] mt-3"></div>
                                <h2 class="mt-3 text-[#171100] text-base font-semibold leading-7">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <button class="mt-4 w-full sm:w-[118px] h-[50px] rounded-full px-5 py-3 text-white text-sm font-semibold leading-6 bg-[#FFB900] hover:bg-black transition">
                                    <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'lessonlms'); ?></a>
                                </button>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p><?php _e('No posts found', 'lessonlms'); ?></p>
                <?php endif; ?>
            </div>

            <div class="flex justify-center mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="6" viewBox="0 0 30 6" fill="none">
                    <circle cx="3" cy="3" r="3" fill="#5F5B53" />
                    <circle cx="15" cy="3" r="3" fill="#FFB900" />
                    <circle cx="27" cy="3" r="3" fill="#5F5B53" />
                </svg>
            </div>
        </div>
    </div>
</div>