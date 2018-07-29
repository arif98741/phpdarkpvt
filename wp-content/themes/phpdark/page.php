
	<?php get_header(); ?>
	
	<section id="page">
		<div class="container">
			<?php while(have_posts()):  ?>
				<?php the_post(); ?>
					<div class="page_title">
						<h1><?php the_title(); ?></h1>
						<div  class="publish_date">
							<p><i>Published On: <?php the_time('F j, Y'); ?>,by <?php the_author(); ?></i></p>
						</div>
						<?php the_content(); ?>
					</div>
			<?php endwhile; ?>
		</div>
	</section>
	
	
		
	<?php  get_footer();?>
	