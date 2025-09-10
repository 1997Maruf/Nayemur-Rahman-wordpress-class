<div class="blog-sidebar space-y-8">

    <!-- Search Widget -->
    <div class="sidebar-widget search-widget bg-white shadow-md rounded-xl p-6">
        <h3 class="widget-title text-xl font-semibold text-gray-900 border-b pb-3 mb-4">Search</h3>
        <form class="flex items-center">
            <input type="text" placeholder="Search..."
                class="w-full border border-gray-300 rounded-l-lg px-4 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none">
            <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-r-lg transition">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Recent Posts Widget -->
    <div class="sidebar-widget recent-posts bg-white shadow-md rounded-xl p-6">
        <h3 class="widget-title text-xl font-semibold text-gray-900 border-b pb-3 mb-4">Recent Posts</h3>
        <ul class="space-y-4">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4,
                'post_status' => 'publish'
            ));
            foreach ($recent_posts as $post) : ?>
                <li class="flex flex-col">
                    <a href="<?php echo get_permalink($post['ID']); ?>"
                        class="text-gray-800 hover:text-yellow-500 font-medium">
                        <?php echo esc_html($post['post_title']); ?>
                    </a>
                    <span class="post-date text-sm text-gray-500">
                        <?php echo get_the_date('M d, Y', $post['ID']); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Categories Widget -->
    <div class="sidebar-widget categories bg-white shadow-md rounded-xl p-6">
        <h3 class="widget-title text-xl font-semibold text-gray-900 border-b pb-3 mb-4">
            <?php _e('Categories', 'lessonlms'); ?>
        </h3>
        <ul class="space-y-2 text-gray-700">
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'show_count' => true
            ));
            ?>
        </ul>
    </div>

    <!-- Tags Widget -->
    <div class="sidebar-widget tags bg-white shadow-md rounded-xl p-6">
        <h3 class="widget-title text-xl font-semibold text-gray-900 border-b pb-3 mb-4">
            <?php _e('Tags', 'lessonlms'); ?>
        </h3>
        <div class="tag-cloud flex flex-wrap gap-2">
            <?php
            wp_tag_cloud(array(
                'smallest' => 12,
                'largest'  => 12,
                'unit'     => 'px',
                'number'   => 10,
                'format'   => 'flat'
            ));
            ?>
        </div>
    </div>
</div>