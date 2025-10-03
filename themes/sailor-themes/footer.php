<footer id="footer" class="footer dark-background">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Footer nội dung, giữ nguyên hoặc sửa sang động nếu cần -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center">
          <span class="sitename"><?php bloginfo('name'); ?></span>
        </a>
        <div class="footer-contact pt-3">
          <p><?php echo __('A108 Adam Street', 'sailor-theme'); ?></p>
          <p><?php echo __('New York, NY 535022', 'sailor-theme'); ?></p>
          <p class="mt-3"><strong><?php echo __('Phone:', 'sailor-theme'); ?></strong> <span>+1 5589 55488 55</span></p>
          <p><strong><?php echo __('Email:', 'sailor-theme'); ?></strong> <span>info@example.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <!-- Các cột footer khác giữ nguyên -->
       <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo __('Useful Links', 'sailor-theme'); ?></h4>
          <ul>
            <li><a href="#"><?php echo __('Home', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('About us', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Services', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Terms of service', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Privacy policy', 'sailor-theme'); ?></a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo __('Our Services', 'sailor-theme'); ?></h4>
          <ul>
            <li><a href="#"><?php echo __('Web Design', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Web Development', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Product Management', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Marketing', 'sailor-theme'); ?></a></li>
            <li><a href="#"><?php echo __('Graphic Design', 'sailor-theme'); ?></a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4><?php echo __('Our Newsletter', 'sailor-theme'); ?></h4>
          <p><?php echo __('Subscribe to our newsletter and receive the latest news about our products and services!', 'sailor-theme'); ?></p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="<?php echo __('Subscribe', 'sailor-theme'); ?>"></div>
            <div class="loading"><?php echo __('Loading', 'sailor-theme'); ?></div>
            <div class="error-message"></div>
            <div class="sent-message"><?php echo __('Your subscription request has been sent. Thank you!', 'sailor-theme'); ?></div>
          </form>
        </div>
      <!-- ... -->
    </div>
  </div>
  <div class="container copyright text-center mt-4">
  <p>© <span><?php echo __('Copyright', 'sailor-theme'); ?></span> <strong class="px-1 sitename"><?php bloginfo('name'); ?></strong> <span><?php echo __('All Rights Reserved', 'sailor-theme'); ?></span></p>
    <div class="credits">
  <?php echo __('Designed by', 'sailor-theme'); ?> <a href="https://github.com/truonghuuhai11">TRUONGHUUHAI</a> <?php echo __('Distributed by', 'sailor-theme'); ?> <a href="https://github.com/truonghuuhai11/UDMNM_2025">SAILOR-Theme</a>
    </div>
  </div>
</footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<?php wp_footer(); ?>
</body>
</html>