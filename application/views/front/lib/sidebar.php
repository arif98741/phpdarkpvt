<div id="wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="left">

        <?php 
        $segments = 0;
        if (count($this->uri->segments) == 0) {?>


          <h3 class="text-left">Welcome Learner...</h3>
          <p class="text-justify" style="padding: 0px 4px"><span class="text-bold">PHPDark.com<span> is a platform for giving support of learning resources of programming language mainly PHP and it's cooperative frameworks such as <strong>Laravel</strong>, <strong>Codeigniter</strong>, <strong>Yii2</strong>, <strong>Symphony</strong> etc. Others are also available in <strong>phpdark</strong> for supplying easy guidance</p>

          <?php }  ?>

          <?php foreach ($post_categories as $post_category) { ?>

            <p class="quick-start-head"><?php echo $post_category->category_title; ?></p>
            <?php 
            $posts = $this->db->where('catid',$post_category->catid)->limit(7)->get('tbl_post')->result_object();
            foreach($posts as  $post)
              { ?>
                <a href="<?php echo base_url(); ?>post/view/<?php echo $post->post_slug; ?>/<?php echo $post->post_id; ?>" class="btn-block"><i class="fa fa-arrow-right"></i>&nbsp;<?php echo $post->post_title; ?></a>

              <?php  } ?>
              <br>
            <?php  }   ?>   

          </div>
        </div>