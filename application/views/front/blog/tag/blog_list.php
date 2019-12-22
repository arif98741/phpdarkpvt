<div class="container" style="font-family: 'Open Sans', sans-serif;">
    <div class="row">
        <div class="col-md-9 mt-4">
            <h2>Blog - Results for Tag</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">

                    <?php if (count($blogs) > 0) : ?>

                    <?php foreach ($blogs as $value) { ?>
                    <div class="row">
                        <div class="col-md-4">

                            <?php if ($value->blog_attachment != '' || $value->blog_attachment != null) : ?>
                            <a
                                href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img
                                    src="<?php echo base_url(); ?>uploads/blog/235X180/<?php echo $value->thumb; ?>"
                                    alt="<?php echo $value->blog_title; ?>- PHPDark.com"
                                    class="img-fluid blog-thumb"></a>

                            <?php else : ?>
                            <a
                                href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"><img
                                    src="<?php echo base_url(); ?>uploads/blog/default.png"
                                    alt="<?php echo $value->blog_title; ?>- PHPDark.com"
                                    class="img-fluid blog-thumb"></a>
                            <?php endif; ?>

                        </div>
                        <div class="col-md-8">
                            <h3><a href="<?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?>"
                                    class="text-muted"><?php echo $value->blog_title; ?></a></h3>
                            <small>Posted on <a
                                    href="<?php echo base_url(); ?>blog/category/<?php echo str_replace(' ', '-', $value->category_title); ?>/<?php echo $value->tbcid; ?>/page/1"><i><?php echo $value->category_title; ?></i></a>,
                                12-02-2019</small>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                                labore, iste molestias
                                totam officiis, illum voluptates fugit corrupti consectetur recusandae repellendus quae
                                <strong>read more...</strong></p>
                        </div>
                    </div>
                    <hr>

                    <?php } ?>

                    <?php else : ?>
                    <p>No Results found for tag <strong><?php echo $tag; ?></strong></p>
                    <?php endif; ?>




                    <?php if ($pages > 1) : ?>
                    <p>
                        <?php if ($page != 1) : ?>

                        <a href="<?php echo base_url(); ?>blog/tag/<?php echo $tag; ?>/<?php echo $previous_page; ?>"
                            class="btn btn-info btn-sm">Previous</a>&nbsp;
                        <?php endif; ?>

                        <?php
                            for ($i = 1; $i <= $pages; $i++) { ?>

                        <a href="<?php echo base_url(); ?>blog/tag/<?php echo $tag; ?>/<?php echo $i; ?>"
                            <?php if ($i == $page) : ?> style="font-size: 16px; font-weight: 900;" <?php endif; ?>
                            class="btn btn-info btn-sm"><?php echo $i; ?></a>&nbsp;
                        <?php  } ?>

                        <?php if ($page != $pages) : ?>
                        <a href="<?php echo base_url(); ?>blog/tag/<?php echo $tag; ?>/<?php echo $next_page; ?>"
                            class="btn btn-info btn-sm">Next</a>
                        <?php endif; ?>

                        <span class="text-muted">Showing <?php echo $page; ?> of <?php echo $pages; ?> pages </span>
                    </p>

                    <?php endif; ?>

                </div>
            </div>

        </div>

        <div class="col-md-3 mt-5">
            <h3>Recent Blogs</h3>
            <hr>
            <?php foreach ($popular_blogs as $popular_blog) { ?>

            <a
                href="<?php echo base_url(); ?>blog/view/<?php echo $popular_blog->blog_slug; ?>/<?php echo $popular_blog->blog_id; ?>">
                <p style="margin: 0px;"><strong><?php echo $popular_blog
                                                        ->blog_title; ?></strong></p>
            </a>
            <small><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y, H:ia', strtotime($popular_blog->create)) ?> ||
                <i class="fa fa-eye"></i> <strong><?php echo $popular_blog->view; ?></strong></small>
            <br>
            <hr>
            <?php } ?>
        </div>
    </div>
    <hr>

</div>

<!-- wrapper end -->
<!-- social link -->