<?php
class Bootstrap_NavWalker extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

    // Chỉ thêm class dropdown cho menu cha
    if (in_array('menu-item-has-children', $classes) && $depth == 0) {
      $class_names .= ' dropdown';
    }
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
    $output .= $indent . '<li' . $class_names . '>';

    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
    $atts['href']   = !empty($item->url) ? $item->url : '';

    // SỬA: Chỉ thêm thuộc tính dropdown-toggle và data-bs-toggle nếu href là '#' (không phải link thật)
    if (in_array('menu-item-has-children', $classes) && $depth == 0 && ($item->url == '#' || $item->url == '')) {
      $atts['class'] = 'dropdown-toggle';
      $atts['data-bs-toggle'] = 'dropdown';
      $atts['aria-expanded'] = 'false';
      $atts['role'] = 'button';
    }

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }
    $title = apply_filters('the_title', $item->title, $item->ID);
    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . $title;
    // Chỉ thêm icon mũi tên cho menu cha có submenu (About)
    if (in_array('menu-item-has-children', $classes) && $depth == 0) {
      $item_output .= ' <i class="bi bi-chevron-down toggle-dropdown"></i>';
    }
    $item_output .= $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $output .= str_repeat("\t", $depth) . "</ul>\n";
  }
}
?>