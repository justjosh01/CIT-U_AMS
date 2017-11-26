<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td colspan="5" align="center"><b>tbl_events (EVENTS TABLE)</b></td>
	</tr>
	<tr>
		<td>ID</td>
		<td>Transaction ID</td>
		<td>ALUMNI ID</td>
		<td>Quote</td>
		<td>Status</td>
	</tr>

	<?php foreach ($data['events'] as $key => $value) { ?>
	
	<tr>
		<td><?=$value['id'];?></td>
		<td><?=($value['announcements_id']);?></td>
		<td><?=$value['alumni_id'];?></td>
		
	</tr>
		 
	<?php } ?>
	 
</table>