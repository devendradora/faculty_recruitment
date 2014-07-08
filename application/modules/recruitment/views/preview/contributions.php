<!-- Contributions -->
<h3 class="text-primary text-center">
	<span>Contributions to Curricular/Co-curricular activities</span>
</h3>

<?php
$temp_FDP=array(
	'seminar-attended'=>'Seminar\'s/Conference\'s conducted',
	'seminar-conducted'=>'Seminar\'s/Conference\'s attended',
	'attended'=>'Faculty development programs attended',
	'conducted'=>'Faculty development programs conducted as coordinator',
	'FDP-faculty'=>'Faculty in FDP organized within Institution',
	'FDP-invited-faculty'=>'Invited faculty in FDP organized outside Institution'
	);
foreach ($temp_FDP as $key => $value) {
?>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h4>
				<?php echo $value; ?>
				<span class="label label-danger">
					<?php echo isset($contributions[$key.'-organization'])?sizeof($contributions[$key.'-organization']):'0'; ?>
				</span>
			</h4>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Organization
						</th>
						<th>
							Program
						</th>
						<th>
							Year
						</th>
						<th>
							Duration
						</th>
						<th>
							Sponsoring
						</th>
						<th>
							Agency
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
				if(isset($contributions[$key.'-organization'])) {
					foreach ($contributions[$key.'-organization'] as $key2 => $value2) {
						$count=$key2+1;
						?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $value2; ?></td>
						<td><?php echo $contributions[$key.'-program'][$key2] ?></td>
						<td><?php echo $contributions[$key.'-year'][$key2] ?></td>
						<td><?php echo $contributions[$key.'-duration'][$key2] ?></td>
						<td><?php echo $contributions[$key.'-sponsor'][$key2] ?></td>
						<td><?php echo $contributions[$key.'-agency'][$key2] ?></td>
					</tr>
				<?php
					}
				} else {
				?>
					<tr>
						<td colspan="9">
							<center>
								<i>NIL</i>
							</center>
						</td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
<?php } ?>


<div class="row">
	<label class="col-md-6">Member of BOS of universities:</label>
	<span class="col-md-6"><?php
		switch ($contributions['BOS_member']) {
			case '1':
			echo 'Yes';
			break;

			case '0':
			echo 'No';
			break;

		}

		?></span>
</div>

				<!-- Awards and Medals -->
<div class="row clearfix">
	<div class="col-md-12 column">
		<h4>
			Awards / Medals awarded
			<span class="label label-danger">
				<?php echo isset($contributions['medals-awarded-name'])?sizeof($contributions['medals-awarded-name']):'0'; ?>
			</span>
		</h4>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Name of the award / Medal
					</th>
					<th>
						Issuing Organization
					</th>
					<th>
						Date of Issue
					</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(isset($contributions['medals-awarded-name'])) {
				foreach ($contributions['medals-awarded-name'] as $key2 => $value2) {
					$count=$key2+1;
					?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $value2; ?></td>
					<td><?php echo $contributions['medals-awarded-organization'][$key2] ?></td>
					<td><?php echo $contributions['medals-awarded-date'][$key2] ?></td>

				</tr>
			<?php
				}
			} else {
			?>
				<tr>
					<td colspan="4">
						<center>
							<i>
								NIL
							</i>
						</center>
					</td>
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
</div>
<!-- Contributions End -->
<div class="clearfix"></div>
<br>

<!-- Declaration -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<legend>Declaration:</legend>
	<h4>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

		</div>
		<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
			<p class="text-justify">
				I hereby solemnly declare that the information furnished in previous forms is true and correct
				and I am responsible for the veracity of the same.
			</p>
		</h4>
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="col-md-6  col-lg-6 col-sm-12 col-xs-12">
		<div class="row">
			<label class="col-md-6">Place:</label>
			<span><strong><?php echo $fee_details['place']; ?></strong></span>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="row">
			<label class="col-md-6">Date:</label>
			<span><strong><?php echo $fee_details['date']; ?></strong></span>
		</div>
	</div>
</div>
<!-- End of declaration -->


	</div>
	<!-- row end -->
</div>