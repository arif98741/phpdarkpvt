
<div class="col-md-7">
    <div class="right">

        <hr>

        <h3 class="text-muted text-center"><?php echo $post->post_title; ?></h3>
        <hr>
        <br>

        <?php foreach ($post as $post_tag) { ?>

        <?php if (!empty($post_tag->tag_name)) : ?>
        <a href="" class="btn btn-success btn-sm"><i class="fa fa-tag"></i>&nbsp; <?php echo $post_tag->tag_name; ?></a>
        <?php endif; ?>

        <?php  } ?>
        <?php echo str_replace("<pre>", '<pre style="font-size: 15px;"><code class="php">', str_replace('</pre>', '</code></pre>', $post->post_description)); ?>

        <?php if ($post->post_attachment != '') : ?>
        <br>

        <?php endif; ?>

        <br>
        <!-- ad here -->
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
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5046219789266403" data-ad-slot="6906462549"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>

<script>
hljs.initHighlightingOnLoad();
</script>
<script>
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document,
        s = d.createElement('script');
    s.src = 'https://phpdark-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>


<script>
hljs.initHighlightingOnLoad();
</script>


<!-- wrapper end -->
<!-- social link -->