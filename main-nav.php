<nav class="nav__full animate__faster animate__animated">
  <span class="nav__full_close js-nav-close pointer text-white font-weight-bolder display-4 position-absolute">&times;</span>
  <div class="d-flex h-100 text-center justify-content-center align-items-center ">
    <?php
    $args = array(
      'add_li_class'  => 'li_full_nav',
      'menu_class' => '',
     
    );
    wp_nav_menu($args);
    ?>
    
   
  </div>
</nav>
<div class="nav__button js-nav-open pointer"><img src="<?php echo get_bloginfo('template_url') ?>/svg/menu-blue.svg" class=" position-absolute pointer menu-btn-blue d-none d-lg-block"></div>
<nav class="nav__mobile nav d-lg-none w-100 bg-blue fixed-top">
  <div class="container">
    <div class="d-flex w-100 h-100 align-items-center justify-content-between">
      <div class="nav__button  js-nav-open pointer"><img src="<?php echo get_bloginfo('template_url') ?>/svg/menu.svg" style="height:16px" alt="menu"></div>
      <div class="nav__title ">دکتر پویا باقری</div>
    </div>
  </div>
</nav>

