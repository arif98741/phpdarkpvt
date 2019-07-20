<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="<?php echo base_url();?>admin/dashboard">
                <div class="logo-img">
                    <img src="<?php echo base_url();?>assets/admin/img/logo.png" class="header-brand-img" width="30px" height="30px">
                </div>
                <span class="text">PHPDark.com</span>
            </a>
            
        </div>
        
        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    
                    <div class="nav-item active">
                        <a href="<?php echo base_url();?>admin/dashboard"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        <a href="<?php echo base_url();?>" target="_1"><i class="ik ik-eye"></i><span>Visit</span></a>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-align-left"></i><span>Post</span> <span class="badge badge-danger"><?php echo $this->countermodel->total_post(); ?></span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/post/post_list" class="menu-item"><i class="fa fa-list-alt"></i>Post List</a>
                            <a href="<?php echo base_url();?>admin/post/add_post" class="menu-item"><i class="fa fa-plus"></i>Add Post</a>
                            
                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-folder-plus"></i><span>Post Category</span> <span class="badge badge-danger"><?php echo $this->countermodel->total_category(); ?></span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/post_categories" class="menu-item">Post Category List</a>
                           
                        </div>
                    </div>
                    
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-tag"></i><span>Tag</span> <span class="badge badge-danger"><?php echo $this->countermodel->total_tag(); ?></span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/tag/tag_list" class="menu-item"><i class="fa fa-list-alt"></i>Tag List</a>
                            
                        </div>
                    </div>
                    <div class="nav-lavel">Blog</div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-package"></i><span>Blogs</span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/blog/blog_list" class="menu-item">Blogs List</a>
                        </div>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/blog/blog_cat_list" class="menu-item">Blogs Category List</a>
                        </div>
                    </div>
                    <div class="nav-lavel">Page Element</div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/page/page_list" class="menu-item">Pages List</a>
                        </div>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/page/page_cat_list" class="menu-item">Pages Category List</a>
                        </div>
                    </div>

                     <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/settings" class="menu-item">Profile</a>
                        </div>
                        <div class="submenu-content">
                            <a href="<?php echo base_url();?>admin/page_cat_list" class="menu-item">Pages Category List</a>
                        </div>
                    </div>

                    
                </nav>
            </div>
        </div>
    </div>