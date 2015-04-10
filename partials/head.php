<?php
  require_once('partials/config.php');
  require_once('partials/Mobile_Detect.php');
  $detect = new Mobile_Detect;
  $device_type = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
?>
<!DOCTYPE html>
<!--[if lte IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gte IE 9 | !IE ]><!-->
<html class="no-js <?php echo $device_type ?>">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title><?php echo $site_title ?></title>
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

  <!-- Schema.org markup for Google+ -->
  <meta itemscope itemtype="http://schema.org/LocalBusiness">
  <meta itemprop="name" content="<?php echo $site_title ?>">
  <meta itemprop="description" content="<?php echo $description ?>">
  <meta itemprop="keywords" content="<?php echo $keywords ?>">
  <meta itemprop="image logo" content="<?php echo $meta_image ?>">
  <meta itemprop="email" content="<?php echo $email ?>">
  <meta itemprop="legalName" content="<?php echo $legalName ?>">
  <meta itemprop="url" content="<?php echo $url ?>">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?php echo $site_title ?>" />
  <meta property="og:type" content="business.business" />
  <meta property="og:url" content="<?php echo $url ?>" />
  <meta property="og:image" content="<?php echo $meta_image ?>" />
  <meta property="og:description" content="<?php echo $description ?>" />
  <meta property="og:keywords" content="<?php echo $keywords ?>" />
  <meta property="og:site_name" content="<?php echo $site_title ?>" />
  <meta property="business:contact_data:email" content="<?php echo $email ?>" />
  <meta property="business:contact_data:website" content="<?php echo $url ?>" />
  <meta property="fb:admins" content="<?php echo $facebook_id ?>" />

  <?php if(PRODUCTION): ?>
    <link rel="stylesheet" href="css/style.min.css" media="screen" />
  <?php else: ?>
    <link rel="stylesheet" href="css/style.css" media="screen" />
  <?php endif; ?>

  <!-- Generate favicons (http://realfavicongenerator.net) -->
  <?#php include 'partials/favicons.php' ?>

  <!--[if IE]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>