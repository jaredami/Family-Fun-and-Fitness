<?php
get_header();

while (have_posts()) {
  the_post(); ?>
  <div class="body-container">
    <div>
    
      <div class="page-main-content">
        <h1 style="text-align: center"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
<?php 
}

get_footer();
?>