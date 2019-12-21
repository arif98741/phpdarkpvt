<style>
img {
    width: 100%;
}
</style>
<div class="col-md-7">
    <div class="right">

        <hr>
        <h3 class="text-muted text-center"><?php echo $post[0]->post_title; ?></h3>
        <!-- <h4 class="text-center">
            <a href="#" class="text-muted" style="font-size: 15px;"><i class="fa fa-tag"></i> Something</a> &nbsp;
            <a href="#" class="text-muted" style="font-size: 15px;"><i class="fa fa-tag"></i> Something</a> &nbsp;
            <a href="#" class="text-muted" style="font-size: 15px;"><i class="fa fa-tag"></i> Something</a>
        </h4> -->
        <hr>
        <br>

        <?php foreach ($post as $post_tag) { ?>

        <?php if (!empty($post_tag->tag_name)) : ?>
        <a href="" class="btn btn-success btn-sm"><i class="fa fa-tag"></i>&nbsp; <?php echo $post_tag->tag_name; ?></a>
        <?php endif; ?>

        <?php  } ?>
        <?php echo str_replace("<pre>", '<pre style="font-size: 15px;"><code class="php">', str_replace('</pre>', '</code></pre>', $post[0]->post_description)); ?>

        <?php if ($post[0]->post_attachment != '') : ?>
        <br>

        <?php endif; ?>

        <br>
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
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
<script>
hljs.initHighlightingOnLoad();
</script>

<!-- wrapper end -->
<!-- social link -->