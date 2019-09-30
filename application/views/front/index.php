<div class="col-md-7">
  <div class="right">
    <div class="block">
      <i class="fa fa-book"></i>
      <p>Learn</p>
    </div>
    <div class="block">
      <i class="fa fa-code"></i>
      <p>Code</p>
    </div>
    <div class="block"  style="display: block">
      <i class="fa fa-free-code-camp"></i>
      <p>Implement</p>
    </div>
    
    <h2 class="text-muted">PHP Language Introduction</h2><hr>
    <p style="margin-top: 10px;">PHP stands for Hypertext  Pre Processor which is used in web technology for making a web application. After first release in 1995 by Rasmus Lerdorf  PHP becomes popular among web developers around the globe.  This is more simple and easy web programming language in web technology. Nowadays, a lot of websites in all over the world are using PHP for making web apps. More updates, communities, and participation have made this language more efficient and user-friendly.

      PHP is a light language. And for this reason, it runs from server efficiently. Another reason is, server cost for hosting PHP application is cheaper than others such as ASP.NET or Java. Now stable PHP version is 7.3.8. Before this 5.6 was used by developers for a long time...<a href="<?php echo base_url(); ?>post/view/basic-php/41" class="btn btn-sm btn-link">Read more...</a></p>
      <hr>
      <h2 class="text-muted">Laravel The Modern Framework</h2><hr>
      <p>Laravel is the most popular and widely used framework in all over the world. This framework has already drawn the attention of several developers for its extra features, security, coding pattern. This framewrok is built using php. Use of MVC structure along with several design patterns have made <strong>Laravel</strong> more strong and developer's friendly. The current ratio of using laravel framework is continuously increasing nowadays..<a href="<?php echo base_url(); ?>post/view/laravel/38" class="btn btn-sm btn-link">Read more...</a></p>
      <hr><h2 class="text-muted">HTML Introduction and Usage</h2><hr>
      <p>Html is a markup language that is mainly used for making layout of a webpage or website It is a base language which deals at user interface. A simple static webpage or dynamic web page both require html for showing results generated from server. It is lightweight and also easy to learn for a beginners who want to start career in web world.<a href="<?php echo base_url(); ?>post/view/html-first-post/39" class="btn btn-sm btn-link">Read more...</a></p>
      <hr>

      <div class="latest-blog">
        <h2 class="last_article_headline"><a href="<?php echo base_url(); ?>blog" style="color:#fff; text-decoration: none;">Latest Blogs >></a></h2>
        <div class="row">
          <?php foreach ($blogs as $value) { ?>

            <div class="col-md-4">


              <?php if($value->blog_attachment == '' || $value->blog_attachment == null): ?>

                <a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/default.png" alt="<?php echo $value->blog_title; ?> - PHPDark.com" class="img-fluid"></a>
                <h4><?php echo $value->blog_title; ?></h4>
                <?php else: ?>

                 <a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/235X180/<?php echo $value->thumb; ?>" alt="<?php echo $value->blog_title; ?> - PHPDark.com" class="img-fluid"></a>
                 <h4 style="margin: 0px;"><a class="text-muted" href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><?php echo $value->blog_title; ?></a></h4>
                 
               <?php endif; ?>
               <small><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('d-m-Y, h:ia',strtotime($value->create)) ?> || <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $value->view; ?></strong></small>
               <p style="margin: 0px;"><?php echo substr($value->blog_description, 0,100); ?><a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"> read more</a></p>
             </div>


           <?php  } ?>
         </div>

       </div>

     </div>
   </div>

 </div>
</div>
<!-- wrapper end -->
<!-- social link -->