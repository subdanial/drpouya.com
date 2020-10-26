<?php /* Template Name: Single */ ?>
<?php get_header(); ?>
<main id="single">
<?php get_template_part( 'blog-nav' ); ?>
  <div class="container">
    <div class="row">
		  <div class="col-12 p-lg-0 pl-lg-3 mb-5">
    <?php if(have_posts() ) :?>
    <?php while(have_posts() ) :?>
    <?php the_post(); ?>
                  <div class="pr-3 pt-3 pl-2">
                  </div>
                <?php the_content();?>
    <?php endwhile;?>
    <?php endif;?>
	</div>
    </div>
  </div>
</main>
<?php get_footer(); ?>