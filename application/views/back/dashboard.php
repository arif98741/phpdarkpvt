
			<!--header end-->
			<!--sidebar start-->
		
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!--overview start-->
		<div class="row">
			<?php if($this->session->success): ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<p class="alert alert-success" id="message"><?php echo $this->session->success?></p>
			
			</div>
			<?php endif; ?>

			<?php if($this->session->error): ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<p class="alert alert-error" id="message"><?php echo $this->session->error?></p>
			</div>
			<?php endif; ?>



			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

				<div class="info-box blue-bg">
					<i class="fa fa-pencil"></i>
					<div class="count" style="font-family:SutonnyMJ; font-size:25px;"><?php echo $total_withoutfee;?></div>
					<div class="title">ফি ছাড়া আবেদন</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box green-bg">
					<i class="fa fa-check-circle"></i>
					<div class="count" style="font-family:SutonnyMJ; font-size:25px;"><?php echo $total_withfee;?></div>
					<div class="title">ফি সহ আবেদন</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box blue-bg">
					<i class="fa fa-ban"></i>
					<div class="count" style="font-family:SutonnyMJ; font-size:25px;"><?php echo $total_apply;?></div>
					<div class="title">মোট আবেদন</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box green-bg">
					<i class="fa fa-money "></i>
					<div class="count" style="font-family:SutonnyMJ; font-size:25px;"><?php echo $total_receive[0]->total_receive;?></div>
					<div class="title">সর্বমোট ফিস গ্রহন</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
		</div>
		<!--/.row-->
	</div>
