 <?php /* Template Name: Blog Page */ ?> 
<?php get_header(); ?>
 <section id="all-blog">
		<div class="container-fluid">
			<div class="content">
				<div class="page_content">
					<div class="row">
						
					 <?php

		                $args = array(
		                    'category_name' => 'blog',
		                    'orderby' => 'date',
		                    'order' => 'DESC'
		                );
		                $query = new WP_Query($args);
		                if ($query->have_posts()) {
		                    while ($query->have_posts()) {
		                        $query->the_post();
		                        ?>
		                    <div class="col-md-3">
			                    <div class="post">
			                    	<img src="<?php the_post_thumbnail_url(); ?>;" alt="" class="img-thumbnail">
			                    	<div class="post-s">
			                    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			                    	</div>
			                    </div>	
		                     
                           	 
                            </div>
		               <?php } } ?>
					</div>
                         
				</div>
				
				
				
			</div>
		</div>
	</section>
<?php get_footer(); ?>
