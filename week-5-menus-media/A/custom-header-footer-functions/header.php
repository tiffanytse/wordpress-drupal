<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <meta name="handheldfriendly" content="true">
  <meta name="mobileoptimized" content="240">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title(); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

  <header role="banner">
    <h1 id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php sd(); ?>/images/your-logo-here.png" alt="<?php _e("Your Company Name"); ?>"></a></h1>
    <nav role="navigation">
      <!-- Add Custom Navigation Here -->
    </nav>
  </header>

  <main class="content">