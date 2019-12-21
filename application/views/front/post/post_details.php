<style>
 img{width: 100%;}
</style>
<div class="col-md-7">
  <div class="right">

    <hr>
    <h3 class="text-muted text-center"><?php echo $post[0]->post_title; ?></h3>
    <hr>
    <br>
    
    
    <?php foreach ($post as $post_tag) {?>

      <?php if(!empty($post_tag->tag_name)): ?>
       <a href="" class="btn btn-success btn-sm"><i class="fa fa-tag"></i>&nbsp; <?php echo $post_tag->tag_name; ?></a>
     <?php endif; ?>

   <?php  } ?>
   <?php echo str_replace("<pre>", '<pre style="font-size: 15px;"><code class="php">', str_replace('</pre>', '</code></pre>', $post[0]->post_description)); ?>
   
   <?php if($post[0]->post_attachment != ''): ?>
    <br>
    <!-- <img src="<?php echo base_url(); ?>uploads/post/<?php //echo $post[0]->post_attachment; ?>" alt="<?php //echo $post[0]->post_title; ?>- phpdark.com" class="img-fluid" > -->
  <?php endif; ?>
  
  <br>
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
  <div id="disqus_thread"></div>

  <!-- <br>
  <div class="row">
    <div class="col-md-4">
      <a href="#" class="previous-btn"> Previous</a>
    </div>
    <div class="col-md-4  offset-md-4">
      <a href="#" class="next-btn">Next</a>
    </div>
  </div> -->
</div>
</div>
<div class="col-md-3">
  <ins class="adsbygoogle"
  style="display:block"
  data-ad-client="ca-pub-5046219789266403"
  data-ad-slot="6906462549"
  data-ad-format="auto"
  data-full-width-responsive="true"></ins>
  <script>
   (adsbygoogle = window.adsbygoogle || []).push({});
 </script>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>

(function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = 'https://phpdark-1.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();
</script>


<!-- wrapper end -->
<!-- social link -->
