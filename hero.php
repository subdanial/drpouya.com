<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>


<?php get_template_part( 'main-nav' ); ?>


<div class="h-100 w-100 pt-5 pt-lg-0">
  <div class="container-fluid h-100 ">
    <div class="row h-100">
      <div class="col-12  col-lg-6 ">
        <div class="d-flex h-100 d-flex justify-content-center align-items-center">
          <div class="hero mb-5">
            <div class="logo"><img class="logo_image" src="<?php echo get_bloginfo('template_url') ?>/svg/logo.svg" alt="logo"></div>
            <p class="text-blue pt-0 mt-n4 mb-4 font-weight-bold text-center">
              آموزش دندان پزشکی<br>
              ایمپلنت و جراحی
            </p>
            <div class="w-100 mx-auto">
              <div class="d-flex justify-content-center">
                <a href="/معرفی-دکتر-پویا-باقری/"class="btn text-blue btn-outline-blue mx-1">معرفی دکتر باقری</a>
                <a href="/آموزش/" class="btn btn-blue pt-2 mx-1">مشاهده آموزش ها</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none p-0 d-lg-flex col-md-6">
        <div class="background"></div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>