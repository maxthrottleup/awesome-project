<?php

function awesome_plugin_enqueue_style() {
    wp_enqueue_style( 'custom-css', AWESOME_PLUGIN_DIR . '/style.css', array(), time() );

    wp_enqueue_script( 'custom-css', AWESOME_PLUGIN_DIR . '/custom.js', array( 'jquery' ), time() );
}

add_action( 'wp_enqueue_scripts', 'awesome_plugin_enqueue_style' );