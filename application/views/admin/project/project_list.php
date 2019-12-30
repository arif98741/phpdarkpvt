<div class="main-content">
    <?php if ($this->session->success) : ?>
    <div class="alert bg-primary alert-primary text-white" id="message" role="alert">
        <?php echo $this->session->success; ?>
    </div>
    <?php endif; ?>
    <?php if ($this->session->error) : ?>
    <div class="alert bg-warning alert-warning text-white" id="message" role="alert">
        <?php echo $this->session->error; ?>
    </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-list bg-blue"></i>
                        <div class="d-inline">
                            <h5>Project</h5>
                            <span>Project will differentiate and introduces several parts of the website.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url(); ?>admin/dashboard"><i class="ik ik-home"></i>&nbsp;
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url(); ?>admin/project/add_project">Add New</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header d-block">
                        <h3>Project List</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Project Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>View</th>
                                        <th>Create</th>
                                        <th>Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($blogs as $blog) { ?>

                                    <tr>
                                        <td style="text-align: center;"><?php echo $i; ?></td>
                                        <td><?php echo $blog->project_title; ?></td>
                                        <td><?php echo substr($blog->project_description, 0, 20); ?>....</td>
                                        <td><?php echo $blog->category_title; ?></td>
                                        <td><?php echo $blog->view; ?></td>
                                        <td><?php echo date('d-m-y h:ia', strtotime($blog->create)); ?></td>
                                        <td><?php echo date('d-m-y', strtotime($blog->update)); ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>project/view/<?php echo $blog->project_slug; ?>/<?php echo $blog->project_id; ?>"
                                                target="1" class="btn btn-icon btn-primary"><i
                                                    class="ik ik-eye"></i></a>

                                            <a href="<?php echo base_url(); ?>admin/project/edit_project/<?php echo $blog->project_id; ?>"
                                                class="btn btn-icon btn-warning"><i class="ik ik-edit"></i></a>


                                            <!-- edit end-->

                                            <a href="<?php echo base_url(); ?>admin/project/delete_project/<?php echo $blog->project_id; ?>"
                                                class="btn btn-icon btn-danger"
                                                onclick="return(confirm('are you sure to delete?'))"><i
                                                    class="ik ik-trash"></i></a>


                                            <?php if ($blog->project_status == 'published') : ?>

                                            <a href="#" class="btn btn-icon btn-success"><i class="ik ik-check"></i></a>

                                            <?php elseif ($blog->project_status == 'pending') : ?>

                                            <a href="#" class="btn btn-icon btn-info"><i class="ik ik-loader"></i></a>

                                            <?php elseif ($blog->project_status == 'draft') : ?>

                                            <a href="#" class="btn btn-icon btn-warning"><i
                                                    class="ik ik-file-minus"></i></a>

                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                    <?php $i++;
                                    } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Project Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Create</th>
                                        <th>Update</th>
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