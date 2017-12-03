<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php Loader::element('header_required'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/app/application.css" />
</head>
<body>
  <div class="page">
    <?php 
      $this->inc('includes/header.php');
      $this->inc('includes/banner.php');
    ?>