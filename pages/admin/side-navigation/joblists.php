<table id="print-joblists-table" class="table table-condensed">
	<thead>
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Job Type</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		global $conn;
		$jpSql = "SELECT * FROM `employer_job_posted` WHERE 1 ORDER BY ID ASC  ";
		$jsResult = $conn->query($jpSql);
		$i = 0;
		if ($jsResult->num_rows > 0) {
			// output data of each row
			while($jpRow = $jsResult->fetch_assoc()) {
				$i++;
		?>
		<tr>
			<th><?php echo $i; ?></th>
			<td><?php echo $jpRow['com_name']; ?></td>
			<td><?php echo $jpRow['job_type']; ?></td>
			<td><?php echo $jpRow['status']; ?></td>
			<td><?php  
				if($jpRow['status'] == 'pending') {
					echo '<button class="approved-job" status="approved" job-id="'.$jpRow['job_id'].'">Approve</button>';
					echo '<button class="approved-job" status="disapproved" job-id="'.$jpRow['job_id'].'">Disapprove</button>';
				}
				else if($jpRow['status'] == 'approved') {
					// echo '<button class="approved-job" status="canceled" job-id="'.$jpRow['job_id'].'">Cancel</button>';
					echo '<button class="approved-job" status="disapproved" job-id="'.$jpRow['job_id'].'">Disapprove</button>';
				}
				else if($jpRow['status'] == 'disapproved') {
					echo '<button class="approved-job" status="approved" job-id="'.$jpRow['job_id'].'">Re-Approve</button>';
				}
				else {
					echo '<b>'.ucfirst($jpRow['status']).'</b>';
				}
			?></td>
		</tr> 
		<?php }} ?>												
	</tbody>
</table>
