<?php
/* Template Name: Testimonials */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Testimonials', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('Saul Goodman', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Ceo & Founder', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('Sara Wilsson', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Designer', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('Jena Karlis', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Store Owner', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('Matt Brandon', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Freelancer', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('John Larson', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Entrepreneur', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
            <h3><?php echo __('Emily Harison', 'sailor-theme'); ?></h3>
            <h4><?php echo __('Store Owner', 'sailor-theme'); ?></h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?php echo __('Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.', 'sailor-theme'); ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>