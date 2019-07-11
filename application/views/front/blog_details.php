
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php if($blog[0]->blog_attachment != '' || $blog[0]->blog_attachment != null): ?>
            <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $blog[0]->blog_attachment; ?>" alt="<?php echo $blog[0]->blog_title; ?>. PHPDark.com" class="img-fluid blog-details-image" >

            <?php else: ?>
               <img src="<?php echo base_url(); ?>uploads/blog/default.png" alt="<?php echo $blog[0]->blog_title; ?>. PHPDark.com" style="display: none;" class="img-fluid blog-details-image" >
            <?php endif; ?>
            <hr>
            <h3 class="text-muted text-center" style="text-transform: uppercase ;"><?php echo $blog[0]->blog_title; ?></h3>
            <hr>
            <p class="text-center">
              <a href="<?php echo base_url(); ?>blog/category/<?php echo str_replace(' ', '-', $blog[0]->category_title); ?>/<?php echo $blog[0]->tbcid; ?>"><strong><?php echo $blog[0]->category_title; ?></strong>
              </a>; <span><i class="fa fa-calendar"></i> <?php echo date('h.ia d-d-Y',strtotime($blog[0]->create)) ?> || <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $blog[0]->view; ?></strong> times</span>
            </p>
            <article><?php echo $blog[0]->blog_description; ?></article>
        <br>
        <div class="row">
          <div class="col-md-4">
            <a href="#" class="previous-btn" style="display: block;"> Previous</a>
          </div>
          <div class="col-md-4  offset-md-4">
            <a href="#" class="next-btn text-right" style="display: block;">Next</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-5">
        <h3>Popular Blogs</h3><hr>
        <?php foreach($popular_blogs as $popular_blog) {?>
        
        <a href="<?php echo base_url();?>blog/view/<?php echo $popular_blog->blog_slug; ?>/<?php echo $popular_blog->blog_id; ?>"><p style="margin: 0px;"><strong><?php echo $popular_blog
        ->blog_title; ?></strong></p></a>
        <small><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y, H:ia',strtotime($popular_blog->create)) ?> || <i class="fa fa-eye"></i> <strong><?php echo $popular_blog->view; ?></strong></small>
        <br><hr>
      <?php } ?>
      </div>
    </div>
    <hr>
    <div class="container">
      <h2>Related Articles</h2>
      <hr>
      <div class="row">
      
        <?php foreach ($related_blogs as $value) { ?>
          
        <div class="col-md-3">

          <?php if($value->blog_attachment != '' || $value->blog_attachment != null): ?>
          <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/<?php echo $value->blog_attachment; ?>" alt="<?php echo $blog[0]->blog_title; ?>. PHPDark.com" class="img-fluid blog-thumb"></a>

          <?php else: ?>

            <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/default.png" alt="<?php echo $blog[0]->blog_title; ?>. PHPDark.com" class="img-fluid blog-thumb"></a> 

          <?php endif; ?>
          
          <h4><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>" class="text-muted"><?php echo $value->blog_title; ?></a></h4>
          <small>

            <i class="fa fa-clock-o"></i>&nbsp;<?php echo date('d-m-Y, H:ia',strtotime($value->create)); ?> || <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $value->view; ?> </strong>
              
            </small>
          <p style="margin: 0px;"><?php echo substr($value->blog_description, 0,100); ?><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"> read more...</a></p>
        </div>
         <?php  } ?>

         <!-- facebook -->


      </div>
    </div>
  </div>
</div>
<!-- wrapper end -->
<!-- social link -->
