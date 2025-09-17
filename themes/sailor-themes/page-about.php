<?php
/* Template Name: About */
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- About Section -->
  <section id="about-2" class="about-2 section">
    <div class="container" data-aos="fade-up">
      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-5">
          <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-portrait.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-7">
          <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>
          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li><a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">Saepe fuga</a></li>
            <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">Voluptates</a></li>
            <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">Corrupti</a></li>
          </ul>
          <!-- Tab Content -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="about-2-tab1">
              <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur...</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
              </div>
              <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam...</p>
            </div>
            <div class="tab-pane fade" id="about-2-tab2">
              <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur...</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
              </div>
              <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam...</p>
            </div>
            <div class="tab-pane fade" id="about-2-tab3">
              <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur...</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
              </div>
              <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section id="stats" class="stats section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workers</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team" class="team section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
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
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
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
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
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
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
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

  <!-- Skills Section -->
  <section id="skills" class="skills section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Skills</h2>
      <p>Check Our Skills<br></p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row skills-content skills-animation">
        <div class="col-lg-6">
          <div class="progress">
            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="progress">
            <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>