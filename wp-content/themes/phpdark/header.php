<?php 
	$help = new Helper();
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines.">
    <meta name="author" content="PHPDark.Com">
    <meta name="keywords" content="PHP,Php Basic, Advanced PHP, PHP Tutorial,Learning PHP, Php Popular Website, OOP, PHP Array, Function, Login, Database, Web, Web Development, Database Management, Hacking, Security, Ajax, CSS, HTML, Jquery, Math Logic, Operation, Test, Obeject Oriented Programming"/>
    <meta name="google-site-verification" content="UI6C6Si4Y4ALIhMqsOmFRltWA8xsJhTyG3wdC1B70cM" />
    
    <!--favicon-->
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/queries.css">
    
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<?php if(is_single()): ?>
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5a88b2cbd57467001383cacb&product=sop' async='async'></script>
    <?php endif; ?>
   
	<?php wp_head(); ?>
	
</head>

<body>

	<header>
		<div class="container-fluid">
			<div id="branding">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
				<h1><a href="<?php echo get_home_url(); ?> " class="logo_title">PHPDark.Com</a></h1><br/>
				<!-- <span>Your Ultimate PHP Guide</span> -->
			</div>
			<nav>
				<ul>
					<li><a href="<?php echo get_home_url() ;?>/php/2017/08/08/introduction-to-php-programming/">PHP BASIC</a></li>
					<li><a href="<?php echo get_home_url(); ?>/php/2017/09/27/php-array-declaration-and-defination/">PHP ADVANCED</a></li>
					<li><a href="<?php echo get_home_url(); ?>/project">PROJECT</a></li>
					<li><a href="<?php echo get_home_url(); ?>/2018/09/02/ajax-introduction/">AJAX</a></li>
					<li><a href="<?php echo get_home_url(); ?>/blog">BlOG</a></li>
					<li><a href="<?php echo get_home_url(); ?>/about-us">ABOUT US</a></li>
				</ul>
			</nav>
			<div class="main_search">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<input type="text" name="s" value="<?php the_search_query(); ?>" />
		   			<input type="submit" value="Search"/>
				</form>
			</div>
			
		</div>
	</header>