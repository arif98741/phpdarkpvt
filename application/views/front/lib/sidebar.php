<div id="wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="left">

        <?php 
        $segments = 0;
        if (count($this->uri->segments) == 0) {?>
        

          <h3 class="text-left">Welcome Learner...</h3>
          <p class="text-justify" style="padding: 0px 4px"><span class="text-bold">PHPDark.com<span> is a platform for giving facility of learning resources of programming language. Mainly PHP and it's cooperative frameworks such as <strong>Laravel</strong>, <strong>Codeigniter</strong>, <strong>Yii2</strong> are covered as well as others are also available Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, eaque!</p>

        <?php }  ?>

        <?php foreach ($post_categories as $post_category) { ?>
                    
         

        <p class="quick-start-head"><?php echo $post_category->category_title; ?></p>
        <?php 
            $posts = $this->db->where('catid',$post_category->catid)->limit(7)->get('tbl_post')->result_object();
            foreach($posts as  $post)
            { ?>
                <a href="#" class="btn-block">Lorem ipsum dolor sit amet</a>

      <?php  } ?>
        
        <br>

         <?php  }   ?>   

      </div>
    </div>