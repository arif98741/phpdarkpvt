<div class="main-content">
    <style>
        .gallery_image:hover{
            opacity: .4;
            transition: .6s;
            cursor: pointer;
        }


        .gallery_image image{
            position: absolute !important;

        }
        .gallery_image .details{
            position: relative !important;
            bottom: 20%;
            color: #fff;
            background: rgba(10,21,22,0.73);
            text-align: center;
            padding: 3px 0px;
            font-size: 29px !important;
        }


        .gallery_image .photo_delete_trigger{
            font-size: 15px;

        }


    </style>
    <?php if ($this->session->success): ?>
        <div class="alert bg-primary alert-primary text-white" id="message" role="alert">
            <?php echo $this->session->success; ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->error): ?>
        <div class="alert bg-warning alert-warning text-white" id="message" role="alert">
            <?php echo $this->session->error; ?>
        </div>
    <?php endif; ?>


    <div class="alert bg-primary alert-warning text-white" style="display: none;"  id="url_display" role="alert">
        <span id="<url_display_box></url_display_box>"></span>
    </div>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-list bg-blue"></i>
                        <div class="d-inline">
                            <h5>Photos from (<?php echo $album_name; ?>)</h5>
                            <span>All Photos from <strong><?php echo $album_name; ?></strong> album will be shown here</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url(); ?>admin/dashboard"><i class="ik ik-home"></i>&nbsp; Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url(); ?>admin/gallery/add_photo">Add New</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Photos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">


            <?php foreach ($photos as $photo) { ?>
                <div class="col-sm-2 gallery_image" style="margin-bottom: 20px; " >
                    <img src="<?php echo base_url() . $photo->path; ?>" value="<?php echo base_url() . $photo->path; ?>" class="img-fluid img_data">
                    <div class="details"> 
                        <p><a href="<?php echo base_url();?>admin/gallery/delete_photo/<?php echo $photo->id; ?>" onclick="return(confirm('are you sure to delete photo?'))" class="photo_delete_trigger btn btn-warning btn-sm"><i class="fa fa-trash"></i></a></p>
                        <!--  -->
                    </div>
                </div>

            <?php } ?>


            <!-- Language - Comma Decimal Place table end -->
        </div>
        <p>
          <?php if($page != 1) :?>

            <a href="<?php echo base_url(); ?>admin/gallery/photo_by_album/<?php echo $album_id.'/'.$album_name; ?>/<?php echo $previous_page; ?>" class="btn btn-info btn-sm">Previous</a>&nbsp;
        <?php endif; ?>

        <?php
        for($i=1; $i <= $pages; $i++) { ?> 

            <a href="<?php echo base_url(); ?>admin/gallery/photo_by_album/<?php echo $album_id.'/'.$album_name; ?>/<?php echo $i; ?>" <?php if($i==$page): ?> style="font-size: 16px; font-weight: 900;" <?php endif; ?> class="btn btn-info btn-sm"><?php echo $i;?></a>&nbsp;
        <?php  }?>

        <?php if($page != $pages) :?>
            <a href="<?php echo base_url(); ?>admin/gallery/photo_by_album/<?php echo $album_id.'/'.$album_name; ?>/<?php echo $next_page; ?>" class="btn btn-info btn-sm">Next</a>
        <?php endif; ?>

        <span class="text-muted">Showing <?php echo $page; ?> of <?php echo $pages; ?> pages </span> 
    </p>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>

    $(document).ready(function(){
        $('.img_data').click(function() {

           var path = $(this).attr('src');

           $('#url_display').removeAttr('style');
           $('#url_display_box').html('<strong>'+path+'</strong>');
           $('#message').show();
       });

        // auto hide display message after 15seconds
        setTimeout(function(){
          $('#url_display').slideUp(400);
      },10000);
    });
</script>
