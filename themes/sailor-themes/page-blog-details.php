<?php
/* Template Name: Blog Details */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Blog Details', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">

      <div class="col-lg-8">
        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
          <div class="container">
            <article class="article">

              <div class="post-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo __('Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia', 'sailor-theme'); ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo __('John Doe', 'sailor-theme'); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?php echo __('Jan 1, 2022', 'sailor-theme'); ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?php echo __('12 Comments', 'sailor-theme'); ?></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>
                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p>
                <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote>
                <p>
                  Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                  Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                  Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                </p>
                <h3><?php echo __('Et quae iure vel ut odit alias.', 'sailor-theme'); ?></h3>
                <p>
                  Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                  Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                  Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
                <h3><?php echo __('Ut repellat blanditiis est dolore sunt dolorum quae.', 'sailor-theme'); ?></h3>
                <p>
                  Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                  Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                </p>
                <p>
                  Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                </p>
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"><?php echo __('Business', 'sailor-theme'); ?></a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#"><?php echo __('Creative', 'sailor-theme'); ?></a></li>
                  <li><a href="#"><?php echo __('Tips', 'sailor-theme'); ?></a></li>
                  <li><a href="#"><?php echo __('Marketing', 'sailor-theme'); ?></a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article>
          </div>
        </section><!-- /Blog Details Section -->

        <!-- Blog Comments Section -->
        <section id="blog-comments" class="blog-comments section">
          <div class="container">
            <h4 class="comments-count"><?php echo __('8 Comments', 'sailor-theme'); ?></h4>
            <!-- Copy toàn bộ cấu trúc comment từ HTML, sửa đường dẫn ảnh sang WordPress -->
            <div id="comment-1" class="comment">
              <div class="d-flex">
                <div class="comment-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/comments-1.jpg" alt=""></div>
                <div>
                  <h5><a href=""><?php echo __('Georgia Reader', 'sailor-theme'); ?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> <?php echo __('Reply', 'sailor-theme'); ?></a></h5>
                  <time datetime="2020-01-01"><?php echo __('01 Jan,2022', 'sailor-theme'); ?></time>
                  <p>
                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                  </p>
                </div>
              </div>
            </div>
            <!-- ...Copy các comment khác, sửa đường dẫn ảnh như trên... -->
          </div>
        </section><!-- /Blog Comments Section -->

        <!-- Comment Form Section -->
        <section id="comment-form" class="comment-form section">
          <div class="container">
            <form action="">
              <h4><?php echo __('Post Comment', 'sailor-theme'); ?></h4>
              <p><?php echo __('Your email address will not be published. Required fields are marked * ', 'sailor-theme'); ?></p>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="<?php echo __('Your Name*', 'sailor-theme'); ?>">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="<?php echo __('Your Email*', 'sailor-theme'); ?>">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input name="website" type="text" class="form-control" placeholder="<?php echo __('Your Website', 'sailor-theme'); ?>">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="<?php echo __('Your Comment*', 'sailor-theme'); ?>"></textarea>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary"><?php echo __('Post Comment', 'sailor-theme'); ?></button>
              </div>
            </form>
          </div>
        </section><!-- /Comment Form Section -->
      </div>

      <div class="col-lg-4 sidebar">
        <div class="widgets-container">

          <!-- Search Widget -->
          <div class="search-widget widget-item">
            <h3 class="widget-title"><?php echo __('Search', 'sailor-theme'); ?></h3>
            <form action="">
              <input type="text">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
          </div><!--/Search Widget -->

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">
            <h3 class="widget-title"><?php echo __('Categories', 'sailor-theme'); ?></h3>
            <ul class="mt-3">
              <li><a href="#"><?php echo __('General', 'sailor-theme'); ?> <span>(25)</span></a></li>
              <li><a href="#"><?php echo __('Lifestyle', 'sailor-theme'); ?> <span>(12)</span></a></li>
              <li><a href="#"><?php echo __('Travel', 'sailor-theme'); ?> <span>(5)</span></a></li>
              <li><a href="#"><?php echo __('Design', 'sailor-theme'); ?> <span>(22)</span></a></li>
              <li><a href="#"><?php echo __('Creative', 'sailor-theme'); ?> <span>(8)</span></a></li>
              <li><a href="#"><?php echo __('Educaion', 'sailor-theme'); ?> <span>(14)</span></a></li>
            </ul>
          </div><!--/Categories Widget -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title"><?php echo __('Recent Posts', 'sailor-theme'); ?></h3>
            <div class="post-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="#"><?php echo __('Nihil blanditiis at in nihil autem', 'sailor-theme'); ?></a></h4>
                <time datetime="2020-01-01"><?php echo __('Jan 1, 2020', 'sailor-theme'); ?></time>
              </div>
            </div>
            <!-- ...Copy các post-item khác, sửa đường dẫn ảnh như trên... -->
          </div><!--/Recent Posts Widget -->

          <!-- Tags Widget -->
          <div class="tags-widget widget-item">
            <h3 class="widget-title"><?php echo __('Tags', 'sailor-theme'); ?></h3>
            <ul>
              <li><a href="#"><?php echo __('App', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('IT', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Business', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Mac', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Design', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Office', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Creative', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Studio', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Smart', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Tips', 'sailor-theme'); ?></a></li>
              <li><a href="#"><?php echo __('Marketing', 'sailor-theme'); ?></a></li>
            </ul>
          </div><!--/Tags Widget -->

        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>