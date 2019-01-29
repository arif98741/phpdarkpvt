
		<!--sidebar end--> 																																				<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>dashboard">ড্যাশবোর্ড</a></li>
					<li><i class="fa fa-file-text-o"></i> সেটিংস</li>
				</ol>
			</div>
		</div>
		<!-- Basic Forms & Horizontal Forms-->
		<div class="row">
			<div class="col-lg-8">
				<section class="panel">
					<header class="panel-heading">
						আবেদন ফি
					</header>
					<div class="panel-body">
						<?php echo form_open('main/apply_fee_action',array('role'=>'form'));?>
				 	<div class="form-group">

								<input name="apply_fee" style="max-width: 200px;" class="form-control" value="<?php echo $user[0]->fee_amount;?>">
							</div>
					 
							<hr>
							<button type="submit" class="btn btn-success">			<i class="fa fa-save"></i>   সেভ  </button>
						</form>
					</div>
				</section>
			</div>
		</div>
		<!-- Inline form-->
	</section>
</section>
<!--main content end-->
