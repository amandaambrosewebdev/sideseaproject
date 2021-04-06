
<!DOCTYPE html>
<!--Using php to create dynamic page (language attributes, bloginfo etc)-->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="Amanda Ambrose">
   <!--Stylesheet ref from Foundations -->
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Amanda's Test Project</li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary">
      <div class="row column text-center">
        <h1>Test Project Blog</h1>
      </div>
    </div>