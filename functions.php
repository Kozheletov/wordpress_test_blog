<?php

define('VERSION_BLOG_THEME', wp_get_theme()->get('Version'));
define('PATH_TO_CSS', get_template_directory_uri().'/assets/css/');
define('PATH_TO_JS', get_template_directory_uri().'/assets/js/');

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'bootstrap-blog-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
        false,
        '4.4.1',
        'all'
    );

    wp_enqueue_style(
        'custom-blog-css',
        PATH_TO_CSS.'style.css',
        false,
        VERSION_BLOG_THEME,
        'all'
    );

    wp_enqueue_script(
        'cdn-jquery-js',
        'https://code.jquery.com/jquery-3.4.1.slim.min.js',
        false,
        '3.4.1',
        true
    );

    wp_enqueue_script(
        'cdn-poper-js',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        false,
        '1.16.0',
        true
    );

    wp_enqueue_script(
        'cdn-bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
        false,
        '4.4.1',
        true
    );

    wp_enqueue_script(
        'custom-blog-js',
        PATH_TO_JS.'main.js',
        ['cdn-jquery-js'],
        VERSION_BLOG_THEME,
        true
    );
});