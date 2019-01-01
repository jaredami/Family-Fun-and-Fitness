<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun & Fitness</title>
    <script type="text/javascript" src="/script.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class() ?>>
    <header>

      <div class="top-bar">
        <span id="top-bar-text">Family Fun &amp; Fitness ~ Mo-Fr: 5am-10pm, St: 7am-9pm</span>
        <div class="tool-bar">
          <a class="tool-bar-link" href="#"><i class="fa fa-rss" aria-hidden="true"></i><p class="tool-bar-text">RSS</p></a>
          <a class="tool-bar-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><p class="tool-bar-text">twitter</p></a>
          <a class="tool-bar-link" href="https://www.facebook.com/FamilyFunFitness" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><p class="tool-bar-text">facebook</p></a>
          <a class="tool-bar-link" href="https://www.youtube.com/user/FamilyFunFitness" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i><p class="tool-bar-text">youtube</p></a>
        </div>
      </div>

      <div class="header">

        <h1 class="logo-text">
          <a id="logo-link" href="<?php echo site_url('/home') ?>">
            <span id="logo-f">F</span>
            <span id="logo-3">3</span>
          </a>
        </h1>

        <button class="nav-hamburger" role="button" aria-label="open menu">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <nav class="nav-container ">

          <ul class="nav-list nav-list-wide">
            <li><a class="nav-link" href="<?php echo site_url('/home') ?>">HOME</a></li>
            <li><a class="nav-link" href="<?php echo site_url('/announcements') ?>">ANNOUNCEMENTS</a></li>
            <li><a class="nav-link" href="<?php echo site_url('/membership') ?>">MEMBERSHIP</a></li>
            <div class="dropdown">
              <li><a class="nav-link" href="#">AMENITIES <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
              <ul class="dropdown-content">
                <li><a class="nav-link" href="<?php echo site_url('/child-care') ?>">Child Care</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/class-schedule') ?>">Class Schedule</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/courts') ?>">Courts</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/fitness-training') ?>">Fitness Training</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/game-ready') ?>">Game Ready</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/locker-rental') ?>">Locker Rental</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/personal-training') ?>">Personal Training</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/pool-area') ?>">Pool Area</a></li>
                <li><a class="nav-link" href="<?php echo site_url('/tanning') ?>">Tanning</a></li>
              </ul>
            </div>
            <li><a class="nav-link" href="<?php echo site_url('/facility-rental') ?>">FACILITY RENTAL</a></li>
            <li><a class="nav-link" href="<?php echo site_url('/contact') ?>">CONTACT</a></li>
          </ul>

          <ul class="nav-list nav-list-narrow hidden">
            <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/home') ?>">HOME</a></li>
            <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/announcements') ?>">ANNOUNCEMENTS</a></li>
            <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/membership') ?>">MEMBERSHIP</a></li>
            <div class="dropdown">
              <li><a class="nav-link nav-link-narrow" id="amenities-link-narrow" href="#">AMENITIES <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
              <ul class="dropdown-content-narrow">
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/child-care') ?>">Child Care</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/class-schedule') ?>">Class Schedule</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/courts') ?>">Courts</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/fitness-training') ?>">Fitness Training</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/game-ready') ?>">Game Ready</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/locker-rental') ?>">Locker Rental</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/personal-training') ?>">Personal Training</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/pool-area') ?>">Pool Area</a></li>
                  <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/tanning') ?>">Tanning</a></li>
                </ul>
            </div>
            <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/facility-rental') ?>">FACILITY RENTAL</a></li>
            <li><a class="nav-link nav-link-narrow" href="<?php echo site_url('/contact') ?>">CONTACT</a></li>
          </ul>

        </nav>
      </div>

      <div class="slideshow-container">
    
        <div class="mySlides fade currentSlide">
          <div class="numbertext"></div><img id="slideshow-img-1" class="slideshow-img"  src="<?php echo get_template_directory_uri(); ?>/images/f3img5.jpg"
            alt="cardio machines"><div class="slideshow-text"></div>
        </div>

        <div class="mySlides fade ">
          <div class="numbertext"></div><img id="slideshow-img-2" class="slideshow-img" src="<?php echo get_template_directory_uri(); ?>/images/f3img2.jpg"
            alt="boxer girl"><div class="slideshow-text"><span></span></div>
        </div>

        <div class="mySlides fade ">
          <div class="numbertext"></div><img id="slideshow-img-3" class="slideshow-img" src="<?php echo get_template_directory_uri(); ?>/images/f3img3sm.jpg"
            alt="deadlifter"><div class="slideshow-text"></div>
        </div><a class="prev">❮</a><a class="next">❯</a></div>
  
      </div>
      
    </header>
