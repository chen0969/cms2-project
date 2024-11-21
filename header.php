<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicago Tourism</title>
    <?php wp_head(); ?>
    <!-- my code here -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">
</head>

<body>
    <header>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', 
            'menu_class' => 'c-chicago_custome',
        ));
        ?>
        <div class="container">
            <div class="row">
            <h5 class="col-6"><?php get_search_form(); ?></h5>
            <h5 class="col-6 text-end"><?php the_time(); ?></h5>
            </div>
        </div>

    </header>

    <?php print_r('test content'); ?>