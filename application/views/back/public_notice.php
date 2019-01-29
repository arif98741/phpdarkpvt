
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>dashboard">ড্যাশবোর্ড</a></li>
					<li><i class="fa fa-file-text-o"></i>পাবলিক নোটিশ</li>
				</ol>
			</div>
		</div>
		<!-- Basic Forms & Horizontal Forms-->
		 
		<div class="row">
			<div class="col-lg-8">
				<section class="panel">
					<header class="panel-heading">
						পাবলিক নোটিশ
					</header>
					<div class="panel-body">
						<?php echo form_open('main/public_notice_action',array('role'=>'form'));?>
							<div class="form-group">
								<label for="exampleInputEmail1">প্রদর্শনের সময়সীমা(পর্যন্ত)</label>
								<input type="date" name="notice_end"  value="<?php echo $notice[0] ->notice_end; ?>" class="form-control" id="" placeholder="">
							</div>
						 	<div class="form-group">
								<label for="exampleInputEmail1">নোটিশ কালার</label>
								<input type="text" name="notice_color" value="<?php echo $notice[0] ->notice_color; ?>" class="form-control" id="" placeholder="">
								
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">নোটিশের বিষয়বস্তু</label>
								<textarea name="notice_details" class="form-control" id="" placeholder=""><?php echo $notice[0]->notice_details; ?></textarea><br>
								
							</div>
							
							<br>
							<button type="reset" class="btn btn-danger">রিসেট</button>
							<button type="submit" class="btn btn-success">			আপডেট</button>
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
