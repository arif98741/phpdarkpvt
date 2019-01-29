
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bulk SMS Online">
    <meta name="keyword" content="explore, sms, bulk, bangladesh, school, college, attendance">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">
    <title>explore SMS</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <!-- font icon -->
    <link href="<?php echo base_url();?>assets/back/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/back/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custome -->
    <link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />

  </head>
<body class="login-img3-body">

  <div class="container">
    <?php echo form_open('main/login',array('class'=>'login-form'));?>
    <!-- <form class="login-form" > -->
      <div class="login-wrap">
        <p class="login-img">অনলাইন অ্যাডমিশন সিস্টেম</p>
		
        <?php if($this->session->success): ?>
		     <p class="" id ="message" style="font-size: 16px"><?php echo $this->session->success;?></p>
        <?php endif; ?>
		
		 <?php if($this->session->error): ?>
		     <p class=""  id ="message"  style="font-size: 16px"><?php echo $this->session->error;?></p>
        <?php endif; ?>
		
		
		
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus required="">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> মনে রাখুন
                <span class="pull-right"> <a href="#"> পার্সওয়ার্ড ভুলে গেছেন?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">লগইন</button>
       
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <center><br>
          কারিগরি সহযোগিগতায় <a style="color:yellow; padding:10px;" href="http://exploreit.com.bd/">এক্সপ্লোর আইটি | +88 017 7761 5690</a>
      <center>
        </div>
    </div>
  </div>


</body>
<script src="<?php echo base_url();?>assets/back/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(function(){
			
			$('#message').slideUp(600);
			
		},4000);
		
	});
</script>
		

</html>
