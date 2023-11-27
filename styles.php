<?php
function lyvf_enqueue_styles() {
    wp_enqueue_style('lyvf-style', plugins_url('/styles/lyvf-style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'lyvf_enqueue_styles');