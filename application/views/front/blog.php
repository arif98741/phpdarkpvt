
<div class="container">
  <h2 class="text-center" style="">Latest Blogs</h2><hr>
  <div class="row">

    <?php foreach ($blogs as $value) { ?>

      <div class="col-md-3">
        <?php if($value->blog_attachment != '' || $value->blog_attachment != null): ?>
          <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/235X180/<?php echo $value->thumb; ?>" alt="<?php echo $value->blog_title; ?>- PHPDark.com" class="img-fluid blog-thumb"></a>

          <?php else: ?>
            <a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url();?>uploads/blog/default.png" alt="<?php echo $value->blog_title; ?>- PHPDark.com" class="img-fluid blog-thumb"></a>  
          <?php endif; ?>

          <h4><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>" class="text-muted"><?php  echo $value->blog_title; ?></a></h4>
          <small><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('d-m-Y, H:ia',strtotime($value->create)) ?>

           || <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $value->view; ?></strong>

        </small>
          <p><?php echo substr($value->blog_description, 0,100); ?><a href="<?php echo base_url();?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"> read more...</a></p>
        </div>

      <?php  } ?>

    </div>
    <p>
      <?php if($page != 1) :?>

        <a href="<?php echo base_url(); ?>blog/<?php echo $previous_page; ?>" class="btn btn-info btn-sm">Previous</a>&nbsp;
      <?php endif; ?>

      <?php
      for($i=1; $i <= $pages; $i++) { ?> 

        <a href="<?php echo base_url(); ?>blog/<?php echo $i; ?>" <?php if($i==$page): ?> style="font-size: 16px; font-weight: 900;" <?php endif; ?> class="btn btn-info btn-sm"><?php echo $i;?></a>&nbsp;
      <?php  }?>

      <?php if($page != $pages) :?>
        <a href="<?php echo base_url(); ?>blog/<?php echo $next_page; ?>" class="btn btn-info btn-sm">Next</a>
      <?php endif; ?>

      <span class="text-muted">Showing <?php echo $page; ?> of <?php echo $pages; ?> pages </span> 
    </p>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-ed+5p-2-bb+pw"
     data-ad-client="ca-pub-5046219789266403"
     data-ad-slot="1521665115"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div>
  
</div>
</div>
<!-- wrapper end -->
<!-- social link -->
