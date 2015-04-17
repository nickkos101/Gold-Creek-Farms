<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '' ); ?></title>
  <meta name="viewport" content="width=device-width">
  <link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,400,700|Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body class="col-wrap">
  <header class="header">
   <div class="container">
    <div class="column half">
     <a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
   </div>
   <div class="column half talignright v-bot">
    <div class="top-nav">
      <ul>
        <li><a href="/my-account">My Account</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
      <a href="/shop" class="btn">Shop Online</a>
      <div class="subnav">
        <?php wp_nav_menu(array('theme_location' => 'Sub_Nav',)); ?>
      </div>
    </nav>
  </div>
</div>
</header>