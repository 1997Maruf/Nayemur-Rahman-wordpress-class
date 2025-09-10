<?php
get_header();
?>

<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
    <div class="post-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
