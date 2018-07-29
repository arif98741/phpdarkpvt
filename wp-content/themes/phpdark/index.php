<?php get_header(); ?>
	
	<?php 
	//showcase
	get_template_part('homepage/showcase');
	?>
	
	
	<section id="boxes">
		<div class="container">
			<div class="box">
				<i class="fa fa-pencil"></i>
				<h1>BASIC</h1>
				<p>PHP Basic section deals with php introduction, syntax, variable, string, operators, data type,switch case, loop and other prior topics</p>
				<a href="http://phpdark.com/php/2017/08/08/introduction-to-php-programming/" class="readmore">READ MORE</a>
			</div>
			<div class="box">
				<i class="fa fa-book"></i>
				<h1>ADVANCED</h1>
				<p>PHP Advanced is a combination of several topics such as array, functions, validation data,date time, database connection etc.</p>
				<a href="http://phpdark.com/php/2017/09/27/php-array-declaration-and-defination/" class="readmore">READ MORE</a>
			</div>
			<div class="box">
				<i class="fa fa-wrench"></i>
			
				<h1>OOP</h1>
				<p>Object Oriented Programming is the prior step for starting php project. This OOP section covers class, object, interface and so on</p>
				<a href="http://phpdark.com/category/php/php_oop/" class="readmore">READ MORE</a>
			</div>
			<div class="box">
				<i class="fa fa-group"></i>
				<h1>PROJECT</h1>
				<p>Project is name of making web app for using personally and commercially. You will get clear concepts of making projects here</p>
				<a href="http://phpdark.com/project" class="readmore">READ MORE</a>
			</div>
			
			
		</div>
		
	</section>
	<section id="boxes">
		<div class="container">
			<div class="box">
				<i class="fa fa-html5"></i>
				<h1>HTML5</h1>
				<p>HTML5 is a markup language to show data in a web page. This can be text, image, video etc</p>
				<a href="#" class="readmore">READ MORE</a>
			</div>
			<div class="box">
				<i class="fa fa-list-alt"></i>
				<h1>Jquery</h1>
				<p>Jquery is rich library of JavaScript that is used in browser as client side programming language</p>
				<a href="#" class="readmore">READ MORE</a>
			</div>
			<div class="box">
				<i class="fa fa-refresh"></i>
				<h1>AJAX</h1>
				<p>AJax is the most popular way of interacting(send or recieve data) with server without loding full page</p>
				<a href="#" class="readmore">READ MORE</a>
			</div>
			
			
			<div class="box">
				<i class="fa fa-search"></i>
				<h1>MySQL</h1>
				<p>MySQL is a relational database management system(RDBMS) for dealing with multiple types of data</p>
				<a href="http://phpdark.com/database/mysql/2017/12/05/what-is-database-and-its-usage/" class="readmore">READ MORE</a>
			</div>
			
			
		</div>
		
	</section>
	
	<?php  
	get_template_part('homepage/search'); //search
	get_template_part('homepage/recent'); //recent
	?>
	
	
	
	<?php  get_footer();?>