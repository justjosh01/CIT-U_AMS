<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td colspan="5" align="center"><b>tbl_admins (ADMINS TABLE)</b></td>
	</tr>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Email Address</td>
		<td>Date Forgot Password</td>
		<td>status</td>
		
	</tr>

	<?php foreach ($data['admins'] as $key => $value) { ?>
	
	<tr>
		<td><?=$value['id'];?></td>
		<td><?=strtolower($value['name']);?></td>
		<td><?=$value['email'];?></td>
		<td><?=$value['date_forgot_password'];?></td>
		<td>

		<?php

		if($value['active']==1){
			echo 'active';
		}else{
			echo "<a target='_blank' href='".URL_ROOT."admins/verify_email/".$value['token']."'>activate</a>";
		}

		?>
			


		</td>
	</tr>
		 
	<?php } ?>
	 
</table>