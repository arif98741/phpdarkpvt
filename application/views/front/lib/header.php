<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/front/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/front/node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/style.css">
  <!--  <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/default.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/front/plugins/hightlight/styles/ocean.css">

  <?php if($title !=''): ?>
    <title><?php  echo $title;?> - PHPDark.com</title>

    <?php else: ?>
      <title>PHPDark.com - Your Ultimate PHP Guide</title>
    <?php endif; ?>



  </head>
  <body>
    <!-- navigation start -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">PHPDark <sup><small>beta</small></sup></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">-</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="index.html"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
          </li> -->
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">Tutorial </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li> -->
          <!--          <li class="nav-item">-->
            <!--            <a class="nav-link" href="#">Guideline</a>-->
            <!--          </li>-->
            <!--          <li class="nav-item">-->
              <!--            <a class="nav-link" href="#">Guideline</a>-->
              <!--          </li>-->
              <!--          <li class="nav-item">-->
                <!--            <a class="nav-link" href="login.html">Login</a>-->
                <!--          </li>-->
                <!--          <li class="nav-item">-->
                  <!--            <a class="nav-link" href="registration.html">Register</a>-->
                  <!--          </li>-->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PHP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url(); ?>post/view/basic-php/41">Basic PHP</a>
                      <a class="dropdown-item" href="<?php echo base_url();  ?>post/view/php-advanced/42">PHP Advanced</a>
                      <!--   <a class="dropdown-item" href="#">PHP Arrays</a> -->
                      <a class="dropdown-item" href="<?php echo base_url();  ?>post/view/oop-oriented-programming-introduction/47">PHP OOP</a>

                    </div>
                  </li>
                  
                </ul>
                <!--        <form class="form-inline search-form my-10 my-lg-0">-->
                  <!--          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                  <!--          <button class="btn btn-outline-success search-btn my-2 my-sm-0" type="submit">Search</button>-->
                  <!--        </form>-->
                  
                </div>
              </nav> 
              <!-- navigation end -->
              <!-- below nav start -->
              <section id="below-nav" style="" style="">
                <div class="navigation-item">
                  <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>&nbsp;Home</a>
                  <a href="<?php echo base_url();  ?>post/view/html-first-post/39">HTML</a>
                  <a href="<?php echo base_url();  ?>post/view/css-introduction-/48">CSS</a>
                  <a href="<?php echo base_url();  ?>post/view/javascript-introduction/49">Javascript</a>
                  <a href="<?php echo base_url();  ?>post/view/basic-php/41">PHP</a>
                  <a href="<?php echo base_url(); ?>post/view/codeigniter/40">Codeigniter</a>
                  <a href="<?php echo base_url(); ?>post/view/laravel/38">Laravel</a>
                  <!--        <a href="#">Yii</a>-->
                  <!--        <a href="#">Template</a>-->
                  <!--        <a href="#">Learning</a>-->
                  <!--        <a href="#">C</a>-->
                  <!--        <a href="#">C++</a>-->
                  <a href="<?php echo base_url(); ?>about-us">About Us</a>
                  <a href="<?php echo base_url(); ?>contact-us">Contact Us</a>
                  <a href="<?php echo base_url(); ?>blog">Blog</a>
                </div>
              </section>
              
    <!-- below nav end -->