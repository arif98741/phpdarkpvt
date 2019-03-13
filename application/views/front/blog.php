
<div class="container">
  <h2 class="text-center" style="">Latest Blogs</h2><hr>
  <div class="row">

    <?php foreach ($blogs as $value) { ?>


      <div class="col-md-3">
        <?php if($value->blog_attachment != '' || $value->blog_attachment != null): ?>
          <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/<?php echo $value->blog_attachment; ?>" alt="" class="img-fluid blog-thumb"></a>

        <?php else: ?>
              <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/default.png" alt="" class="img-fluid blog-thumb"></a>  
        <?php endif; ?>


       
        <h4><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>" class="text-muted"><?php  echo $value->blog_title; ?></a></h4>
         <small><?php echo date('d-m-Y, H:ia',strtotime($value->create)) ?></small>
        <p><?php echo substr($value->blog_description, 0,100); ?><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"> read more...</a></p>
      </div>

    <?php       } ?>




  </div>
</div>


</div>
</div>
<!-- wrapper end -->
<!-- social link -->
