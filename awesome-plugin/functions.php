<?php

function awesome_plugin_enqueue_style() {
    wp_enqueue_style( 'custom-css', AWESOME_PLUGIN_DIR . '/style.css', array(), time() );
}

add_action( 'wp_enqueue_scripts', 'awesome_plugin_enqueue_style' );