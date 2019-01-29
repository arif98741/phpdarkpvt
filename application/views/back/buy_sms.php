
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>dashboard">ড্যাশবোর্ড</a></li>
					<li><i class="fa fa-file-text-o"></i>এসএমএস ক্রয়</li>
				</ol>
			</div>
		</div>
		<!-- Basic Forms & Horizontal Forms-->
		 
		<div class="row">
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
						এসএমএস ক্রয়
					</header>
					<div class="panel-body">
						<?php echo form_open('main/buy_sms_action',array('role'=>'form'));?>
							<div class="form-group">
								<label for="exampleInputEmail1">কত গুলো এসএমএস সংগ্রহ করতে চান ?</label>
								<input type="number" name="sms_amount" class="form-control" id="" placeholder="">
							</div>
						 	<div class="form-group">
								<label for="exampleInputEmail1">মোট (এসএমএস প্রতি ২/-)</label>
								<input type="number" name="sms_payment" class="form-control" id="" placeholder=""><br>
								<div class="alert alert-info">বিকাশ পার্সনাল নম্বর: 01777615690</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">লেনদেন নম্বর</label>
								<input type="text" name="trans_id" class="form-control" id="" placeholder="">
							</div>
							<br>
							<button type="reset" class="btn btn-danger">রিসেট</button>
							<button type="submit" class="btn btn-success">			আর্ডার করুন</button>
						</form>
					</div>
				</section>
			</div>
		</div>
		<!-- Inline form-->
	</section>
</section>
<!--main content end-->
<!-- bootstrap -->
