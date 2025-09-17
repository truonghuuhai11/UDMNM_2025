<?php
/*
Plugin Name: Plugin Contact Form
Description: Simple contact form plugin using shortcode and AJAX mail send.
Version: 1.0
Author: truonghuuhai
*/

// Shortcode to display contact form
function sailor_contact_form_shortcode() {
    ob_start();
    ?>
    <form id="sailor-contact-form" method="post" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group mb-3">
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
      </div>
      <div class="form-group mb-3">
        <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-danger btn-lg w-100">Send Message</button>
      </div>
      <div class="sailor-contact-result mt-3"></div>
    </form>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('sailor-contact-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var data = new FormData(form);
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: new URLSearchParams([...data]) + '&action=sailor_send_contact',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
            .then(res => res.text())
            .then(msg => {
                form.querySelector('.sailor-contact-result').innerHTML = msg;
                form.reset();
            });
        });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('sailor_contact_form', 'sailor_contact_form_shortcode');

// Handle AJAX send mail
function sailor_send_contact() {
    $to = get_option('admin_email');
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $headers = [ 'Reply-To: ' . $email ];
    $body = "From: $name\nEmail: $email\n\n$message";
    if (wp_mail($to, $subject, $body, $headers)) {
        echo '<span style="color:green">Message sent successfully!</span>';
    } else {
        echo '<span style="color:red">Failed to send message.</span>';
    }
    wp_die();
}
add_action('wp_ajax_sailor_send_contact', 'sailor_handle_contact_message', 5);
add_action('wp_ajax_nopriv_sailor_send_contact', 'sailor_handle_contact_message', 5);
function sailor_handle_contact_message() {
    $ok = false;
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        // Lưu vào CPT
        $post_id = wp_insert_post(array(
            'post_type' => 'contact_message',
            'post_title' => sanitize_text_field($_POST['subject']),
            'post_content' => sanitize_textarea_field($_POST['message']),
            'post_status' => 'publish',
        ));
        if ($post_id) {
            update_post_meta($post_id, 'contact_name', sanitize_text_field($_POST['name']));
            update_post_meta($post_id, 'contact_email', sanitize_email($_POST['email']));
            wp_set_object_terms($post_id, 'Bình thường', 'message_status', false);
            $ok = true;
        }
        // Gửi mail
        $to = get_option('admin_email');
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        $headers = [ 'Reply-To: ' . $email ];
        $body = "From: $name\nEmail: $email\n\n$message";
        if (wp_mail($to, $subject, $body, $headers)) {
            $ok = true;
        }
    }
    if ($ok) {
        echo '<span style="color:green">Message sent successfully!</span>';
    } else {
        echo '<span style="color:red">Failed to send message.</span>';
    }
    wp_die();
}

// Đăng ký Custom Post Type cho tin nhắn liên hệ
function sailor_register_contact_message_cpt() {
    $labels = array(
        'name' => 'Contact Messages',
        'singular_name' => 'Contact Message',
        'add_new' => 'Thêm mới',
        'add_new_item' => 'Thêm tin nhắn',
        'edit_item' => 'Sửa tin nhắn',
        'new_item' => 'Tin nhắn mới',
        'view_item' => 'Xem tin nhắn',
        'search_items' => 'Tìm tin nhắn',
        'not_found' => 'Không tìm thấy',
        'not_found_in_trash' => 'Không tìm thấy trong thùng rác',
        'menu_name' => 'Contact Messages',
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor'),
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-email',
    );
    register_post_type('contact_message', $args);
}
add_action('init', 'sailor_register_contact_message_cpt');

// Thêm cột phân loại (trạng thái) vào danh sách contact_message
add_filter('manage_contact_message_posts_columns', function($columns) {
    $columns['message_status'] = 'Trạng thái';
    return $columns;
});
// Sửa lại chỉ hiển thị dropdown chọn trạng thái, bỏ text trạng thái để các dòng đều nhau
add_action('manage_contact_message_posts_custom_column', function($column, $post_id) {
    if ($column === 'message_status') {
        $all_terms = get_terms(['taxonomy'=>'message_status', 'hide_empty'=>false]);
        $current = wp_get_post_terms($post_id, 'message_status', ['fields'=>'ids']);
        echo '<form method="post" style="margin:0;">';
        echo '<input type="hidden" name="quick_update_id" value="' . $post_id . '">';
        echo '<select name="quick_update_status">';
        foreach($all_terms as $term) {
            $selected = (!empty($current) && $current[0] == $term->term_id) ? 'selected' : '';
            echo '<option value="' . esc_attr($term->term_id) . '" ' . $selected . '>' . esc_html($term->name) . '</option>';
        }
        echo '</select> <button type="submit">Cập nhật</button>';
        echo wp_nonce_field('quick_update_status_'.$post_id, '_quick_update_nonce', true, false);
        echo '</form>';
    }
}, 10, 2);

