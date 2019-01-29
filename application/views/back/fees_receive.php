
		<!--sidebar end--> 																																				<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" rel="stylesheet">
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- Basic Forms & Horizontal Forms-->
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
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<i class="fa fa-check-circle"></i>   ফিস গ্রহন 
					</header>
					<div class="panel-body">
						<table id="example" class="table table-striped table-hover dt-responsive nowrap" style="width:100%">
							<thead>
								<tr>
									<th>আবেদন নম্বর</th>
									<th>ছাত্র/ছাত্রীর নাম</th>
									<th>লেনদেন তারিখ</th>
									<th>লেনদেন নম্বর</th>
									<th>---</th>
									 
								</tr>
							</thead>
							<tfoot>
							</tfoot>
							<tbody>
								<?php foreach($applications as $application): ?>
								<tr>
									<td style="font-family:SutonnyMJ; font-size:18px;"><?php echo $application->application_number; ?></td>
									<td><?php echo $application->stu_name; ?></td>
								 
								 
									<td style="font-family:SutonnyMJ; font-size:18px;"> <?php echo $application->pay_date; ?></td>
									<td><?php echo $application->trans_id; ?></td>
									<td>
									<button type="button" class="btn btn-primary" onclick="window.location='<?php echo base_url();?>management/verify_payment/<?php echo $application->apply_id; ?>'" > <i class="fa fa-check-circle"></i>  গ্রহন  </button> 
									<button type="button" class="btn btn-danger" onclick="window.location='<?php echo base_url();?>management/delete_apply/<?php echo $application->apply_id; ?>'"> <i class="fa fa-remove"></i>  বাতিল  </button></td>
						 
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</section>
			</div>
		</div>
		<!-- Inline form-->
	</section>
</section>
<!--main content end-->
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<!-- bootstrap -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--dataTables-->
<script src="js/scripts.js"></script>
 <script  src="js/datatable.js"></script>
</html>
<script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
