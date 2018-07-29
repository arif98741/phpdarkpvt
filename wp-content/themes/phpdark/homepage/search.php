<section id="search">
		
		<div class="container">
			<h1>Search On Our Site</h1>
			

			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Search By Keyword"/>
		   			<input type="submit" class="button_1" value="Search" />
			</form>
		
		</div>
	</section>
	