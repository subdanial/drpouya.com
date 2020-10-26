<?php /* Template Name: About */ ?>
<?php get_header(); ?>


<?php get_template_part('main-nav'); ?>
<div class="h-100 w-100 pt-5 pt-lg-0">
  <div class="container-fluid h-100 ">
    <div class="row h-100">
      <div class="col-12  col-lg-8 ">
        <div class="d-flex h-100 d-flex justify-content-center align-items-center">
          <div class="hero mb-5">
            <div class="logo "><img class="logo_image d-block d-lg-none mx-auto   mb-2" src="<?php echo get_bloginfo('template_url') ?>/img/dr-round.png" alt="logo"></div>
            <p class="text-blue pt-0 display-6 mb-2 font-weight-bold text-center">
              دکتر پویا باقری
            </p>
            <div class="text-dark w-80 w-md-50 w-md-50 mx-auto pt-0  mb-4 text-center">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php echo the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="w-100 mx-auto">
              <div class="d-flex justify-content-center">
                <a href="/تماس-با-دکتر/" class="btn btn-outline-blue mx-1">تماس با دکتر باقری</a>
                <a href="/آموزش/" class="btn btn-blue mx-1">مشاهده آموزش ها</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none p-0 d-lg-flex col-lg-4">
        <div class="background background-dr"></div>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>