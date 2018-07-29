<?php get_header(); ?>
<?php
    
    $x = get_the_category(get_the_ID());

 ?>
	
	<section id="singlepage">
		<div class="container">

			<div class="content">

				<div class="sidebar">
                    <br/>
					<h2><?php echo $x[1]->name;?></h2>
					<ul>
                        <?php
                        $args = array(
                            'category_name' => $x[1]->slug,
                            'order' => 'ASC',
                            'orderby' => 'date'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <p id="phpbasic<?php the_id(); ?>" title="Click to read <?php the_title(); ?>"><i class="fa fa-arrow-circle-right" title="Click Here To Read More about <?php the_title(); ?>"></i>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></p>
                                <?php
                            }

                        } else {
                            ?>
                            <p>No Post Found </p>
                        <?php } wp_reset_query();
                        ?>

					</ul>
				</div>
				<div class="page_content">

					 <?php

		                while (have_posts()): the_post();
		                    ?>
                            <h1 style="text-center"><?php the_title(); ?></h1></>
                            <!--<p>
                                <strong>Category: </strong>
                                <a href="#" class="categories">PHP</a> |
                                <a href="#"  class="categories">Ajax</a> |
                                <a href="#"  class="categories">Object Oriented</a>
                            </p>-->

                            <?php  the_content(); ?>



                         <?php endwhile; ?>
				</div>
				<!--<div class="tags">
					
					<a href="#"><i class="fa fa-tags"></i>&nbsp;PHP</a>
					<a href="#"><i class="fa fa-tags"></i>&nbsp;MYSqli</a>
					<a href="#"><i class="fa fa-tags"></i>&nbsp;PDO</a>
					<a href="#"><i class="fa fa-tags"></i>&nbsp;Connection</a>	
					<a href="#"><i class="fa fa-tags"></i>&nbsp;ERROR</a>	
				</div>	-->
				
				<div class="page_content">
				    <h3>Share This on Social Media</h3>
				    <div class="sharethis-inline-share-buttons"></div>
				</div>
				
				<div class="page_content">
					<?php if(is_single()): ?>
                    <!--comment box facebook-->
                    <div id="disqus_thread"></div>
                    <script>

                       
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://phpdark.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>