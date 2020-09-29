<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <?php
    wp_head();
    ?>
</head>

<body>

<header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="<?php echo home_url(); ?>">
        <?php
        echo home_url();
        ?>
    </a>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <img class="mb-3 mx-auto logo"
                 src="<?php echo wp_get_attachment_image_url(get_theme_mod
                 ('custom_logo')); ?>" alt="logo">

            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => '',
                'container_id' => '',
                'menu_class' => 'navbar-nav flex-column text-sm-center text-md-left',
                'menu_id' => '',
                'echo' => true,
                'items_wrap' => '<ul  class="%2$s">%3$s</ul>',
            ]);
            ?>

        </div>
    </nav>
</header>