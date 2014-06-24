<div class="container" style="border:1px solid;">
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

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h4 class=""><b>Application Number </b> : <span class="text-info"> <?php echo $application_no; ?> </span></h4>

		</div>
		<h3 class="text-center text-primary">
			Application Details
		</h3>

	</div>
	<br>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<table class="table">
			<tbody>
				<tr>
					<td class="col-md-9">
						<div class="row">
							<label>Application for the post of:</label>
							<span>
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
							<label>Department</label>
							<span>
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
							<label>Specialization</label>
							<span>
								<?php
								echo $applypost['specialization'];
								?>
							</span>
						</div>
					</td>
					<td class="col-md-3">
						<div  column>
							<img  src="<?php echo base_url('uploads/'.$photograph_name); ?>" width=180 height=200 alt="Photograph">
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<h3 class="text-primary text-center">
		<span>Fee Payment Details</span>
	</h3>
	<!-- Fee Details -->
	<div class="row clearfix">

		<div class="col-md-6 column">
			<div class="row">
				<label class="col-md-6">Fee Amount:</label>
				<span class="col-md-6"><?php 
					if(isset($category))
					{
						if($category == 0 || $category == 1) {
							echo "Rs 500";
						} else {
							echo "Rs 200";
						}
					} ?></span>
			</div>
			<div class="row">
				<label class="col-md-6">Name of the bank:</label>
				<span class="col-md-6"><?php echo $fee_details['name_branch']; ?></span>
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