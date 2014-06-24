<h3 class="text-primary text-center">
	<span>Educational Information</span>
</h3>
<div class="row clearfix">
	<div class="col-md-12 column">
		<h4>
			Schooling ( X<sup>th</sup> <i>or</i> XII <sup>th</sup> equivalent)
		</h4>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>Certificate</th>
					<th>Board/University</th>
					<th>Year of Passing</th>
					<th>Percentage/CGPA</th>

				</tr>
			</thead>
			<tbody>

				<?php

				foreach ($education['schooling_certificate'] as $key => $value) {
					$count=$key+1;
					?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $education['schooling_boardu'][$key] ?></td>
						<td><?php echo $education['schooling_yopass'][$key] ?></td>
						<td><?php echo $education['schooling_percentage'][$key] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h4>
				Undergraduation
			</h4>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>Certificate</th>
						<th>Branch</th>
						<th>Board/University</th>
						<th>Year of Passing</th>
						<th>Class/Divison</th>
						<th>Percentage/CGPA</th>

					</tr>
				</thead>
				<tbody>

					<?php

					foreach ($education['undergraduation_degree'] as $key => $value) {
						$count=$key+1;
						?>
						<tr>
							<td><?php echo $count; ?></td>
							<td><?php echo $value; ?></td>
							<td><?php echo $education['undergraduation_subject'][$key] ?></td>
							<td><?php echo $education['undergraduation_boardu'][$key] ?></td>
							<td><?php echo $education['undergraduation_yopass'][$key] ?></td>
							<td><?php echo $education['undergraduation_division'][$key] ?></td>
							<td><?php echo $education['undergraduation_score'][$key] ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php
		if(isset($education['masters_degree'])){ ?>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h4>
					Masters
				</h4>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>
								#
							</th>
							<th>Degree</th>
							<th>Branch</th>
							<th>Specialization</th>
							<th>Board/University</th>
							<th>Year of Passing</th>
							<th>Class/Division</th>
							<th>Percentage/CGPA</th>

						</tr>
					</thead>
					<tbody>
						<?php

						foreach ($education['masters_degree'] as $key => $value) {
							$count=$key+1;
							?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $value; ?></td>
								<td><?php echo $education['masters_subject'][$key] ?></td>
								<td><?php echo $education['masters_specialization'][$key] ?></td>
								<td><?php echo $education['masters_boardu'][$key] ?></td>
								<td><?php echo $education['masters_yopass'][$key] ?></td>
								<td><?php echo $education['masters_division'][$key] ?></td>
								
								<td><?php echo $education['masters_score'][$key] ?></td>
							</tr>
							<?php }  ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
			<?php
			if(isset($education['phd_month_year'])){ ?>

			<div class="row clearfix">
				<div class="col-md-12 column">
					<h4>
						Ph.D(Awarded)
					</h4>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>Month &amp; Year of Award</th>
								<th>University/Institution</th>
								<th>Department</th>
								<th>Title of Thesis</th>

							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($education['phd_month_year'] as $key => $value) {
								$count=$key+1;
								?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $value; ?></td>
									<td><?php echo $education['phd_awarded_institution'][$key] ?></td>
									<td><?php echo $education['phd_awarded_department'][$key] ?></td>
									<td><?php echo $education['phd_thesis'][$key] ?></td>
								</tr>
								<?php }  ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php } ?>
				<?php
				if(isset($education['phd_dor'])){ ?>

				<div class="row clearfix">
					<div class="col-md-12 column">
						<h4>
							Ph.D(Pursuing)
						</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>Date of Registration</th>
									<th>University/Institution</th>
									<th>Department</th>
									<th>Synopsis submission status</th>
									<th>Thesis submission status</th>

								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($education['phd_dor'] as $key => $value) {
									$count=$key+1;
									?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo $value; ?></td>
										<td><?php echo $education['phd_pursuing_institution'][$key] ?></td>
										<td><?php echo $education['phd_pursuing_department'][$key] ?></td>
										<td>
											<?php 
												if ($education['phd_submission_synopsis'][$key]=="Yes")
													echo "Submitted on ";
												else
													echo "Not Submitted";
											?>
											<?php echo 
											$education['phd_submission_synopsis'][$key]=="Yes"
											? $education['phd_synopsis_submission'][$key] : '';
											 ?>
										</td>
										<td>
											<?php 
											if ($education['phd_submission_thesis'][$key]=="Yes")
													echo "Submitted on ";
												else
													echo "Not Submitted";
											?>
											<?php echo 
											$education['phd_submission_thesis'][$key]=="Yes"
											? $education['phd_thesis_submission'][$key] : '';
											 ?>
											
										</td>
									</tr>
									<?php }  ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php } ?>