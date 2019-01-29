
		<!--sidebar end--> 																																				
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>dashboard">প্রচ্ছদ</a></li>
					<li><i class="icon_document_alt"></i>ইউজার</li>
					<li><i class="fa fa-file-text-o"></i>প্রোফাইল</li>
				</ol>
			</div>
		</div>
		
		<!-- Basic Forms & Horizontal Forms-->
		
		<div class="row">
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
						প্রোফাইল
					</header>
					<div class="panel-body">
					<?php echo form_open_multipart('main/updateprofile',array('role'=>'form'));?>
							
							
							
							<div class="form-group">
								<label for="exampleInputEmail1">প্রতিষ্ঠান প্রধান</label>
								<input type="text" class="form-control" name="organization_head" value="<?php echo $user[0]->organization_head;?>"  id="" placeholder=""
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">ই-মেইল</label>
								<input type="text" name="email"  value="<?php echo $user[0]->email;?>"  class="form-control" id="" placeholder="">
							</div>
							
							<div class="form-group">
								
								<label for="exampleInputFile">লগো</label>
								<input type="file" name="image"  class="form-control" id="" placeholder="">
							</div>
							
							<br>
							<button type="reset" class="btn btn-danger">রিসেট</button>
							<button type="submit" class="btn btn-success">সেভ</button>
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">স্বাক্ষর আপলোড</button>
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
<div id="myModal" class="modal fade" role="dialog">
			<?php echo form_open_multipart('main/updatesignature',array('role'=>'form'));?>
                             
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">স্বাক্ষর  সংযোজন</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
					
					<div class="row-fluid">
						
						<div class="form-group">
							
							<input name="signature" type="file"  class="span12">
							<br>
							<br>
							<button type="submit" class="btn btn-success" style="max-width: 100px" >আপলোড</button>
							
						</div>
					</div>
					
					
				</div>
			</div>		
		</div>	
	</form>
</div>﻿	