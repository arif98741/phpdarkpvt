<!-- wrapper start -->

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
        <div class="block">
          <i class="fa fa-free-code-camp"></i>
          <p>Implement</p>
        </div>
        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Tempore repellat sed tenetur aspernatur ut ex rerum non eveniet. Officiis natus, quia necessitatibus, similique aliquid modi incidunt doloremque doloribus nobis blanditiis. Velit quasi assumenda minima amet delectus accusantium, recusandae, dicta libero accusamus, sed ad sequi veniam. Neque provident ea dolor! Sunt nisi praesentium libero sapiente blanditiis sint reiciendis ad illo, repudiandae repellat provident neque, non, sit corrupti vel culpa eveniet voluptates in sequi magni, iure dicta. Sapiente ex ea magni, earum porro quam impedit itaque illo quis suscipit, laborum sit eum at, omnis. Dignissimos deleniti alias, aperiam tempora ipsam tempore, saepe?  <a href="#" class="btn btn-sm btn-link">Read more...</a></p>
        <hr>
        <h2 class="text-muted">Lorem ipsum dolor sit aectetur adipisicing el.</h2><hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias eius sapiente dicta aperiam pariatur, quo assumenda, eligendi voluptates consequuntur, dignissimos in laboriosam aliquid. Aspernatur aut ab perferendis atque optio soluta deleniti, at. Cupiditate quaerat itaque asperiores, laboriosam voluptas voluptatesentium. Minus, aperiam magnam ex. Quibusdam voluptate vero ducimus repellat molestias cumque est rerum veniam, error consequatur. <a href="#" class="btn btn-sm btn-link">Read more...</a></p>
        <hr><h2 class="text-muted">Lorem ipsum dolor sit aectetur adipisicing el.</h2><hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias eius sapiente dicta aperiam pariatur, quo assumenda, eligendi voluptates consequuntur, dignissimos in laboriosam aliquid. Aspernatur aut ab perferendis atque optio soluta deleniti, at. Cupiditate quaerat itaque asperiores, laboriosam voluptas voluptatesentium. Minus, aperiam magnam ex. Quibusdam voluptate vero ducimus repellat molestias cumque est rerum veniam, error consequatur. <a href="#" class="btn btn-sm btn-link">Read more...</a></p>
        <hr>
        
        <div class="latest-blog">
          <h2 class="last_article_headline">Latest Article >></h2>
          <div class="row">
            <?php foreach ($blogs as $value) { ?>
            
            <div class="col-md-4">


              <?php if($value->blog_attachment == '' || $value->blog_attachment == null): ?>

                <a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/default.png" alt="" class="img-fluid"></a>
                <h4><?php echo $value->blog_title; ?></h4>
              <?php else: ?>

                 <a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/<?php echo $value->blog_attachment; ?>" alt="" class="img-fluid"></a>
                 <h4 style="margin: 0px;"><a class="text-muted" href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><?php echo $value->blog_title; ?></a></h4>
                 <small><?php echo date('d-m-Y, H:ia',strtotime($value->create)) ?></small>
              <?php endif; ?>
              <p style="margin: 0px;"><?php echo substr($value->blog_description, 0,110); ?><a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"> read more</a></p>
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