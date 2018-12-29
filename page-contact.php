<?php get_header(); ?>

<div class="body-container">
  <div>
  
    <div class="page-main-content">
      <?php while (have_posts()) {
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="contact-form-container">
          <?php the_content(); ?>
        </div>
      <?php 
    }
    ?>
    </div>

<?php get_footer(); ?>