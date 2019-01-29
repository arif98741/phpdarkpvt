
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
						নির্দেশনা
					</header>
					<div class="panel-body">
						<?php echo form_open('main/pay_rule_action',array('role'=>'form'));?>
				 	<div class="form-group">

								<textarea name="pay_rule" id="editor"  class="form-control" rows="4" cols="50"><?php echo $user[0]->pay_rule;?></textarea>
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
<script src="<?php echo base_url();?>assets/back/vendor/jquery/jquery.min.js"></script>
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>  
<script>
	 $(document).ready(function() {
	 		
	  tinymce.init({
	    selector: '#editor'
	  });
				
	 });
</script>		
	   