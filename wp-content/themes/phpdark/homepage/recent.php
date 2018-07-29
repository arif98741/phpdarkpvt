<section id="recent">
		<div class="container">
			<div class="left">
				<h2>Recent Posts</h2>
				<p>We always try to update our website as soon as possible with new posts and updates. All our updates are listed here. From here its possible to see the last five updates easily. To know something new, keeps eye open</p>
				<ul>

					<?php
		                $args = array(
		                    'posts_per_page' => '5',
		                    'orderby' => 'date',
		                    'order' => 'DESC'
		                );
		                $query = new WP_Query($args);
		                if ($query->have_posts()) {
		                    while ($query->have_posts()) {
		                        $query->the_post();
		                        ?>
		                        <li><i class="fa fa-newspaper-o" title="Click To Expand"></i>&nbsp;<a href="<?php the_permalink(); ?>" class="current"><?php the_title(); ?></a></li>
		                       <?php
		                    }
		                }
	                ?>


				</ul>
			</div>
			<div class="right">
				<h2>Popular Posts</h2>
				<p>We always try to give priority to our user's interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>
				<ul>
					<?php
		                $args = array(
		                    'posts_per_page' => '5',
		                    'orderby' => 'rand',
		                    'order' => 'DESC'
		                );
		                $query = new WP_Query($args);
		                if ($query->have_posts()) {
		                    while ($query->have_posts()) {
		                        $query->the_post();
		                        ?>
		                        <li><i class="fa fa-newspaper-o" title="Click To Expand"></i>&nbsp;<a href="<?php the_permalink(); ?>" class="current"><?php the_title(); ?></a></li>
		                       <?php
		                    }
		                }
	                ?>

				</ul>
				
			</div>
		</div>
	</section>