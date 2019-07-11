<div id="wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="left">

        <p class="quick-start-head" style="margin-top: 30px;"><?php echo $singlecategory[0]->category_title; ?></p>

        <?php foreach ($sidebar_posts as $sidebar_post) { ?>

          <a href="<?php echo base_url(); ?>post/view/<?php echo $sidebar_post->post_slug; ?>/<?php echo $sidebar_post->post_id; ?>" <?php if($sidebar_post->post_id == $post_id): ?> style="text-decoration: underline;" <?php endif; ?> class="btn-block"><i class="fa fa-arrow-right"></i>&nbsp;<?php echo $sidebar_post->post_title; ?></a>

        <?php  }   ?>     

      </div>
    </div>