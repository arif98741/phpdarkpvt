<footer>
		<div class="container">
			<div class="footer_part">
				<h2>Social Network</h2>
				<div class="social_network">
					<a href="https://www.facebook.com/darkphlearning" target="_blank"><i class="fa fa-facebook" title="Like Us On Facebook"></i></a>
					<a href="https://instagram.com/arif98741"  target="_blank"><i class="fa fa-instagram" title="Follow us on Instagram"></i></a>
					
					<a href="https://twitter.com/arif98741" target="_blank"><i class="fa fa-twitter" title="Follow Us with Twitter"></i></a>
					
				</div>
			</div>
			<div class="footer_part">
				<h2>Contact Us</h2>
				<address>
					Ariful Islam<br/>
					arif98741@gmail.com<br/>
					<a href="https://facebook.com/arifulislammmc007" target="_blank">Facebook &nbsp;<i class="fa fa-external-link"></i></a>
				</address>
			</div>
			<div class="footer_part">
				<div class="important_pages">
					<h2>Important Pages</h2>
					<ul>
					    <li><a href="<?php echo get_home_url(); ?>/contact/">Contact Us</a></li>
						<li><a href="<?php echo get_home_url(); ?>/privacy-policy/">Privacy Policy</a></li>
						<li><a href="<?php echo get_home_url(); ?>/faq/">FAQ</a></li>
						<li><a href="<?php echo get_home_url(); ?>/about-us">About Us</a></li>
						<li><a href="<?php echo get_home_url(); ?>/blog">Read Blog</a></li>
						<li><a href="<?php echo get_home_url(); ?>">Sitemap</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="stop" class="scrollTop">
			<span><a href title="Click to go to top"><i class="fa fa-arrow-up"></i></a></span>
		</div>
		<div class="container">
			<div class="copyright">
				<p>&copy; Copyright - 2017, PHP Dark.Com</p>
				<a href="https://github.com/arif98741/phpdark" target="_blank" title="PHPDark On GitHub"><i class="fa fa-github"></i></a>
				<a href="https://gitlab.com/arif98741/phpdark" target="_blank" title="PHPDark On GitLab"><i class="fa fa-gitlab"></i></a>
			</div>
		</div>
		 <?php wp_footer(); ?>
		
	</footer>
	
	
	
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    	 <!--google anaylytics-->
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106256366-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());
    
      gtag('config', 'UA-106256366-1');
    </script>
    <?php if(is_single()): ?>
	 <script id="dsq-count-scr" src="//phpdark.disqus.com/count.js" async></script>
	 <?php endif; ?>
	 
</body>
</html>