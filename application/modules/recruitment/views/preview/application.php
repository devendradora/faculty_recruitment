<div class="container" style="border:1px dotted;padding:1%;">
	<div class="row clearfix">

		<div class="row">
			<table class="table">
				<tbody>
					<tr>
						<td>
							<img src="<?php echo base_url('assets/images/nitw.png'); ?>" />
						</td>
						<td>
							<h2 class="text-center">
								Faculty Recruitment Application
							</h2>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="clearfix">
			<h3 class="text-right"><b>Application Number </b> : <span class="text-info"><?php echo $applypost['application_dept'].$applypost['application_post'][2]; ?></span></h3>
			<h3 class="text-center text-primary">
				Application Details
			</h3>

		</div>
		<br>
		<div class="row">
			<div class="col-md-6 column">
				<div class="row">
					<label class="col-md-6">Application for the post of:</label>
					<span class="col-md-6">
						<?php
						switch ($applypost['application_post']) {
							case 'AP6':
							echo 'Assistant professor on contract (AGP6000)';
							break;
							case 'AP7':
							echo 'Assistant professor (AGP7000)';
							break;
							case 'AP8':
							echo 'Assistant professor (AGP8000)';
							break;
							// case 'AP9':
							// echo 'Associoate porfessor (AGP9000)';
							// break;
							// case 'PRF':
							// echo 'Professor (AGP10000)';
							// break;
						}
						?>
					</span>
				</div>
				<div class="row">
					<label class="col-md-6">Department</label>
					<span class="col-md-6">
						<?php
						switch($applypost['application_dept'])
						{
							case "BT": echo 'Biotechnology';break;
							case "CH": echo 'Chemical Engineering';break;
							case "CY": echo 'Chemistry';break;
							case "CE": echo 'Civil Engineering';break;
							case "CS": echo 'Computer Science & Engineering';break;
							case "EE": echo 'Electrical Engineering';break;
							case "EC": echo 'Electronics and Communication Engineering';break;
							case "HS": echo 'Humanities and Social Sciences';break;
							case "MA": echo 'Mathematics';break;
							case "ME": echo 'Mechanical Engineering';break;
							case "MM": echo 'Metallurgical and Materials Engineering';break;
							case "PH": echo 'Physics';break;
							case "SM": echo 'School of Management';break;
						}
						?>
					</span>
				</div>
				<div class="row">
					<label class="col-md-6">Specialization</label>
					<span class="col-md-6">
						<?php
						echo $applypost['specialization'];
						?>
					</span>
				</div>
			</div>
			<div class="col-md-6" column>
				<center>
					<div id="imagePreview" align="center" class="" style="background-image: url(http://localhost/faculty_recruitment/uploads/<?php echo $photograph_name ?>);">

					</div>
				</center>
			</div>

		</div>
		<h3 class="text-primary text-center">
			<span>Fee Payment Details</span>
		</h3>
		<!-- Fee Details -->
		<div class="row clearfix">

			<div class="col-md-6 column">
				<div class="row">
					<label class="col-md-6">Fee Amount:</label>
					<span class="col-md-6"><?php echo $fee_details['fee_amount']; ?></span>
				</div>
				<div class="row">
					<label class="col-md-6">Mode of Payment:</label>
					<span class="col-md-6">
						<?php
						switch ($fee_details['mode']) {
							case '1':
							echo 'DD';
							break;
							case '2':
							echo 'Online';
							break;
						}
						?>
					</span>
				</div>
				<div class="row">
					<label class="col-md-6">Transaction Number:</label>
					<span class="col-md-6"><?php echo $fee_details['transaction_no']; ?></span>
				</div>

			</div>
		</div>