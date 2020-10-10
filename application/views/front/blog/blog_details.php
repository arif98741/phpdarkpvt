<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php if ($blog->blog_attachment != '' || $blog->blog_attachment != null) : ?>
                <img src="<?php echo base_url(); ?>uploads/blog/fullwidth/<?php echo $blog->blog_attachment; ?>"
                     alt="<?php echo $blog->blog_title; ?>- PHPDark.com" class="img-fluid blog-details-image">

            <?php else : ?>
                <img src="<?php echo base_url(); ?>uploads/blog/default.png"
                     alt="<?php echo $blog->blog_title; ?>- PHPDark.com" style="display: none;"
                     class="img-fluid blog-details-image">
            <?php endif; ?>
            <hr>
            <h3 class="text-muted text-center" style="text-transform: uppercase ;"><?php echo $blog->blog_title; ?>
            </h3>

            <?php foreach ($tags as $tag) { ?>

                <?php if (!empty($tag->tag_name)) : ?>
                    <a href="<?php echo base_url(); ?>blog/tag/<?php echo $tag->tag_name; ?>/1"
                       class="btn btn-success btn-sm"
                       title="<?php echo $tag->tag_name; ?>"><i class="fa fa-tag"></i>&nbsp;
                        <?php echo $tag->tag_name; ?></a>
                <?php endif;
            } ?>

            <hr>
            <p class="text-center">
                <a href="<?php echo base_url(); ?>blog/category/<?php echo str_replace(' ', '-', $blog->category_title); ?>/<?php echo $blog->tbcid; ?>/page/1"><strong><?php echo $blog->category_title; ?></strong>
                </a>; <span><i class="fa fa-calendar"></i> <?php echo date('h.ia d-d-Y', strtotime($blog->create)) ?>
                    || <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $blog->view; ?></strong> times</span>
            </p>
            <article><?php echo $blog->blog_description; ?></article>
            <br>

        </div>

        <div class="col-md-3 mt-5">
            <h3>Popular Blogs</h3>
            <hr>
            <?php foreach ($popular_blogs as $popular_blog) { ?>

                <a
                        href="<?php echo base_url(); ?>blog/view/<?php echo $popular_blog->blog_slug; ?>/<?php echo $popular_blog->blog_id; ?>">
                    <p style="margin: 0px;"><strong><?php echo $popular_blog
                                ->blog_title; ?></strong></p>
                </a>
                <small><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y, H:ia', strtotime($popular_blog->create)) ?>
                    ||
                    <i class="fa fa-eye"></i> <strong><?php echo $popular_blog->view; ?></strong></small>
                <br>
                <hr>
            <?php } ?>
        </div>
    </div>
    <hr>
    <div class="container">
        <h2>Related Blogs</h2>
        <hr>
        <div class="row">

            <?php foreach ($related_blogs as $value) { ?>

                <div class="col-md-3">

                    <?php if ($value->blog_attachment != '' || $value->blog_attachment != null) : ?>
                        <a
                                href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img
                                    src="<?php echo base_url(); ?>uploads/blog/235X180/<?php echo $value->thumb; ?>"
                                    alt="<?php echo $blog->blog_title; ?>- PHPDark.com" class=""></a>

                    <?php else : ?>

                        <a
                                href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img
                                    src="<?php echo base_url(); ?>uploads/blog/default.png"
                                    alt="<?php echo $blog->blog_title; ?>- PHPDark.com"
                                    class="img-fluid blog-thumb"></a>

                    <?php endif; ?>

                    <h4>
                        <a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"
                           class="text-muted"><?php echo $value->blog_title; ?></a></h4>
                    <small>

                        <i class="fa fa-clock-o"></i>&nbsp;<?php echo date('d-m-Y, H:ia', strtotime($value->create)); ?>
                        ||
                        <i class="fa fa-eye"></i>&nbsp;<strong><?php echo $value->view; ?> </strong>

                    </small>
                    <p ><a
                                href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>">
                            read more...</a></p>
                </div>
            <?php } ?>

            <!-- facebook -->


        </div>
    </div>
</div>
</div>
<!-- wrapper end -->
<!-- social link -->