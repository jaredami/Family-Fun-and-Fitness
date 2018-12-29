<?php get_header(); ?>

<div class="body-container">
  <div>
<?php
while (have_posts()) {
  the_post(); ?>
    <h1 style="text-align: center"><?php the_title(); ?></h1>
    <div id="schedule-container">
      <?php the_content(); ?>
    </div>
  <?php 
}

get_footer();
?>