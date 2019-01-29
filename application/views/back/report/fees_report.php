
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
						<h1 style="margin:0"> <?php echo $this->session->user_organization;?></h1>
						<h3>ফিস প্রতিবেদন</h3>
				  </td>
				  <td width="9%" align="right" valign="middle" nowrap="nowrap" style="font-size:16px;">শ্রেণী:<strong> <?php
									
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
						 ?> </strong> <br></td>
				</tr>
			</table>
		<br>
		<table width="100%" class="table">
			<tr>
				<th nowrap="nowrap">আবেদন নম্বর</th>
				<th nowrap="nowrap">আবেদন তারিখ</th>
				<th nowrap="nowrap">ছাত্র-ছাত্রীর নাম</th>
				<th nowrap="nowrap">মোবাইল</th>
				<th nowrap="nowrap"> তারিখ</th>
				<th nowrap="nowrap">লেনদেন নম্বর</th>
				<th nowrap="nowrap">আবেদন ফি</th>
			</tr>
			<?php $i = 1; $total = 0; foreach($applications as $application): ?>
			<tr>
				<td nowrap="nowrap" style="font-family:SutonnyMJ; font-size:16px;"><?php echo $application->application_number; ?></td>
				<td valign="top" style="font-family:SutonnyMJ; font-size:16px; nowrap="nowrap"><?php echo $application->apply_date; ?></td>
				<td valign="top" nowrap="nowrap"><?php echo $application->stu_name; ?><br></td>
				<td valign="top" nowrap="nowrap" style="font-family:SutonnyMJ; font-size:16px;"><?php echo $application->mobile_father; ?></td>
				<td valign="top" ><?php echo $application->pay_date; ?></td>
				<td valign="top" >&nbsp;<?php echo $application->trans_id; ?></td>
				<td valign="top" style="font-family:SutonnyMJ; font-size:16px;"><?php echo $application->paid_amount; ?></td>
			</tr>
			<?php  $total += $application->paid_amount; ?>
			<?php $i++; endforeach; ?>
			<tr>
			  <td nowrap="nowrap" style="font-family:SutonnyMJ; font-size:16px;">&nbsp;</td>
			  <td valign="top" nowrap="nowrap">&nbsp;</td>
			  <td valign="top" nowrap="nowrap">&nbsp;</td>
			  <td valign="top" nowrap="nowrap" style="font-family:SutonnyMJ; font-size:16px;">&nbsp;</td>
			  <td valign="top" style="font-family:SutonnyMJ; font-size:16px;">&nbsp;</td>
			  <td valign="top" >মোট</td>
			  <td valign="top" style="font-family:SutonnyMJ; font-size:16px;"><?php echo $total;?></td>
		  </tr>
	    </table>
		<br>
			
		</p>											
		
		<div class="footer-text"><center>কারিগরি সহযোগীতায়: এক্সপ্লোর আইটি <center></div>
<script>
			function goBack() {
				window.history.back();
			}
		</script>