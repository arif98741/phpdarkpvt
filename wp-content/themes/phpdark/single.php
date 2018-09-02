<?php get_header(); ?>
<?php

    $x = get_the_category(get_the_ID());
    if (count($x) == 1) {

       $category_name = '';
        if($x[0]->slug == 'html5'){
            $category_name = $x[0]->slug;
        }else if($x[0]->slug == 'ajax'){
            $category_name = $x[0]->slug;
        }else if($x[0]->slug == 'blog'){
            $category_name = $x[0]->slug;


        }
    }else{

        $category_name = $x[1]->slug;
    }
    
    // echo "<pre>";
    // print_r($x);
    // echo "</pre>";

 ?>
    <?php if($category_name == 'blog'): ?>
         <?php get_template_part('page/blog_single'); ?>       
    <?php endif; ?>    
	
	<section id="singlepage">
		<div class="container">

			<div class="content">

				<div class="sidebar">
                    <br/>
					<h2>
                        <?php
                        if (count($x) == 1) {
                            echo $x[0]->name;
                        }elseif(count($x) == 2){
                            echo $x[1]->name;
                        }elseif(count($x) == 3){
                            echo $x[2]->name;
                        }elseif(count($x) == 4){
                            echo $x[3]->name;
                        }
                         
                        ?>
                            
                        </h2>
					<ul>
                        <?php
                        $args = array(
                            //'category_name' => $x[1]->slug,
                            'category_name' => $category_name,
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
                        <?php } wp_reset_query(); ?>

					</ul>
				</div>
				<div class="page_content">

					 <?php

		                while (have_posts()): the_post();
		                    ?>
                            <h1 style="text-center"><?php the_title(); ?></h1></>
                            
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