<?php

function awesome_plugin_enqueue_style() {
    wp_enqueue_style( 'custom-css', plugins_url( 'awesome-plugin/style.css' ), array(), time() );

    wp_enqueue_script( 'custom-awesome-js', plugins_url( 'awesome-plugin/custom-awesome-js.js' ), array( 'jquery' ), time() );
}

add_action( 'wp_enqueue_scripts', 'awesome_plugin_enqueue_style' );