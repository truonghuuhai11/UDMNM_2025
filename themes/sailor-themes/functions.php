<?php
// Nhúng CSS/JS chuẩn
function sailor_theme_assets() {
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
    // ... các vendor css khác
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    // ... các vendor js khác
}
add_action('wp_enqueue_scripts', 'sailor_theme_assets');

// Đăng ký menu
register_nav_menus([
  'main-menu' => 'Main Menu',
]);