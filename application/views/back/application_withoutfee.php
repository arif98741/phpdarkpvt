
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
						<i class="fa fa-pencil"></i>  চলমান আবেদন সমূহ
					</header>
					<div class="panel-body">
		<table id="example" class="display dt-responsive nowrap" style="width:100%">
							<thead>
								<tr>
									<th>আবেদন নম্বর</th>
									<th>ছাত্র/ছাত্রীর নাম</th>
									<th>পিতার নাম</th>
									<th>মাতার নাম</th>
									<th>ভর্তি ইচ্ছুক শ্রেণী </th>
									<th>তারিখ</th>
									<th>--</th>
								</tr>
							</thead>
							
							<tfoot>
							</tfoot>
							
							<tbody>
							<?php foreach($applications as $application): ?>
								<tr>
									<td style="font-family:SutonnyMJ; font-size:18px;"><?php echo $application->application_number; ?></td>
									<td><?php echo $application->stu_name; ?></td>
									<td><?php echo $application->father; ?></td>
									<td><?php echo $application->mother; ?></td>
									<td><?php
									
									if( $application->class ==1)
									{
										echo "প্রথম";
									}else if($application->class ==2)
									{
										echo "দ্বিতীয়";
									}else if($application->class ==3)
									{
										echo "তৃতীয়";
									}else if($application->class ==4)
									{
										echo "চতুর্থ";
									}else if($application->class ==5)
									{
										echo "পঞ্চম";
									}else if($application->class ==6)
									{
										echo "ষষ্ঠ";
									}else if($application->class ==7)
									{
										echo "সপ্তম";
									}else if($application->class ==8)
									{
										echo " অষ্টম";
									}else if($application->class ==9)
									{
										echo "নবম";
									}else if($application->class ==10)
									{
										echo "দশম";
									}
									 ?>
									
									</td>
									<td style="font-family:SutonnyMJ; font-size:18px;"> <?php echo $application->date; ?></td>
									 
									<td><button type="submit" class="btn btn-warning" onclick="window.location='<?php echo base_url();?>confirmation/<?php echo $application->apply_id; ?>'">	<i class="fa fa-search"></i></button> 
									
									<button type="button" class="btn btn-danger"  onclick="window.location='<?php echo base_url();?>management/delete_apply/<?php echo $application->apply_id; ?>'" ><i class="fa fa-trash-o" onclick="return(confirm('সত্যি ডিলিট করতে চান?'))"></i>  </button></td>
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
<script src="<?php echo base_url();?>?assets/back/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>?assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url();?>?assets/back/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--dataTables-->
<script src="<?php echo base_url();?>?assets/back/js/scripts.js"></script>
 <script  src="<?php echo base_url();?>?assets/back/js/datatable.js"></script>
</html>
<script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
