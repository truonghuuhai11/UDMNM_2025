<?php get_header(); ?>
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        <div class="carousel-container">
          <h2><?php echo __('Welcome to Sailor', 'sailor-theme'); ?><br></h2>
          <p><?php echo __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'sailor-theme'); ?></p>
          <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="btn-get-started"><?php echo __('Get Started', 'sailor-theme'); ?></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        <div class="carousel-container">
          <h2><?php echo __('At vero eos et accusamus', 'sailor-theme'); ?></h2>
          <p><?php echo __('Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.', 'sailor-theme'); ?></p>
          <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="btn-get-started"><?php echo __('Get Started', 'sailor-theme'); ?></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        <div class="carousel-container">
          <h2><?php echo __('Temporibus autem quibusdam', 'sailor-theme'); ?></h2>
          <p><?php echo __('Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.', 'sailor-theme'); ?></p>
          <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="btn-get-started"><?php echo __('Get Started', 'sailor-theme'); ?></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
      <ol class="carousel-indicators"></ol>
    </div>
  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
  <h2><?php echo __('About', 'sailor-theme'); ?></h2>
  <p><?php echo __('About Us', 'sailor-theme'); ?><br></p>
    </div>
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p>
            <?php echo __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'sailor-theme'); ?>
          </p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span><?php echo __('Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'sailor-theme'); ?></span></li>
            <li><i class="bi bi-check2-circle"></i> <span><?php echo __('Duis aute irure dolor in reprehenderit in voluptate velit.', 'sailor-theme'); ?></span></li>
            <li><i class="bi bi-check2-circle"></i> <span><?php echo __('Ullamco laboris nisi ut aliquip ex ea commodo', 'sailor-theme'); ?></span></li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p><?php echo __('Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sailor-theme'); ?> </p>
            <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="read-more"><span><?php echo __('Read More', 'sailor-theme'); ?></span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section><!-- /About Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section light-background">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div>
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div>
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div>
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div>
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- /Clients Section -->

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-briefcase icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Lorem Ipsum', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-card-checklist icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Dolor Sitema', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Sed ut perspiciatis', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-binoculars icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Magni Dolores', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-brightness-high icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Nemo Enim', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="stretched-link"><?php echo __('Eiusmod Tempor', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Services Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
  <h2><?php echo __('Portfolio', 'sailor-theme'); ?></h2>
  <p><?php echo __('Necessitatibus eius consequatur', 'sailor-theme'); ?></p>
    </div>
    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <?php
          // Lấy tất cả taxonomy cho filter
          $terms = get_terms(array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
          ));
          ?>
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active"><?php echo __('All', 'sailor-theme'); ?></li>
            <?php foreach($terms as $term): ?>
              <li data-filter=".filter-<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php
            $query = new WP_Query(array(
              'post_type' => 'portfolio',
              'posts_per_page' => 9 // Giới hạn 9 item cho trang chủ
            ));
            if($query->have_posts()):
              while($query->have_posts()): $query->the_post();
                $item_terms = get_the_terms(get_the_ID(), 'portfolio_category');
                $filter_class = '';
                if($item_terms && !is_wp_error($item_terms)) {
                  foreach($item_terms as $item_term) {
                    $filter_class .= ' filter-' . esc_attr($item_term->slug);
                  }
                }
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item<?php echo $filter_class; ?>">
              <div class="portfolio-wrap">
                <?php if(has_post_thumbnail()): ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                <?php endif; ?>
                <div class="portfolio-info">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo get_the_excerpt(); ?></p>
                    <?php $link = get_post_meta(get_the_ID(), '_portfolio_link', true); ?>
                    <?php if ($link): ?>
                      <p><a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary"><?php _e('View Product', 'sailor-theme'); ?></a></p>
                    <?php endif; ?>
                  <a href="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <?php
              endwhile;
              wp_reset_postdata();
            else:
            ?>
            <p><?php echo __('No Portfolio found.', 'sailor-theme'); ?></p>
            <?php endif; ?>
          </div>
      </div>
    </div>
  </section><!-- /Portfolio Section -->

</main>
<?php get_footer(); ?>
