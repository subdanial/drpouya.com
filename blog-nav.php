<nav class="nav__full animate__faster animate__animated">
    <span class="nav__full_close js-nav-close pointer text-white font-weight-bolder display-4 position-absolute">&times;</span>
    <div class="d-flex h-100 text-center justify-content-center top-0 align-items-center ">
        <?php
        $args = array(
            'add_li_class'  => 'li_full_nav',
            'menu_class' => '',
            'theme_location' => 'full-menu', 
        );
        wp_nav_menu($args);
        ?>
    </div>
</nav>
<nav class="pt-3 d-block d-xl-none">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="/آموزش/">
                <div class="pointer"><img class="h25px  js-nav-open" src="<?php echo get_bloginfo('template_url') ?>/svg/bars-solid.svg"></div>
            </a>
            <div class="pointer"><img src="<?php echo get_bloginfo('template_url') ?>/img/typo-mini.png" alt="logo" class="h25px"></div>
        </div>
        <hr class="mt-2 pb-2">
</nav>
<nav class="pt-3 d-none d-xl-block">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a href="/آموزش/"><img src="<?php echo get_bloginfo('template_url') ?>/img/typo.png" alt="logo" width="200"></a>
            </div>
            <div>
                <a href="tel:+989121003321">
                    <div class="d-flex">
                        <span class="text-blue pr-2 pt-1 d-block font-weight-bold ">09121003321</span>
                        <img src="<?php echo get_bloginfo('template_url') ?>/svg/phone.svg" alt="phone" class="phone-icon">
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <div class="nav">
                <?php
                $args = array(
                    'add_li_class'  => '',
                    'menu_class' => 'nav',
                    'theme_location' => 'main-menu', 
                );
                wp_nav_menu($args);
                ?>
            </div>
            <div>
                <a href="/تماس-با-دکتر/" class="btn btn-outline-blue mx-1">تماس بادکتر</a>
                <a href="/اینستاگرام/" class="btn btn-blue mx-1">صفحه اینستاگرام <img style="height:20px" class="pl-2" src="<?php echo get_bloginfo('template_url') ?>/svg/instagram.svg"></a>
            </div>
        </div>
        <hr class="mt-2 pb-2">
    </div>
</nav>