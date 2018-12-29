<?php 
/*
	Template Name: Blog
 */
?>
<?php get_header(); ?>
	<div class="body-container">
    <div>

			<article class="page-main-content">
				<h1>Announcements</h2>
				
					<?php // Display blog posts on any page @ https://m0n.co/l
				$temp = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query('posts_per_page=5' . '&paged=' . $paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="announcement">
					<h2 class="announcement-title"><a class="announcement-link" a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>

					<?php endwhile; ?>

					<?php if ($paged > 1) { ?>

					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						<hr>
						<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					</nav>
						</div>
				</div>
				<?php 
		} else { ?>
				<div class="announcement">
					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					</nav>
				</div>
				<?php 
		} ?>

				<?php wp_reset_postdata(); ?>

			</article>

<?php get_footer(); ?>