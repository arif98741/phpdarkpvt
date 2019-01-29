
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="dashboard.php">ড্যাশবোর্ড</a></li>
					<li><i class="fa fa-file-text-o"></i> সেটিংস</li>
				</ol>
			</div>
		</div>
		<!-- Basic Forms & Horizontal Forms-->
		<div class="row">
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
						পরিক্ষার্থী সম্পাদনা
						<?php 
							$id = $this->uri->segments[2];
						?>
					</header>
					<div class="panel-body">
						<?php echo form_open_multipart('main/edit_student_action/'.$id,array('role'=>'form'));?>
							<div class="form-group">				 
								<input type="file" name="image" >
								
							</div>
							<hr>
							<button type="submit" class="btn btn-success">			<i class="fa fa-save"></i>   আপডেট  </button>
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