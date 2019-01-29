
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::: Post Title: :::</title>
		<link rel="stylesheet " href="<?php echo base_url();?>assets/back/css/print.css">
	</head>
	<body>
		<div class="bt-div">
			<INPUT TYPE="button" class="button blue" title="Print" onClick="window.print()" value="প্রিন্ট">
					<button class="button blue" onclick="goBack()">পিছনে</button>
			<hr>
		Page size: A4		</div>
		<div class="wraper">
			<table width="100%">
				<tr>
					<td width="10%" height="82" align="left" valign="top"><a href="dashboard.php"><img src="<?php echo base_url(); ?>uploads/user/<?php echo $this->session->user_image;?>" class="img_div" width="80" height="80"  alt=""/></a></td>
					<td width="81%" align="left" valign="top">
						<h1 style="margin:0"><?php echo $this->session->user_organization;?></h1>
						<h3>আবেদন প্রতিবেদন</h3>
					<lable></lable></td>
					<td width="9%" align="right" valign="top" nowrap="nowrap">শ্রেণী: 
				  <strong><?php
									
						if( $class ==1)
						{
							echo "প্রথম";
						}else if($class ==2)
						{
							echo "দ্বিতীয়";
						}else if($class ==3)
						{
							echo "তৃতীয়";
						}else if($class ==4)
						{
							echo "চতুর্থ";
						}else if($class ==5)
						{
							echo "পঞ্চম";
						}else if($class ==6)
						{
							echo "ষষ্ঠ";
						}else if($class ==7)
						{
							echo "সপ্তম";
						}else if($class ==8)
						{
							echo " অষ্টম";
						}else if($class ==9)
						{
							echo "নবম";
						}else if($class ==10)
						{
							echo "দশম";
						}
						 ?></strong></td>
				</tr>
			</table>
		<br>
			<table width="100%" class="table">
				<tr>
					<th valign="top">ক্রমিক</th>
					<th valign="top">আবেদন নম্বর/ 
					   তারিখ/ কোটা</th>
					<th valign="top">ছাত্র-ছাত্রীর নাম /জন্ম তারিখ/ লিঙ্গ/ধর্ম</th>
					<th valign="top">পিতা/ মাতা<br></th>
					<th valign="top">ঠিকানা</th>
					<th valign="top">সর্বশেষ শিক্ষা প্রতিষ্ঠান</th>
					<th valign="top">জিপিএ/ রোল/ টিসি/ বদলী  নং</th>
					<th valign="top">মোবাইল</th>
					<th valign="top">ছবি</th>
				</tr>
				<?php $i = 1; foreach($applications as $application): ?>
				<tr>
					<td valign="top" nowrap="nowrap" style="font-family:SutonnyMJ; font-size:18px;"><?php echo $i;?></td>
					<td valign="top" nowrap="nowrap" ><span style="font-family:SutonnyMJ; font-size:18px;"><?php echo $application->application_number; ?></span>,<br> <?php echo $newDate = date("d-m-Y", strtotime($application->apply_date)); ; ?></span><br><?php echo $application->quota; ; ?></td>
					<td valign="top"><?php echo $application->stu_name; ?>,<br><span  style="font-family:SutonnyMJ; font-size:18px;">
				    <?php echo $newDate = date("d-m-Y", strtotime($application->birth)); ?></span>,<?php echo $application->gender; ?><br><?php echo $application->religion; ?></td>
					<td valign="top"><?php echo $application->father; ?>,<br> 
					<?php echo $application->mother; ?></td>
					<td valign="top" nowrap="nowrap"><?php echo $application->home; ?>, <?php echo $application->post; ?>, <?php echo $application->vill; ?>,<br>
					<?php echo $application->upozila; ?>, <?php echo $application->dist; ?></td>
					<td valign="top" nowrap="nowrap"><?php echo $application->last_institute; ?>,<br> 
					  <?php echo $application->last_institute_addr; ?></td>
					<td valign="top" nowrap="nowrap" style="font-family:SutonnyMJ; font-size:16px;"><?php echo $application->last_institute_gpa; ?>,<br>
					<?php echo $application->last_institute_roll; ?><br><?php echo $application->tcno; ?></td>
					<td valign="top" nowrap="nowrap" style="font-family:SutonnyMJ; font-size:18px;"><?php echo $application->mobile_father; ?>,<br>
				    <?php echo $application->mobile_mother; ?><br><?php echo $application->gurdian_mobile; ?></td>
					<td align="center" valign="top" nowrap="nowrap"><img src="<?php echo base_url();?>uploads/student/<?php echo $application->image; ?>" width="35" height="46"  alt=""/></td>
				</tr>
			<?php $i++; endforeach; ?>
			</table>
			<br>
			
		</p>											
		
		<div class="footer-text"><center>কারিগরি সহযোগীতায়: এক্সপ্লোর আইটি <center></div>
						<script>
			function goBack() {
				window.history.back();
			}
		</script>