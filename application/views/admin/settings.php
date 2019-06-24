
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
                    <h5>Settings</h5>
                    <span>Settings will be saved in database</span>
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
                        <a href="<?php echo base_url();?>admin/post_list">Settings List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Settings</h3></div>
            <div class="card-body">
               <!--  <form class="forms-sample"> -->
                <?php echo form_open_multipart('admin/save_settings', array('class'=>'forms-sample')); ?>
                <div class="form-group">
                    <label for="exampleInputName1">Settings Title</label>
                    <input type="text" name="post_title" class="form-control" id="exampleInputName1" placeholder="Enter Settings Tile ">
                </div>
                <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleSelectGender">Select Hightjs CSS</label>
                        <select name="catid" class="form-control" required="" id="post-category-dropdown">
                            <option selected="" disabled="">Select</option>
                            <?php foreach ($highlights as $highlight) { ?>
                                <option value="<?php echo $highlight; ?>"><?php echo  $highlight; ?></option>
                            <?php       } ?>


                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Settings Image</label>
                        <input type="file" name="post_attachment" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                </div>

                <div class="col-md-12">
                 <div class="form-group">
                    <label for="exampleInputName1">Settings Slug</label>
                    <input type="text" name="post_slug" placeholder="Example: php-learning-awesome" class="form-control" required="">
                </div>
            </div>

            <div class="col-md-6">
             <div class="form-group">
                <label for="exampleInputName1">Settings Tag</label>
                <select name="tagid[]" class="form-control" id="tags-dropdown" multiple="multiple">
                    <option>Select Tags</option>
                    <option>Select Tags</option>
                    <?php foreach ($tags as $tag) { ?>
                        <option value="<?php echo $tag->tagid; ?>"><?php echo  $tag->tag_name; ?></option>
                    <?php       } ?>


                </select>
            </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
            <label for="exampleInputName1">Settings Status</label>
            <select name="post_status" class="form-control">
                <option value="published">Published</option>
                <option value="draft">Draft</option>
                <option value="pending">Pending</option>

            </select>
        </div>
    </div>

</div>

<div class="form-group">
    <label for="exampleTextarea1">Settings Details</label>
    <textarea class="form-control" name="post_description" id="editor1" rows="4"></textarea>
</div>
<button type="submit" class="btn btn-primary mr-2" onclick="return  (confirm('are you sure to save?'))">Submit</button>
<button class="btn btn-light" onclick="return (confirm('are you sure to remove contents?'))">Cancel</button>
<?php echo form_close(); ?>
</div>
</div>
</div>



</div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<script>
   CKEDITOR.replace( 'editor1' );
   $('#post_tag').tagsinput();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
                   // $(document).ready(function() {
                     $('#post-category-dropdown').select2();
                     $('#tags-dropdown').select2({
                        tags: true,
                        tokenSeparators: [',', ' ']

                    });

                   // });
                   
               </script>


