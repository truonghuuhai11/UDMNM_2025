<?php
/*
Template Name: Blog
*/
get_header();
?>
<main class="main">

  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Blog</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
          <div class="container">
            <div class="row gy-4">
              <?php
              $blog_query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 5]);
              if($blog_query->have_posts()):
                while($blog_query->have_posts()): $blog_query->the_post();
              ?>
              <div class="col-lg-12">
                <article>
                  <?php if(has_post_thumbnail()): ?>
                    <div class="post-img"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                  <?php endif; ?>
                  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?php the_author_posts_link(); ?></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="<?php the_time('c'); ?>"><?php the_time('M j, Y'); ?></time></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <?php comments_popup_link(__('No Comments', 'sailor-theme'), __('1 Comment', 'sailor-theme'), __('% Comments', 'sailor-theme')); ?></li>
                    </ul>
                  </div>
                  <div class="content"><?php the_excerpt(); ?></div>
                  <div class="read-more"><a href="<?php the_permalink(); ?>"><?php echo __('Read More', 'sailor-theme'); ?></a></div>
                </article>
              </div>
              <?php
                endwhile; wp_reset_postdata();
              endif;
              ?>
            </div><!-- End blog posts list -->
          </div>
        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
          <div class="container">
            <div class="d-flex justify-content-center">
              <?php
                echo paginate_links([
                  'prev_text' => '<i class="bi bi-chevron-left"></i>',
                  'next_text' => '<i class="bi bi-chevron-right"></i>'
                ]);
              ?>
            </div>
          </div>
        </section><!-- /Blog Pagination Section -->

      </div>

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          <!-- Search Widget -->
          <div class="search-widget widget-item">
            <h3 class="widget-title"><?php echo __('Search', 'sailor-theme'); ?></h3>
            <?php get_search_form(); ?>
          </div><!--/Search Widget -->

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">
            <h3 class="widget-title"><?php echo __('Categories', 'sailor-theme'); ?></h3>
            <ul class="mt-3">
              <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
          </div><!--/Categories Widget -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title"><?php echo __('Recent Posts', 'sailor-theme'); ?></h3>
            <?php
            $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
            foreach($recent_posts as $post): ?>
              <div class="post-item">
                <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', ['class'=>'flex-shrink-0']); ?>
                <div>
                  <h4><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo esc_html($post['post_title']); ?></a></h4>
                  <time datetime="<?php echo get_the_date('c', $post['ID']); ?>"><?php echo get_the_date('M j, Y', $post['ID']); ?></time>
                </div>
              </div>
            <?php endforeach; ?>
          </div><!--/Recent Posts Widget -->

          <!-- Tags Widget -->
          <div class="tags-widget widget-item">
            <h3 class="widget-title"><?php echo __('Tags', 'sailor-theme'); ?></h3>
            <ul>
              <?php wp_tag_cloud(['smallest' => 10, 'largest' => 15, 'unit' => 'px', 'format' => 'list']); ?>
            </ul>
          </div><!--/Tags Widget -->

        </div>

      </div>

    </div>
  </div>

</main>
<?php get_footer(); ?>