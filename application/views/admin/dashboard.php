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
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Posts</h6>
                                <h2><?php echo $this->countermodel->total_post(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-align-left"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Blog Post </small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Blogs</h6>
                                <h2><?php echo $this->countermodel->total_blog(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-list"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Blogs</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Categories</h6>
                                <h2><?php echo $this->countermodel->total_category(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-folder-plus"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Categories</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Pages</h6>
                                <h2><?php echo $this->countermodel->total_page(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-calendar"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Pages</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Blog View</h6>
                                <h2><?php echo $this->countermodel->total_blogview(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-eye"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total blog views</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                    </div>
                </div>
            </div>

            
            
        </div>
        
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-plus"></i></a>
                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                        <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">More Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="card-search with-adv-search dropdown">
                        <form action="">
                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Position" data-column="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Office" data-column="2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Age" data-column="3">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Start date" data-column="4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Salary" data-column="5">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-theme">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="card-options text-right">
                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th class="nosort" width="10">
                                <label class="custom-control custom-checkbox m-0">
                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </th>
                            <th>#</th>
                            <th class="nosort">Photo</th>
                            <th>Titlte</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($posts as $post) { ?>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </td>
                            <td><?php echo $i;?></td>
                            <td><img src="<?php echo base_url();?>uploads/post/<?php echo $post->post_attachment;?>" class="table-user-thumb" alt=""></td>
                            
                            <td><?php echo $post->post_title;?></td>
                            <td><?php echo $post->category_title;?></td>
                            <td><?php echo substr($post->post_description, 0,60);?>....</td>
                            <td>2011/04/25</td>
                            <td><?php echo$post->post_status;?> </td>
                            <td><?php echo$post->post_status;?> </td>
                        </tr>
                        <?php  $i++;} ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
</div>