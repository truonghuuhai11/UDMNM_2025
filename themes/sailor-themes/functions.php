<?php
// Nhúng toàn bộ CSS & JS cho theme Sailor chuẩn Bootstrap
function sailor_theme_assets() {
  // CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
  wp_enqueue_style('aos', get_template_directory_uri().'/assets/vendor/aos/aos.css');
  wp_enqueue_style('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
  wp_enqueue_style('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
  wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');

  // JS
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
  wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri().'/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), null, true);
  wp_enqueue_script('isotope', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
  wp_enqueue_script('aos', get_template_directory_uri().'/assets/vendor/aos/aos.js', array(), null, true);
  wp_enqueue_script('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
  wp_enqueue_script('purecounter', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
  wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js', array(), null, true);
  wp_enqueue_script('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'sailor_theme_assets');

// Bật lazy load ảnh cho toàn bộ website (WordPress 5.5+)
add_filter('wp_lazy_loading_enabled', '__return_true');

// Hỗ trợ ảnh đại diện bài viết
add_theme_support('post-thumbnails');

// Hỗ trợ tự động title tag
add_theme_support('title-tag');

// Đăng ký menu chính cho theme
register_nav_menus([
  'main-menu' => 'Main Menu',
]);

// Nhúng custom walker cho menu dropdown chuẩn Bootstrap
require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';

// Đăng ký Custom Post Type: Portfolio
function sailor_register_portfolio_cpt() {
  $labels = array(
    'name' => __('Portfolios', 'sailor-theme'),
    'singular_name' => __('Portfolio', 'sailor-theme'),
    'add_new' => __('Thêm mới', 'sailor-theme'),
    'add_new_item' => __('Thêm Portfolio mới', 'sailor-theme'),
    'edit_item' => __('Sửa Portfolio', 'sailor-theme'),
    'new_item' => __('Portfolio mới', 'sailor-theme'),
    'view_item' => __('Xem Portfolio', 'sailor-theme'),
    'search_items' => __('Tìm Portfolio', 'sailor-theme'),
    'not_found' => __('Không tìm thấy', 'sailor-theme'),
    'not_found_in_trash' => __('Không tìm thấy trong thùng rác', 'sailor-theme'),
    'menu_name' => __('Portfolio', 'sailor-theme'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-portfolio',
    'show_in_rest' => true,
  );
  register_post_type('portfolio', $args);
}
add_action('init', 'sailor_register_portfolio_cpt');

// Đăng ký Custom Taxonomy: Loại Portfolio
function sailor_register_portfolio_taxonomy() {
  $labels = array(
    'name' => __('Loại Portfolio', 'sailor-theme'),
    'singular_name' => __('Loại Portfolio', 'sailor-theme'),
    'search_items' => __('Tìm loại', 'sailor-theme'),
    'all_items' => __('Tất cả loại', 'sailor-theme'),
    'edit_item' => __('Sửa loại', 'sailor-theme'),
    'update_item' => __('Cập nhật loại', 'sailor-theme'),
    'add_new_item' => __('Thêm loại mới', 'sailor-theme'),
    'menu_name' => __('Loại Portfolio', 'sailor-theme'),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'show_in_rest' => true,
  );
  register_taxonomy('portfolio_category', 'portfolio', $args);
}
add_action('init', 'sailor_register_portfolio_taxonomy');

// Thêm meta box cho Portfolio
function sailor_add_portfolio_meta_box() {
  add_meta_box(
    'portfolio_link',
    'Link sản phẩm',
    'sailor_portfolio_link_callback',
    'portfolio',
    'normal',
    'default'
  );
}
add_action('add_meta_boxes', 'sailor_add_portfolio_meta_box');

// Hiển thị field trong admin
function sailor_portfolio_link_callback($post) {
  $value = get_post_meta($post->ID, '_portfolio_link', true);
  echo '<label for="portfolio_link">' . __('URL:', 'sailor-theme') . ' </label>';
  echo '<input type="text" id="portfolio_link" name="portfolio_link" value="' . esc_attr($value) . '" style="width:100%">';
}

// Lưu dữ liệu custom field
function sailor_save_portfolio_link($post_id) {
  if (array_key_exists('portfolio_link', $_POST)) {
    update_post_meta($post_id, '_portfolio_link', sanitize_text_field($_POST['portfolio_link']));
  }
}
add_action('save_post', 'sailor_save_portfolio_link');