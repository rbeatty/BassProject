<?php require_once('partials/Mobile_Detect.php');
  $detect = new Mobile_Detect;
  $device_type = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer'); ?>

<!DOCTYPE html>
<html class="<?php echo $device_type ?>" lang="en">
<head>
  <title>BassProject</title>

  <link rel="stylesheet" href="css/style.css" />

  <!-- Add meta tags (https://github.com/WARPAINTMedia/meta-templates) -->
  <?php include 'partials/meta.php' ?>

  <!-- Generate favicons (http://realfavicongenerator.net) -->
  <?#php include 'partials/favicons.php' ?>
  
  <!--[if IE 8]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.4.1/ie8.js"></script>
  <![endif]-->

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rem/1.3.4/js/rem.min.js"></script>
  <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
