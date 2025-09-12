<footer id="footer" class="footer dark-background">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Footer nội dung, giữ nguyên hoặc sửa sang động nếu cần -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center">
          <span class="sitename"><?php bloginfo('name'); ?></span>
        </a>
        <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <!-- Các cột footer khác giữ nguyên -->
      <!-- ... -->
    </div>
  </div>
  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename"><?php bloginfo('name'); ?></strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://github.com/truonghuuhai11">TRUONGHUUHAI</a> Distributed by <a href="https://github.com/truonghuuhai11/UDMNM_2025">SAILOR-Theme</a>
    </div>
  </div>
</footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<?php wp_footer(); ?>
</body>
</html>