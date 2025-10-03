<?php
/* Template Name: Team */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Team', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Team Section -->
  <section id="team" class="team section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4><?php echo __('Walter White', 'sailor-theme'); ?></h4>
              <span><?php echo __('Chief Executive Officer', 'sailor-theme'); ?></span>
              <p><?php echo __('Explicabo voluptatem mollitia et repellat qui dolorum quasi', 'sailor-theme'); ?></p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4><?php echo __('Sarah Jhonson', 'sailor-theme'); ?></h4>
              <span><?php echo __('Product Manager', 'sailor-theme'); ?></span>
              <p><?php echo __('Aut maiores voluptates amet et quis praesentium qui senda para', 'sailor-theme'); ?></p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4><?php echo __('William Anderson', 'sailor-theme'); ?></h4>
              <span><?php echo __('CTO', 'sailor-theme'); ?></span>
              <p><?php echo __('Quisquam facilis cum velit laborum corrupti fuga rerum quia', 'sailor-theme'); ?></p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4><?php echo __('Amanda Jepson', 'sailor-theme'); ?></h4>
              <span><?php echo __('Accountant', 'sailor-theme'); ?></span>
              <p><?php echo __('Dolorum tempora officiis odit laborum officiis et et accusamus', 'sailor-theme'); ?></p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>