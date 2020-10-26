<?php /* Template Name: Instagram */ ?>
<?php get_header(); ?>
<main id="single">
  <?php get_template_part('blog-nav'); ?>
  <div class="container">
    <div class="row  w-80 mx-auto">
    <h4 class="pb-3 pl-4 ml-1">نمایی از صفحه ی اینستاگرام</h4>
      <div class="col-12 p-lg-0 pl-lg-3 mb-5">

        <div class="card ">
     
        <div class="card-body">
          <?php echo do_shortcode('[instagram-feed num=9 cols=3]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>