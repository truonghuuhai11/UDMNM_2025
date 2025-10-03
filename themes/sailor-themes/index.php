<!-- <?php get_header(); ?>
<main class="main">
  <div class="container">
  <h1><?php echo __('Blog', 'sailor-theme'); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else: ?>
  <p><?php echo __('No posts found.', 'sailor-theme'); ?></p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?> -->