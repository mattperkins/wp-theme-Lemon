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
<nav class="navbar navbar-expand-lg bg-light">
  
  <!-- Theme/Site Title and home link -->
  <a class="navbar-brand" href="<?php echo site_url() ?>"><?php bloginfo('title'); ?></a>
  
  <!-- Responsive dropdown nav @media 992px -->
  <button class="removeBlueOutline navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  
  <!-- default BS hamburger -->
  <!-- <span class="navbar-toggler-icon"></span> -->

  <!-- custom hamburger -->
  <div id="nav-mhweb-hamburger">

     <span></span>
     <span></span>
     <span></span>
     <span></span>
     <span></span>
     <span></span>

</div>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <!-- right align nav links -->
    <div class="navbar-nav ml-auto">
  
  <!-- nav links -->
      <a class="nav-item nav-link" href="<?php echo site_url('/') ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a>
      <a class="nav-item nav-link" href="<?php echo site_url('/terms-and-conditions') ?>">T&Cs</a>
    
      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
  
    </div>
  </div>
</nav>


