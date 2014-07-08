<h3 class="text-primary text-center">
	<span>Sponsored Projects</span>
	<hr>
</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>
				#
			</th>
			<th>Agency</th>
			<th>Co-Investigator (if any)</th>
			<th>Title of the Project</th>
			<th>Date of Sanction</th>
			<th>Amount Sanctioned</th>
			<th>Status</th>

		</tr>
	</thead>
	<tbody>

<?php
if (isset($sponsored['sponsored_agency'])) {
	$count = 1;
	foreach ($sponsored['sponsored_agency'] as $key => $value) {
?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $value; ?></td>
			<td><?php echo $sponsored['sponsored_coinvestigator'][$key]; ?></td>
			<td><?php echo $sponsored['sponsored_title'][$key]; ?></td>
			<td><?php echo $sponsored['sponsored_date_of_sanction'][$key]; ?></td>
			<td><?php echo $sponsored['sponsored_amount'][$key]; ?></td>
			<td><?php echo $sponsored['sponsored_status'][$key]; ?></td>

		</tr>

<?php
		$count++;
	}
} else {
	?>
	<tr>
		<td colspan="7">
			<center><i>NIL</i></td></center>
	</tr>
	<?php
}
?>
	</tbody>
</table>