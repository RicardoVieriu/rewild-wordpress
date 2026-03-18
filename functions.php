<?php

function rewild_enqueue_assets() {
    wp_enqueue_style(
        'rewild-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        null
    );

    wp_enqueue_script(
        'rewild-jquery',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-dropotron',
        get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js',
        array('rewild-jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-scrolly',
        get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js',
        array('rewild-jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-browser',
        get_template_directory_uri() . '/assets/js/browser.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-breakpoints',
        get_template_directory_uri() . '/assets/js/breakpoints.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-util',
        get_template_directory_uri() . '/assets/js/util.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'rewild-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('rewild-jquery'),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'rewild_enqueue_assets');