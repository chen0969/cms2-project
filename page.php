<?php get_header(); ?>
<main id="main-content container m-1 g-1">
    <?php
    // Render Elementor or WP content
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content(); // This is required for Elementor to work properly
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>