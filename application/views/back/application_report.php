
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>dashboard">ড্যাশবোর্ড</a></li>
					<li><i class="fa fa-file-text-o"></i> অনুমোদিত আবেদন </li>
				</ol>
			</div>
		</div>
		<!-- Basic Forms & Horizontal Forms-->
		<div class="row">
		
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
					অনুমোদিত আবেদন 
					</header>
					<div class="panel-body">
						 <?php echo form_open('management/application_report_action',array('role'=>'form'));?>
							<div class="form-group">
								<label for="exampleInputEmail1">শ্রেণী উল্লেখ করুন</label>
								<select name="class" id="" class="form-control">
									<option value="" disabled selected>শ্রেণী নির্বাচন করুন</option>
									<option value="1">প্রথম</option>
									<option value="2">দ্বিতীয়</option>
									<option value="3" >তৃতীয়</option>
									<option value="4" >চতুর্থ</option>
									<option value="5" >পঞ্চম</option>
									<option value="6" >ষষ্ঠ</option>
									<option value="7" >সপ্তম</option>
									<option value="8" >অষ্টম</option>
									<option value="9" >নবম</option>
									<option value="10" >দশম</option>
									
								</select>
							</div>
							<br>
							<button type="reset" class="btn btn-danger">রিসেট</button>
							<button type="submit" class="btn btn-success">			<i class="fa fa-print"></i>   প্রিন্ট  </button>
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

