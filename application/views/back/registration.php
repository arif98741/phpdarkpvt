
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bulk SMS Online">
		<meta name="keyword" content="explore, sms, bulk, bangladesh, school, college, attendance">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">
		<title>অনলাইন অ্যাডমিশন সিস্টেম | প্রতিষ্ঠান নিবন্ধন</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>assets/back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/css/jquery.dataTables.css">
		<!-- font icon -->
		<link href="<?php echo base_url();?>assets/back/css/elegant-icons-style.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/back/css/font-awesome.min.css" rel="stylesheet" />
		<!-- Custome -->
		<link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />
		<style>
			.login-form {
			max-width: 880px;
			margin: 80px auto 0;
			background: #d5d7de;
			}
			.login-form .input-group {
			padding-bottom: 5px;
			}
			
			.login-form .form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 5px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			}
		</style>
	</head>
	<body class="login-img3-body">
		
		<div class="container">
			<!-- <p>lorem10</p> -->
			
			<?php echo form_open_multipart('main/save_user',array('class'=>'login-form'));?>
				<div class="login-wrap">
					<p class="login-img" style="font-size:30px">অনলাইন অ্যাডমিশন সিস্টেম | প্রতিষ্ঠান নিবন্ধন </p><hr>
				<?php if($this->session->success): ?>

					<p class="login-img" id="message" style="font-size:20px"><?php echo $this->session->success; ?></p>
				<?php endif; ?>
				
				<?php if($this->session->error): ?>

					<p class="login-img" id="message" style="font-size:20px"><?php echo $this->session->error; ?></p>
				<?php endif; ?>
					
					
					
					<div class="container">
						<div class="row">
							
							<div class="col-sm">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home"></i></span>
									<input type="text" class="form-control" name="organization_name" placeholder="প্রতিষ্ঠানের নাম" required="" autofocus>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-star"></i></span>
									<input type="text" name="organization_head"  class="form-control" placeholder="প্রতিষ্ঠান প্রধানের নাম" required="" autofocus>
								</div>
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" name="upozila"  class="form-control" placeholder="উপজেলা" autofocus required="">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" name="dist"  class="form-control" placeholder="জেলা" autofocus required="">
								</div>
									<div class="input-group">
									
									<input type="file" name="image"  class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-sm">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" name="mobile"  class="form-control" placeholder="মোবাইল নম্বর">
								</div>
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" name="email"  class="form-control" placeholder="ইমেইল এড্রেস" autofocus>
								</div>
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" name="website"  class="form-control" placeholder="ওয়েব এড্রেস">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="username"  class="form-control" placeholder="ইউজার নেম" required="">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="icon_key_alt"></i></span>
									<input type="password" name="password"  class="form-control" placeholder="পার্সওয়ার্ড" required="">
								</div>
								
							</div>
							
						</div>
					</div>
					
					<hr>	
					
					<button class="btn btn-success btn-lg btn-block" type="submit">  <i class="fa fa-login"></i> নিবন্ধন সম্পূর্ণ</button>
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
			
		</html>
<script src="<?php echo base_url();?>assets/back/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(function(){
			
			$('#message').slideUp(600);
			
		},4000);
		
	});
</script>
		