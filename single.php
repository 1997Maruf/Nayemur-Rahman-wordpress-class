<?php get_header(); ?>

<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- Main Blog Content -->
            <div class="lg:col-span-2 bg-white p-8 rounded-2xl shadow-lg">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <!-- Blog Meta -->
                        <div class="mb-6 border-b border-gray-200 pb-6">
                            <div class="flex items-center space-x-3 text-sm text-gray-500">
                                <div class="w-2 h-2 rounded-full bg-yellow-400"></div>
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <h1 class="mt-4 text-3xl font-bold text-gray-900"><?php the_title(); ?></h1>
                            <div class="mt-3 flex items-center space-x-3">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', ['class' => 'w-10 h-10 rounded-full']); ?>
                                <span class="text-gray-700 text-sm">By <span class="font-medium"><?php the_author(); ?></span></span>
                            </div>
                        </div>

                        <!-- Featured Image -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="rounded-lg overflow-hidden mb-8">
                                <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Blog Content -->
                        <div class="prose max-w-none prose-lg text-gray-700">
                            <?php the_content(); ?>
                        </div>

                        <!-- Tags -->
                        <div class="mt-8 flex items-center flex-wrap gap-2 text-sm">
                            <span class="font-semibold text-gray-800">Tags:</span>
                            <?php the_tags('<span class="px-3 py-1 bg-gray-100 rounded-full text-gray-600">', '</span><span class="px-3 py-1 bg-gray-100 rounded-full text-gray-600">', '</span>'); ?>
                        </div>

                        <!-- Social Share -->
                        <div class="mt-8 flex items-center space-x-4">
                            <span class="font-semibold text-gray-800">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank" class="text-sky-500 hover:text-sky-700"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="text-blue-700 hover:text-blue-900"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" target="_blank" class="text-red-600 hover:text-red-800"><i class="fab fa-pinterest-p"></i></a>
                        </div>

                        <!-- Author Box -->
                        <div class="mt-12 flex items-start space-x-6 bg-gray-100 p-6 rounded-xl">
                            <div class="flex-shrink-0">
                                <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', ['class' => 'w-20 h-20 rounded-full']); ?>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">About <?php the_author(); ?></h3>
                                <p class="text-gray-600 mt-2"><?php echo get_the_author_meta('description'); ?></p>
                                <div class="mt-3 flex space-x-4 text-gray-500">
                                    <?php if (get_the_author_meta('user_url')) : ?>
                                        <a href="<?php echo get_the_author_meta('user_url'); ?>" class="hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php echo get_the_author_meta('user_url'); ?>" class="hover:text-sky-500"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php echo get_the_author_meta('user_url'); ?>" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                                        <a href="<?php echo get_the_author_meta('user_url'); ?>" class="hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="mt-12">
                            <?php
                            $comments_count = get_comments_number();
                            if ($comments_count > 0):
                                echo '<h2 class="text-xl font-semibold mb-6">Comments (' . $comments_count . ')</h2>';
                            endif;

                            $parent_comments = get_comments(array(
                                'post_id' => get_the_ID(),
                                'status'  => 'approve',
                                'order'   => 'ASC',
                                'parent'  => 0
                            ));
                            ?>

                            <?php if ($parent_comments) : ?>
                                <div class="space-y-6">
                                    <?php foreach ($parent_comments as $comment) : ?>
                                        <div class="flex space-x-4 p-4 bg-gray-50 rounded-lg" id="comment-<?php echo $comment->comment_ID; ?>">
                                            <?php echo get_avatar($comment, 50, '', '', ['class' => 'w-12 h-12 rounded-full']); ?>
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <h4 class="font-semibold text-gray-800"><?php echo esc_html($comment->comment_author); ?></h4>
                                                    <span class="text-xs text-gray-500">
                                                        <?php echo human_time_diff(strtotime($comment->comment_date), current_time('timestamp')); ?> ago
                                                    </span>
                                                </div>
                                                <p class="text-gray-700 mt-1"><?php echo esc_html($comment->comment_content); ?></p>
                                                <div class="mt-2">
                                                    <?php
                                                    comment_reply_link(array(
                                                        'reply_text' => 'Reply',
                                                        'depth'      => 1,
                                                        'max_depth'  => get_option('thread_comments_depth'),
                                                        'class'      => 'text-sm text-yellow-600 hover:underline'
                                                    ), $comment->comment_ID, get_the_ID());
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Comment Form -->
                        <div class="mt-12">
                            <h2 class="text-xl font-semibold mb-4">Leave a Comment</h2>
                            <?php
                            comment_form(array(
                                'fields' => array(
                                    'author' => '<div class="mb-4"><input id="author" name="author" type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Name" required></div>',
                                    'email'  => '<div class="mb-4"><input id="email" name="email" type="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Email" required></div>'
                                ),
                                'comment_field' => '<div class="mb-4"><textarea id="comment" name="comment" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Write your comment here..." required></textarea></div>',
                                'class_submit'  => 'bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-2 rounded-full transition',
                                'label_submit'  => 'Post Comment'
                            ));
                            ?>
                        </div>

                <?php endwhile;
                endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>