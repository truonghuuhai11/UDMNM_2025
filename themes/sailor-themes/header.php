<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- WordPress sẽ tự sinh <title> qua add_theme_support('title-tag') -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">
    <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename"><?php bloginfo('name'); ?></h1>
    </a>
    <nav id="navmenu" class="navmenu">
      <?php
        // Đã loại bỏ icon mũi tên thủ công, chỉ dùng walker sinh ra icon
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'menu',
          'fallback_cb' => false,
          'items_wrap' => '<ul class="menu">%3$s</ul>',
          'walker' => new Bootstrap_NavWalker()
        ]);
      ?>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <a class="btn-getstarted" href="<?php echo get_permalink(get_page_by_path('about')); ?>">Get Started</a>
  </div>
</header>