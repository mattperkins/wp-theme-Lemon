<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- include functions.php == title & styles meta -->
 <?php
   wp_head();
 ?>
</head>
<body>

<!-- bootstrap main container -->
 <div class="container">


<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#"><?php bloginfo('title'); ?></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
  
      <a class="nav-item nav-link" href="<?php echo site_url('/') ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a>
      <a class="nav-item nav-link" href="<?php echo site_url('/terms-and-conditions') ?>">T&Cs</a>
    
      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
  
    </div>
  </div>
</nav>


