
<!doctype html>
<html lang="fa" dir="rtl">
<head>
<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
<?php wp_head(); ?>

<title><?php bloginfo('name');  ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/bootstrap-extension.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/app.css">
</head>
<body <?php body_class(); ?>>
