<?php
/*
Plugin Name: PWA Install Button
Plugin URI: https://teethy.org/
Description: Adds an install PWA button with browser fallback.
Version: 1.0
Author: teethy
Author URI: https://teethy.org
License: GPL2
*/

/* ----------------------------------------------------
   ENQUEUE FRONTEND SCRIPT
-----------------------------------------------------*/
function pwa_install_button_enqueue_scripts() {
    wp_enqueue_script(
        'pwa-install-button',
        plugin_dir_url(__FILE__) . 'pwa-install-button.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'pwa_install_button_enqueue_scripts');

/* ----------------------------------------------------
   SHORTCODE
-----------------------------------------------------*/
function pwa_install_button_shortcode($atts) {
    $atts = shortcode_atts([
        'button_text' => 'Install App'
    ], $atts);

    return '<button id="pwa-install-btn" class="pwa-install-btn">'
        . esc_html($atts['button_text']) .
        '</button>';
}
add_shortcode('pwa_install_button', 'pwa_install_button_shortcode');

/* ----------------------------------------------------
   BUTTON STYLES
-----------------------------------------------------*/
add_action('wp_head', function() { ?>
<style>
.pwa-install-btn {
    background-color:#e32f5f;
    color:#fff;
    padding:10px 20px;
    border:none;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
}
.pwa-install-btn:hover {
    background-color:#c51a48;
}
.pwa-fallback-msg {
    background:#e32f5f;
    border:1px solid #ff6b6b;
    padding:12px;
    border-radius:8px;
    margin-top:10px;
    font-size:15px;
}
</style>
<?php });
