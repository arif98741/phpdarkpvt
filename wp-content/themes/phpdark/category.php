
	<?php get_header(); ?>
	<?php $x = get_the_category(get_the_ID()); ?>
	<section id="searchpage">
		<div class="container">
			<div class="search_title">
				<h1>Category: <span style="font-weight: 700;"><?php echo $x[1]->name;?></span></h1>
			</div>
			<div class="search_content">
				 <?php while (have_posts()): the_post(); ?>
					<div class="search_body">
						<h2><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small>Category: <i class="fa fa-tags"></i>&nbsp;PHP,Basic, OOP</small>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique aut libero nobis non deleniti modi atque. Ut autem, vitae est at minima cumque necessitatibus quia quos nobis sit. Quia quis quaerat fugiat praesentium <a href="<?php the_permalink(); ?>" style="color:#fff !important;" class="btn btn-primary">READMORE</a>
							
						</article>
					</div>
				<?php endwhile; ?>
				<hr/>

				
				<div class="pagination">
					<a href="#">Back</a>
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a href="#">7</a>
					<a href="#">8</a>
					<a href="#">9</a>
					<a href="#">Next</a>
				</div>
				


			</div>
		</div>
	</section>
	
	<?php  get_footer();?>