// Xử lý cập nhật trạng thái nhanh từ danh sách
add_action('admin_init', function() {
    if (isset($_POST['quick_update_id'], $_POST['quick_update_status'], $_POST['_quick_update_nonce'])) {
        $post_id = intval($_POST['quick_update_id']);
        if (current_user_can('edit_post', $post_id) && wp_verify_nonce($_POST['_quick_update_nonce'], 'quick_update_status_'.$post_id)) {
            wp_set_post_terms($post_id, [intval($_POST['quick_update_status'])], 'message_status');
        }
    }
});

// Thêm taxonomy để phân loại tin nhắn
function sailor_register_message_status_taxonomy() {
    $labels = array(
        'name' => 'Message Status',
        'singular_name' => 'Message Status',
        'search_items' => 'Tìm trạng thái',
        'all_items' => 'Tất cả trạng thái',
        'edit_item' => 'Sửa trạng thái',
        'update_item' => 'Cập nhật trạng thái',
        'add_new_item' => 'Thêm trạng thái mới',
        'menu_name' => 'Trạng thái',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
    );
    register_taxonomy('message_status', 'contact_message', $args);
}
add_action('init', 'sailor_register_message_status_taxonomy');

// Ẩn nút "Add New" trong admin cho contact_message
add_action('admin_menu', function() {
    global $submenu;
    if (isset($submenu['edit.php?post_type=contact_message'])) {
        foreach ($submenu['edit.php?post_type=contact_message'] as $k => $item) {
            if (strpos($item[2], 'post-new.php') !== false) {
                unset($submenu['edit.php?post_type=contact_message'][$k]);
            }
        }
    }
});

// Ẩn nút "Add New" trên màn hình danh sách contact_message
add_action('admin_head', function() {
    $screen = get_current_screen();
    if ($screen && $screen->post_type === 'contact_message') {
        echo '<style>.page-title-action { display: none !important; }</style>';
    }
});

// Hiển thị meta trong admin
add_action('add_meta_boxes', function() {
    add_meta_box('contact_message_info', 'Thông tin người gửi', function($post) {
        $name = get_post_meta($post->ID, 'contact_name', true);
        $email = get_post_meta($post->ID, 'contact_email', true);
        echo '<p><strong>Tên:</strong> ' . esc_html($name) . '</p>';
        echo '<p><strong>Email:</strong> ' . esc_html($email) . '</p>';
    }, 'contact_message', 'side');
});

// Thêm export CSV
add_action('admin_menu', function() {
    add_submenu_page('edit.php?post_type=contact_message', 'Export CSV', 'Export CSV', 'manage_options', 'export-contact-csv', 'sailor_export_contact_csv_page');
});
function sailor_export_contact_csv_page() {
    if (isset($_POST['sailor_export_csv'])) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=contact-messages.csv');
        $out = fopen('php://output', 'w');
        fputcsv($out, ['Tên', 'Email', 'Tiêu đề', 'Nội dung', 'Trạng thái']);
        $args = array('post_type' => 'contact_message', 'posts_per_page' => -1);
        $messages = get_posts($args);
        foreach ($messages as $msg) {
            $name = get_post_meta($msg->ID, 'contact_name', true);
            $email = get_post_meta($msg->ID, 'contact_email', true);
            $status = wp_get_post_terms($msg->ID, 'message_status', ['fields'=>'names']);
            fputcsv($out, [
                $name,
                $email,
                $msg->post_title,
                $msg->post_content,
                isset($status[0]) ? $status[0] : ''
            ]);
        }
        fclose($out);
        exit;
    }
    echo '<div class="wrap"><h1>Export Contact Messages</h1>';
    echo '<form method="post"><button type="submit" name="sailor_export_csv" class="button button-primary">Export CSV</button></form></div>';
}
