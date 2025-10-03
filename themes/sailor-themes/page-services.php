<?php
/* Template Name: Services */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
  <h1 class="mb-2 mb-lg-0"><?php echo __('Services', 'sailor-theme'); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container">
      <div class="row gy-4">

        <!-- Service Item 1 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-briefcase icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Lorem Ipsum', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

        <!-- Service Item 2 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-card-checklist icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Dolor Sitema', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

        <!-- Service Item 3 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Sed ut perspiciatis', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

        <!-- Service Item 4 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-binoculars icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Magni Dolores', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

        <!-- Service Item 5 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-brightness-high icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Nemo Enim', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

        <!-- Service Item 6 -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"><?php echo __('Eiusmod Tempor', 'sailor-theme'); ?></a></h4>
              <p class="description"><?php echo __('Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', 'sailor-theme'); ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /Services Section -->

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container section-title" data-aos="fade-up">
  <h2><?php echo __('Features', 'sailor-theme'); ?></h2>
  <p><?php echo __('Check Our Features', 'sailor-theme'); ?><br></p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#features-tab-1"><?php echo __('Modi sit est', 'sailor-theme'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#features-tab-2"><?php echo __('Unde praesentium sed', 'sailor-theme'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#features-tab-3"><?php echo __('Pariatur explicabo vel', 'sailor-theme'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#features-tab-4"><?php echo __('Nostrum qui quasi', 'sailor-theme'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#features-tab-5"><?php echo __('Iusto ut expedita aut', 'sailor-theme'); ?></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="features-tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3><?php echo __('Architecto ut aperiam autem id', 'sailor-theme'); ?></h3>
                  <p class="fst-italic"><?php echo __('Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka', 'sailor-theme'); ?></p>
                  <p><?php echo __('Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero', 'sailor-theme'); ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="features-tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3><?php echo __('Et blanditiis nemo veritatis excepturi', 'sailor-theme'); ?></h3>
                  <p class="fst-italic"><?php echo __('Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka', 'sailor-theme'); ?></p>
                  <p><?php echo __('Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal', 'sailor-theme'); ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="features-tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3><?php echo __('Impedit facilis occaecati odio neque aperiam sit', 'sailor-theme'); ?></h3>
                  <p class="fst-italic"><?php echo __('Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut', 'sailor-theme'); ?></p>
                  <p><?php echo __('Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae', 'sailor-theme'); ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="features-tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3><?php echo __('Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore', 'sailor-theme'); ?></h3>
                  <p class="fst-italic"><?php echo __('Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus', 'sailor-theme'); ?></p>
                  <p><?php echo __('Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore', 'sailor-theme'); ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs/tab-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="features-tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3><?php echo __('Est eveniet ipsam sindera pad rone matrelat sando reda', 'sailor-theme'); ?></h3>
                  <p class="fst-italic"><?php echo __('Omnis blanditiis saepe eos autem qui sunt debitis porro quia.', 'sailor-theme'); ?></p>
                  <p><?php echo __('Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel', 'sailor-theme'); ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs/tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Features Section -->

</main>

<?php get_footer(); ?>