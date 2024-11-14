<?php get_header(); ?>
<?php get_template_part('template-parts/part', 'hero'); ?>
<main id="main-content">
    <?php
    // Render Elementor or WP content
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

    <!-- posts section -->
    <section class="container">
        <div class="row g-2">
            <?php
            $args = [
                'post_type' => 'post',
                'post_per_page' => -1
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
            ?>
                    <div class="o-postCard col-md-4 p-1">
                        <h4 class="o-postCard__title"><a class="o-postCard__a" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <h5><?php the_author(); ?></h5>
                        <h6><?php the_excerpt(); ?></h6>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <h3>No posts!</h3>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_template_part('template-parts/part', 'carousel'); ?>
<?php get_footer(); ?>