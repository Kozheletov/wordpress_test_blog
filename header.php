<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <link rel="shortcut icon" href="images/logo.png">
    <?php
    wp_head();
    ?>
</head>

<body>

<header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="index.html">SiteName.dev</a>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <img class="mb-3 mx-auto logo" src="images/logo.png" alt="logo">

            <ul class="navbar-nav flex-column text-sm-center text-md-left">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page.html">Обо мне</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="archive.html">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Контакты</a>
                </li>
            </ul>

        </div>
    </nav>
</header>