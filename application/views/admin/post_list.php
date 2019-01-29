
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
                                            <h5>Posts</h5>
                                            <span>Posts are defination and values of several topics under several cateogories</span>
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
                                                <a href="<?php echo base_url();?>admin/add_post" >Add New</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Post List</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h3>Post List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive">
                                            <table id="multi-colum-dt"
                                                   class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Post Title</th>
                                                    <th>Post Description</th>
                                                    <th>Category</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; foreach ($posts as $post) { ?>
                                                        
                                                   
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $post->post_title;?></td>
                                                    <td><?php echo substr($post->post_description, 0,40);?>....</td>
                                                    <td><?php echo $post->category_title;?></td>
                                                    <td><?php echo date('d-m-Y H:mA',strtotime($post->created));?></td>
                                                    <td><?php echo date('d-m-Y H:mA',strtotime($post->updated));?></td>
                                                    <td>
                                                         <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i+2; ?>"><i class="ik ik-edit"></i></a>

                                                         <div class="modal fade" id="exampleModalCenter<?php echo $i+2; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                                                            <?php echo form_open('post_categories/edit/'.$post->catid,array('class'=>''));?>
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-info">
                                                                                    <h5 class="modal-title " id="exampleModalCenterLabel">Edit Category</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                            <label for="exampleInputName1">Category Name</label>
                                                                                            <input type="text" name="category_title" value="<?php echo $post->category_title;?>" class="form-control" id="exampleInputName1" placeholder="Name">
                                                                                        </div>
                                                                                    </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>


                                                        <!-- edit end-->
                                                         
                                                         <a href="<?php echo base_url();?>post/delete/<?php echo $post->post_id;?>" class="btn btn-icon btn-warning" onclick="return(confirm('are you sure to delete?'))"><i class="ik ik-trash"></i></a>


                                                    </td>
                                                </tr>
                                                 <?php  $i++;} ?>
                                               
                                            </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Category Title</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <!-- Language - Comma Decimal Place table end -->
                            </div>
                        </div>
                    </div>
                </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                <?php echo form_open('post_categories/save_categories',array('class'=>''));?>
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <h5 class="modal-title " id="exampleModalCenterLabel">Add Post Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                                <label for="exampleInputName1">Category Name</label>
                                                <input type="text" name="post_category" class="form-control" id="exampleInputName1" placeholder="Name">
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                </form>

                
                