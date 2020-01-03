<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ($page->page_attachment != '' || $page->page_attachment != null) : ?>
            <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $page->page_attachment; ?>"
                alt="<?php echo $page->page_title; ?>. PHPDark.com" class="img-fluid blog-details-image">

            <?php else : ?>
            <img src="<?php echo base_url(); ?>uploads/blog/default.png"
                alt="<?php echo $page->page_title; ?>. PHPDark.com" style="display: none;"
                class="img-fluid blog-details-image">

            <?php endif; ?>
            <hr>
            <h3 class="text-muted text-center" style="text-transform: uppercase ;"><?php echo $page->page_title; ?></h3>
            <hr>
            <article><?php echo $page->page_description; ?></article>


            <img src="/assets/image/homepage.jpeg" alt="" class="img-fluid">
            <br>

        </div>
    </div>

</div>
</div>
<!-- wrapper end -->
<!-- social link -->