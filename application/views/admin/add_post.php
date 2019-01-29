
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
                                            <h5>Add Post</h5>
                                            <span>Post will be saved in database</span>
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
                                                <a href="<?php echo base_url();?>admin/post_list">Post List</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Add Post</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Post Title</label>
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                            </div>
                                            <div class="row">
                                                   <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Post Category</label>
                                                        <select class="form-control" id="exampleSelectGender">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Post Image</label>
                                                        <input type="file" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                             
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Post Tag</label>
                                                <input type="text"  class="form-control" id="post_tag" placeholder="Password">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>File upload</label>
                                                <input type="file" name="img[]" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Textarea</label>
                                                <textarea class="form-control" id="editor1" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" onclick="return  (confirm('are you sure to remove submit?'))">Submit</button>
                                            <button class="btn btn-light" onclick="return (confirm('are you sure to remove contents?'))">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                         
                           
                        </div>
                       
                       
                    </div>
                </div>
               <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
               <script src="<?php echo base_url();?>assets/admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

                <script>
                       CKEDITOR.replace( 'editor1' );
                       $('#post_tag').tagsinput();
                </script>
