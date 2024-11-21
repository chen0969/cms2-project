<footer class="container-fluid">
    <?php
    get_template_part('template-parts/part', 'contact');
    ?>
    <div style="background-color: blue;">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'Footer_Nav',
                'manu_class' => 'footer_menu',
                'container' => 'nav',
            )
        );
        ?>
    </div>
    <div style="background-color: red;">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'Footer_Nav_2',
                'manu_class' => 'footer_menu',
                'container' => 'nav',
            )
        );
        ?>
    </div>
    <div style="background-color: green;">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'Footer_Nav_3',
                'manu_class' => 'footer_menu',
                'container' => 'nav',
            )
        );
        ?>
    </div>

</footer>
<!-- wp_footer is for editors -->
<?php wp_footer(); ?>
</body>

</html>