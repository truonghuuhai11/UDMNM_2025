<?php
/* Template Name: Pricing */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Pricing', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section">

    <div class="container">

      <div class="row gy-3">

        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3><?php echo __('Free', 'sailor-theme'); ?></h3>
            <h4><sup>$</sup>0<span> / <?php echo __('month', 'sailor-theme'); ?></span></h4>
            <ul>
              <li><?php echo __('Aida dere', 'sailor-theme'); ?></li>
              <li><?php echo __('Nec feugiat nisl', 'sailor-theme'); ?></li>
              <li><?php echo __('Nulla at volutpat dola', 'sailor-theme'); ?></li>
              <li class="na"><?php echo __('Pharetra massa', 'sailor-theme'); ?></li>
              <li class="na"><?php echo __('Massa ultricies mi', 'sailor-theme'); ?></li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy"><?php echo __('Buy Now', 'sailor-theme'); ?></a>
            </div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item featured">
            <h3><?php echo __('Business', 'sailor-theme'); ?></h3>
            <h4><sup>$</sup>19<span> / <?php echo __('month', 'sailor-theme'); ?></span></h4>
            <ul>
              <li><?php echo __('Aida dere', 'sailor-theme'); ?></li>
              <li><?php echo __('Nec feugiat nisl', 'sailor-theme'); ?></li>
              <li><?php echo __('Nulla at volutpat dola', 'sailor-theme'); ?></li>
              <li><?php echo __('Pharetra massa', 'sailor-theme'); ?></li>
              <li class="na"><?php echo __('Massa ultricies mi', 'sailor-theme'); ?></li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy"><?php echo __('Buy Now', 'sailor-theme'); ?></a>
            </div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="pricing-item">
            <h3><?php echo __('Developer', 'sailor-theme'); ?></h3>
            <h4><sup>$</sup>29<span> / <?php echo __('month', 'sailor-theme'); ?></span></h4>
            <ul>
              <li><?php echo __('Aida dere', 'sailor-theme'); ?></li>
              <li><?php echo __('Nec feugiat nisl', 'sailor-theme'); ?></li>
              <li><?php echo __('Nulla at volutpat dola', 'sailor-theme'); ?></li>
              <li><?php echo __('Pharetra massa', 'sailor-theme'); ?></li>
              <li><?php echo __('Massa ultricies mi', 'sailor-theme'); ?></li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy"><?php echo __('Buy Now', 'sailor-theme'); ?></a>
            </div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="pricing-item">
            <span class="advanced"><?php echo __('Advanced', 'sailor-theme'); ?></span>
            <h3><?php echo __('Ultimate', 'sailor-theme'); ?></h3>
            <h4><sup>$</sup>49<span> / <?php echo __('month', 'sailor-theme'); ?></span></h4>
            <ul>
              <li><?php echo __('Aida dere', 'sailor-theme'); ?></li>
              <li><?php echo __('Nec feugiat nisl', 'sailor-theme'); ?></li>
              <li><?php echo __('Nulla at volutpat dola', 'sailor-theme'); ?></li>
              <li><?php echo __('Pharetra massa', 'sailor-theme'); ?></li>
              <li><?php echo __('Massa ultricies mi', 'sailor-theme'); ?></li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy"><?php echo __('Buy Now', 'sailor-theme'); ?></a>
            </div>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

</main>

<?php get_footer(); ?>