
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if($blog[0]->blog_attachment !== '' || $blog[0]->blog_attachment !== null): ?>
            <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $blog[0]->blog_attachment; ?>" alt="" class="img-fluid blog-details-image" >
            <?php endif; ?>
            <hr>
            <h3 class="text-muted text-center" style="text-transform: uppercase ;"><?php echo $blog[0]->blog_title; ?></h3>
            <hr>
            <p class="text-center"><a href=""><strong><?php echo $blog[0]->category_title; ?></strong></a>; <span>5.00pm,12-12-2018</span></p>
            <article><?php echo $blog[0]->blog_description; ?></article>
        
        
        <img src="/assets/image/homepage.jpeg" alt="" class="img-fluid">
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
    </div>
    <hr>
    <div class="container">
      <h2>Related Articles</h2>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <a href=""><img src="assets/blog/1.jpeg" alt="" class="img-fluid blog-thumb"></a>
          <small>12-12-2018; Wednesday 22:10</small>
          <h4>Thinking is Not Enough</h4>
          <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Odit ipsum, totam officia ab molestiae<a href="#"> read more...</a></p>
        </div>
        <div class="col-md-3">
          <a href=""><img src="assets/blog/1.jpeg" alt="" class="img-fluid blog-thumb"></a>
          <small>12-12-2018; Wednesday 22:10</small>
          <h4>Thinking is Not Enough</h4>
          <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Odit ipsum, totam officia ab molestiae<a href="#"> read more...</a></p>
        </div>
        <div class="col-md-3">
          <a href=""><img src="assets/blog/1.jpeg" alt="" class="img-fluid blog-thumb"></a>
          <small>12-12-2018; Wednesday 22:10</small>
          <h4>Thinking is Not Enough</h4>
          <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Odit ipsum, totam officia ab molestiae<a href="#"> read more...</a></p>
        </div>

        <div class="col-md-3">
          <a href=""><img src="assets/blog/1.jpeg" alt="" class="img-fluid blog-thumb"></a>
          <small>12-12-2018; Wednesday 22:10</small>
          <h4>Thinking is Not Enough</h4>
          <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Odit ipsum, totam officia ab molestiae<a href="#"> read more...</a></p>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- wrapper end -->
<!-- social link -->
