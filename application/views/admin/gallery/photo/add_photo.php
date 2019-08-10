
<div class="main-content">
    <?php if($this->session->success): ?>
        <div class="alert bg-primary alert-primary text-white" id="message" role="alert">
          <?php echo $this->session->success ;?>
      </div>
  <?php endif; ?>
  <?php if($this->session->error): ?>
    <div class="alert bg-warning alert-warning text-white" id="message" role="alert">
      <?php echo $this->session->error ;?>
  </div>
<?php endif; ?>   

<div class="container-fluid">
   <div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-list bg-blue"></i>
                <div class="d-inline">
                    <h5>Add Photo</h5>
                    <span>Photo will be updated to databases</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin/dashboard"><i class="ik ik-home"></i>&nbsp; Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin/gallery">Gallery</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin/gallery/album">Allbum</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">Add Photo</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Add Photo</h3></div>
            <div class="card-body">
               <!--  <form class="forms-sample"> -->
                <?php echo form_open_multipart('admin/gallery/save_photo', array('class'=>'forms-sample')); ?>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Select <strong>PHOTO</strong></label>
                            <input type="file" name="photo_name[]" class="form-control" id="exampleInputEmail3" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Select <strong>PHOTO</strong></label>
                            <input type="file" name="photo_name[]" class="form-control" id="exampleInputEmail3" placeholder="Email" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Select <strong>PHOTO</strong></label>
                            <input type="file" name="photo_name[]" class="form-control" id="exampleInputEmail3" placeholder="Email" >
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Select <strong>PHOTO</strong></label>
                            <input type="file" name="photo_name[]" class="form-control" id="exampleInputEmail3" placeholder="Email" >
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleSelectGender">Album</label>
                            <select name="album_id" class="form-control" required="" >
                                <option  disabled="" selected="">Select Album</option>
                                <?php foreach ($albums as $album) { ?>
                                    <option value="<?php echo $album->id; ?>" <?php if($album->album_name=='Post'){ ?> selected<?php }?>><?php echo  $album->album_name; ?></option>
                                <?php       } ?>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleInputName1">Source</label>
                        <input type="text" name="source" placeholder="http://phpdark.com/about-us/?id=32&action=no&search=abc" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                 <div class="form-group">

                    <div class="form-group">
                        <label for="exampleTextarea1">Photo Details</label>
                        <textarea class="form-control" name="photo_details" id="editor1" rows="4" style="background: #ddd; font-size: 16px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" onclick="return (confirm('are you sure to remove contents?'))">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo form_close(); ?>
</div>
</div>
</div>

</div>


</div>
</div>