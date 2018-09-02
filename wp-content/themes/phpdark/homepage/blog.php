<section id="blog">
		<div class="container-fluid">
			<div class="row">

				<?php
				wp_reset_query();
                        $args = array(
                            'category_name' => 'blog',
                            'posts_per_page' => 4,
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {


                                $query->the_post();
                                ?>
                                <div class="col-md-6">
									<div class="blog-data1">
										<div class="post">
											<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?> <?php echo "- ".get_home_url(); ?>" class="img-thumbnail">
										
											<div class="post-s">
												<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
												
											</div>
										</div>
											
										
										
									</div>

								</div>
                         <?php   }} else { ?>
                            <p>No Post Found </p>
                        <?php } wp_reset_query(); ?>
			</div>

		</div>
	</section>	

	

