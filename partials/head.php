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

  <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.3/ie8.js" ></script>
  <![endif]-->
</head>
<body>