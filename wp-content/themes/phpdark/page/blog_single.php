<section id="singlepage-blog">
		<div class="container-fluid">
			<div class="content">
				<div class="page_content">

					 <?php

		                while (have_posts()): the_post();
		                    ?>
                            <h1 style="text-center; margin-top: 3px;"><?php the_title(); ?></h1></>
                            <img src="<?php echo the_post_thumbnail_url(); ?>;" alt="" class="img-thumbnail">
                            <small style="font-style: italic;">Posted On: <?php the_time('D, d-m-Y, G:HA'); ?></small>
                            <?php  the_content(); ?>

                         <?php endwhile; ?>
				</div>
				
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
<?php exit(); ?>