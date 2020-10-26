<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<main id="blog">
  
<?php get_template_part( 'blog-nav' ); ?>

  <div class="container">
    <h3 class="font-weight-bolder mb-3">آخرین آموزش ها</h3>
    <div class="row">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'paged'          => $paged,
      );
      query_posts($args);
      ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <a href="<?php the_permalink() ?>" class="text-link-none text-dark">
              <div class="card">
                <img class="card-img-top" alt="Card image cap" src="<?php the_post_thumbnail_url() ?>">
                <div class="card-body pt-2">
                  <p class="card-text">
                    <h4 class="font-weight-bolder"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="pagination">
      <?php
      the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __('قبلی', 'textdomain'),
        'next_text' => __('بعدی', 'textdomain'),
      ));
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>