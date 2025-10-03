<?php
/* Template Name: Portfolio */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Portfolio', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">
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
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <?php
          $query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1
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
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            <?php endif; ?>
            <div class="portfolio-info">
              <h4><?php the_title(); ?></h4>
              <p><?php echo get_the_excerpt(); ?></p>
                <?php $link = get_post_meta(get_the_ID(), '_portfolio_link', true); ?>
              <?php if ($link): ?>
                <p><a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary"><?php echo __('View Product', 'sailor-theme'); ?></a></p>
              <?php endif; ?>
              <a href="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          else:
          ?>
          <p><?php echo __('No Portfolio found.', 'sailor-theme'); ?></p>
          <?php endif; ?>
        </div><!-- End Portfolio Container -->
      </div>
    </div>
  </section><!-- /Portfolio Section -->

</main>

<?php get_footer(); ?>