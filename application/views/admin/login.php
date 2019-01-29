<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Panel - PHPDark</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/node_modules/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/node_modules/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/theme.min.css">
        <script src="<?php echo base_url();?>assets/admin/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <?php if($this->session->success): ?>
             <p class="" id ="message" style="font-size: 16px"><?php echo $this->session->success;?></p>
        <?php endif; ?>
      

        <div class="auth-wrapper">
            <div class="container " style="max-width: 400px; margin: 0 auto;">
               
                  
                    <div class=" ">
                        <div class="authentication-form mx-auto">
                            <div class="">
                                <h1><i class="icon ion-logo-tux"></i>&nbsp;Admin Panel</h1>
                            </div>
                            <?php if($this->session->error): ?>
                            <div class="alert bg-danger alert-danger text-white" id="message" role="alert">
                                          Username/Password Not Matched!
                                        </div>
                            <?php endif; ?>
                           <?php echo form_open('admin/login',array('class'=>'login-form'));?>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required=">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                              
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme" type="submit">Sign In</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/admin/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/admin/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/node_modules/screenfull/dist/screenfull.js"></script>
        <script src="<?php echo base_url();?>assets/admin/dist/js/theme.js"></script>
        <script>
            $(document).ready(function() {
                setTimeout(function () {
                    $('#message').slideUp(700);
                },3000);
            });
        </script>
        
    </body>
</html>
