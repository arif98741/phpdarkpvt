
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
						সিস্টেম অন/অফ
					</header>
					<div class="panel-body">
						<?php echo form_open('main/switch_system_action',array('role'=>'form'));?>
							<div class="form-group">				 
								<input type="radio" name="switch_system" value="off"  <?php if($user[0]->switch_system =='off'): ?> checked<?php endif;?>> সিস্টেম বন্ধ থাকবে<br>
								<input type="radio" name="switch_system" value="on" <?php if($user[0]->switch_system =='on'): ?> checked<?php endif;?>> সিস্টেম চালু থাকবে<br>
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
<!-- bootstrap -->
