<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php 
            wp_nav_menu(
                array(
                    'menu' => 'main-nav',
                    'menu_class' => 'navbar-nav',
                    'theme_location' => 'primary',
                    'container' => 'false',
                    'walker' => new WP_Bootstrap_Navwalker() 
                )
            );
            ?>
        </div>
    </nav>