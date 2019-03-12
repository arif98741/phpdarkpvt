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
                                <h6>Tags</h6>
                                <h2><?php echo $this->countermodel->total_tag(); ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-tag"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Tags</small>
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
            
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="min-height: 422px;">
                    <div class="card-header">
                        <h3>Timeline</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body timeline">
                        <div class="header bg-theme" style="background-image: url('<?php echo base_url();?>assets/admin/img/placeholder/placeimg_400_200_nature.jpg')">
                            <div class="color-overlay d-flex align-items-center">
                                <div class="day-number"><?php echo date('j'); ?></div>
                                <div class="date-right">
                                    <div class="day-name"><?php echo date('l'); ?></div>
                                    <div class="month"><?php echo date('F Y') ?><br><?php echo date('H:iA'); ?></div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="bullet bg-pink"></div>
                                <div class="time">11am</div>
                                <div class="desc">
                                    <h3>Attendance</h3>
                                    <h4>Computer Class</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-green"></div>
                                <div class="time">12pm</div>
                                <div class="desc">
                                    <h3>Design Team</h3>
                                    <h4>Hangouts</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-orange"></div>
                                <div class="time">2pm</div>
                                <div class="desc">
                                    <h3>Finish</h3>
                                    <h4>Go to Home</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Chat</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body chat-box scrollable" style="height:300px;">
                        <ul class="chat-list">
                            <li class="chat-item">
                                <div class="chat-img"><img src="<?php echo base_url();?>assets/admin/img/users/1.jpg" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                </div>
                                <div class="chat-time">10:56 am</div>
                            </li>
                            <li class="chat-item">
                                <div class="chat-img"><img src="<?php echo base_url();?>assets/admin/img/users/2.jpg" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">Bianca Doe</h6>
                                    <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                </div>
                                <div class="chat-time">10:57 am</div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">I would love to join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                    <br>
                                </div>
                                <div class="chat-time">10:59 am</div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="card-footer chat-footer">
                        <div class="input-wrap">
                            <input type="text" placeholder="Type and enter" class="form-control">
                        </div>
                        <button type="button" class="btn btn-icon btn-theme"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h4 class="card-title">Weather Report</h4>
                            <select class="form-control w-25 ml-auto">
                                <option selected="">Today</option>
                                <option value="1">Weekly</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center flex-row mt-30">
                            <div class="p-2 f-50 text-info"><i class="wi wi-day-showers"></i> <span>23<sup>°</sup></span></div>
                            <div class="p-2">
                            <h3 class="mb-0">Saturday</h3><small>Banglore, India</small></div>
                        </div>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td>Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td>Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <ul class="list-unstyled row text-center city-weather-days mb-0 mt-20">
                            <li class="col"><i class="wi wi-day-sunny mr-5"></i><span>09:30</span><h3>20<sup>°</sup></h3></li>
                            <li class="col"><i class="wi wi-day-cloudy mr-5"></i><span>11:30</span><h3>22<sup>°</sup></h3></li>
                            <li class="col"><i class="wi wi-day-hail mr-5"></i><span>13:30</span><h3>25<sup>°</sup></h3></li>
                        </ul>
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