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
			<h3 class="text-center text-primary">
				Application Details
			</h3>

		</div>
		<div class="row clearfix">

			<div class="col-md-6 column">
				<div class="row">
					<label class="col-md-6">Fee Amount:</label>
					<span class="col-md-6"><?php echo $applypost['fee_amount']; ?></span>
				</div>
				<div class="row">
					<label class="col-md-6">Mode of Payment:</label>
					<span class="col-md-6">
						<?php 
						switch ($applypost['mode']) {
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
					<span class="col-md-6"><?php echo $applypost['transaction_no']; ?></span>
				</div>

			</div>
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
							case 'AP9':
							echo 'Associoate porfessor (AGP9000)';
							break;
							case 'PRF':
							echo 'Professor (AGP10000)';
							break;
						}
						?>
					</span>
				</div>
				<div class="row">
					<label class="col-md-6">Application for the post of:</label>
					<span class="col-md-6">
						<?php  
						switch($applypost['application_dept'])
						{
							case '1':
							echo 'Civil Engineering';
							break;
							case '2':
							echo 'Electrical Engineering';
							break;
							case '3':
							echo 'Mechanical Engineering';
							break;
							case '4':
							echo 'Electronics and Communication engineering';
							break;
							case '5':
							echo 'Metallurgical and Materials Engineering';
							break;
							case '6':
							echo 'Chemical Engineering';
							break;
							case '7':
							echo 'Computer Science and Engineering';
							break;
							case '8':
							echo 'Biotechnology';
							break;
							case '9':
							echo 'Mathematics';
							break;
							case '10':
							echo 'Physics';
							break;
							case '11':
							echo 'Chemistry';
							break;
							case '12':
							echo 'School of management';
							break;
							case '13':
							echo 'Humanities and social sciencies';
							break;
							case '14':
							echo 'Training and Placement Center';
							break;
						}
						?>
					</span>
				</div>

			</div>
		</div>
		<h3 class="text-center text-primary">
			Personal Details
		</h3>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<?php 
				unset($personal['proceed']);
				foreach ($personal as $key => $value) {
					if($key=='category')
						break;
					?>
					<div class="row">
						<label class="col-md-6"><?php echo $personal_lang[$key]; ?></label>
						<span class="col-md-6"><?php echo $value ?></span>
					</div>
					<?php } ?>

					<div class="row">
						<label class="col-md-6">Category</label>
						<span class="col-md-6"><?php 
							switch ($personal['category']) {
								case '0':
								echo 'OP';
								break;
								case '1':
								echo 'OB-NCL';
								break;
								case '2':
								echo "SC/ST";
								break;
							}

							?></span>
						</div>
						<div class="row">
							<label class="col-md-6">Special category PDA</label>
							<span class="col-md-6"><?php 
								switch ($personal['spcl_cat_pda']) {
									case '0':
									echo 'No';
									break;
									case '1':
									echo 'Yes';
									break;
								}

								?></span>
							</div>
						</div>
					</div>
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
												<td><?php echo $education['undergraduation_branch'][$key] ?></td>
												<td><?php echo $education['undergraduation_boardu'][$key] ?></td>
												<td><?php echo $education['undergraduation_yopass'][$key] ?></td>
												<td><?php echo $education['undergraduation_percentage'][$key] ?></td>
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
													<td><?php echo $education['masters_branch'][$key] ?></td>
													<td><?php echo $education['masters_specialization'][$key] ?></td>
													<td><?php echo $education['masters_boardu'][$key] ?></td>
													<td><?php echo $education['masters_yopass'][$key] ?></td>
													<td><?php echo $education['masters_cgpa'][$key] ?></td>
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
														<th>Date of submission of Synopsis</th>
														<th>Date of submission of Thesis</th>

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
															<td><?php echo $education['phd_submission_synopsis'][$key] ?></td>
															<td><?php echo $education['phd_submission_thesis'][$key] ?></td>
														</tr>
														<?php }  ?>
													</tbody>
												</table>
											</div>
										</div>
										<?php } ?>
										<?php 
										if(isset($experience['teaching-institution']) || 
											isset($experience['organization-institution']) ||
											isset($experience['industry-institution']) 
											) {?>
											<h3 class="text-primary text-center">
												<span>Experience</span>
											</h3>
											<?php } ?>
											<?php
											foreach ($tables['experience'] as $key => $value) { 
												if(isset($experience[$value.'-institution'])){
													?>
													<div class="row clearfix">
														<div class="col-md-12 column">
															<h4>
																<?php echo $key; ?>
															</h4>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>
																			#
																		</th>
																		<th>
																			Name of Institution
																		</th>
																		<th>
																			Position
																		</th>
																		<th>
																			Date of Joining(DOJ)
																		</th>
																		<th>
																			Date of Leaving(DOL)
																		</th>
																		<th>
																			Years and Months
																		</th>

																	</tr>
																</thead>
																<tbody>
																	<?php 	
																	foreach ($experience[$value.'-institution'] as $key2 => $value2) {
																		$count=$key2+1;
																		?>
																		<tr>
																			<td><?php echo $count; ?></td>
																			<td><?php echo $value2; ?></td>
																			<td><?php echo $experience[$value.'-position'][$key2] ?></td>
																			<td><?php echo $experience[$value.'-doj'][$key2] ?></td>
																			<td><?php echo $experience[$value.'-dol'][$key2] ?></td>
																			<td><?php echo $experience[$value.'-duration'][$key2] ?></td>
																		</tr>
																		<?php }  ?>
																	</tbody>
																</table>
															</div>
														</div>
														<?php }
													}
													?>

													<!-- Research -->
													<?php unset($research['proceed']);
													if(!empty($research)){
														if($all_saved_files!=FALSE)
															$saved_files_data=$all_saved_files->result_array();
														?>
														
														<h3 class="text-primary text-center">
															<span>Visual Research Output Record</span>
														</h3>

														<?php } ?>
														<?php if(isset($research['phd-SCI-journal-coauthors'])){ ?>		
														<h4 class="text-primary">
															<b>Publications from out of PhD work</b>
														</h4>
														<div class="row clearfix">
															<div class="col-md-12 column">
																<h4>
																	SCI journal publications  <span class="label label-danger"><?php echo sizeof($research['phd-SCI-journal-coauthors']) ?></span>
																</h4>
																<table class="table table-bordered">
																	<thead>
																		<tr>
																			<th>
																				#
																			</th>
																			<th>
																				#Co-authors
																			</th>
																			<th>
																				Title
																			</th>
																			<th>
																				Name Of Journal
																			</th>

																			<th>Vol &amp; Issue</th>                    
																			<th>Year of publication</th>
																			<th>
																				#Citations
																			</th>
																			<th>
																				Impact Factor
																			</th>
																			<th>
																				SCI Journal Sl No
																			</th>
																			<th>Upload pdf</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php 
																		
																		foreach ($research['phd-SCI-journal-coauthors'] as $key2 => $value2) {
																			$count=$key2+1;
																			?>
																			<tr>
																				<td><?php echo $count; ?></td>
																				<td><?php echo $value2; ?></td>
																				<td><?php echo $research['phd-SCI-journal-title'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-name'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-vol'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-year'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-citations'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-impact'][$key2] ?></td>
																				<td><?php echo $research['phd-SCI-journal-SCI-no'][$key2] ?></td>
																				<td>
																					<?php 
																					for ($i=0; $i < sizeof($saved_files_data); $i++) { 
																						
																						if($saved_files_data[$i]['pdf_col']=='phd-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
																							echo $saved_files_data[$i]['original_name'];
																					}
																					?>
																				</td>


																			</tr>
																			<?php }  ?>
																		</tbody>
																	</table>
																</div>
															</div>								
															<?php } ?>
															<?php if(isset($research['phd-non-SCI-journal-coauthors'])){ ?>		

															<div class="row clearfix">
																<div class="col-md-12 column">
																	<h4>
																		Journal publications in journals with impact factor(other than listed above)  <span class="label label-danger"><?php echo sizeof($research['phd-non-SCI-journal-coauthors']) ?></span>
																	</h4>
																	<table class="table table-bordered">
																		<thead>
																			<tr>
																				<th>
																					#
																				</th>
																				<th>
																					#Co-authors
																				</th>
																				<th>
																					Title
																				</th>
																				<th>
																					Name Of Journal
																				</th>

																				<th>Vol &amp; Issue</th>
																				<th>Year of publication</th>
																				<th>
																					#Citations
																				</th>
																				<th>
																					Impact Factor
																				</th>
																				<th>Upload pdf</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php 	
																			
																			foreach ($research['phd-non-SCI-journal-coauthors'] as $key2 => $value2) {
																				$count=$key2+1;
																				?>
																				<tr>
																					<td><?php echo $count; ?></td>
																					<td><?php echo $value2; ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-title'][$key2] ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-name'][$key2] ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-vol'][$key2] ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-year'][$key2] ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-citations'][$key2] ?></td>
																					<td><?php echo $research['phd-non-SCI-journal-impact'][$key2] ?></td>
																					<td>
																						<?php 
																						for ($i=0; $i < sizeof($saved_files_data); $i++) { 

																							if($saved_files_data[$i]['pdf_col']=='phd-non-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
																								echo $saved_files_data[$i]['original_name'];
																						}
																						?>
																					</td>


																				</tr>
																				<?php }  ?>
																			</tbody>
																		</table>
																	</div>
																</div>								
																<?php } ?>
																<!-- outside phd-->
																<?php if(isset($research['phd-outside-SCI-journal-coauthors'])){ ?>		
																<h4 class="text-primary">
																	<b>Publications outside Phd work</b>
																</h4>
																<div class="row clearfix">
																	<div class="col-md-12 column">
																		<h4>
																			<?php echo 'SCI journal publications'; ?> <span class="label label-danger"><?php echo sizeof($research['phd-outside-SCI-journal-coauthors']) ?></span>
																		</h4>
																		<table class="table table-bordered">
																			<thead>
																				<tr>
																					<th>
																						#
																					</th>
																					<th>
																						#Co-authors
																					</th>
																					<th>
																						Title
																					</th>
																					<th>
																						Name Of Journal
																					</th>
																					<th>Vol &amp; Issue</th>
																					<th>Year of publication</th>
																					<th>
																						#Citations
																					</th>
																					<th>
																						Impact Factor
																					</th>
																					<th>
																						SCI Journal Sl No
																					</th>
																					<th>Upload pdf</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 	
																				
																				foreach ($research['phd-outside-SCI-journal-coauthors'] as $key2 => $value2) {
																					$count=$key2+1;
																					?>
																					<tr>
																						<td><?php echo $count; ?></td>
																						<td><?php echo $value2; ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-title'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-name'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-vol'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-year'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-citations'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-impact'][$key2] ?></td>
																						<td><?php echo $research['phd-outside-SCI-journal-SCI-no'][$key2] ?></td>
																						<td>
																							<?php 
																							for ($i=0; $i < sizeof($saved_files_data); $i++) { 

																								if($saved_files_data[$i]['pdf_col']=='phd-outside-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
																									echo $saved_files_data[$i]['original_name'];
																							}
																							?>
																						</td>


																					</tr>
																					<?php }  ?>
																				</tbody>
																			</table>
																		</div>
																	</div>								
																	<?php } ?>
																	<?php if(isset($research['phd-outside-non-SCI-journal-coauthors'])){ ?>		

																	<div class="row clearfix">
																		<div class="col-md-12 column">
																			<h4>
																				Journal publications in journals with impact factor(other than listed above) <span class="label label-danger"><?php echo sizeof($research['phd-outside-non-SCI-journal-coauthors']); ?></span>
																			</h4>
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>
																							#
																						</th>
																						<th>
																							#Co-authors
																						</th>
																						<th>
																							Title
																						</th>
																						<th>
																							Name Of Journal
																						</th>
																						<th>Vol &amp; Issue</th>
																						<th>Year of publication</th>
																						<th>
																							#Citations
																						</th>
																						<th>
																							Impact Factor
																						</th>
																						<th>Upload pdf</th>
																					</tr>
																				</thead>
																				<tbody>
																					<?php 	
																					
																					foreach ($research['phd-outside-non-SCI-journal-coauthors'] as $key2 => $value2) {
																						$count=$key2+1;
																						?>
																						<tr>
																							<td><?php echo $count; ?></td>
																							<td><?php echo $value2; ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-title'][$key2] ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-name'][$key2] ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-vol'][$key2] ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-year'][$key2] ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-citations'][$key2] ?></td>
																							<td><?php echo $research['phd-outside-non-SCI-journal-impact'][$key2] ?></td>
																							<td>
																								<?php 
																								for ($i=0; $i < sizeof($saved_files_data); $i++) { 

																									if($saved_files_data[$i]['pdf_col']=='phd-outside-non-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
																										echo $saved_files_data[$i]['original_name'];
																								}
																								?>
																							</td>


																						</tr>
																						<?php }  ?>
																					</tbody>
																				</table>
																			</div>
																		</div>								
																		<?php } ?>
																		<!-- Publications oustide phd work -->
																		<?php 
																		$temp_publications=
																		array(
																			'hard-copy-peer-journal' =>'Peer reviewed journals(Hard Copy)' ,
																			'soft-copy-peer-journal'=>'Peer reviewed journals(Soft Copy)',
																			'conference-journal'=>'Conference papers published in the form of proceedings'

																			);
																		
																		foreach ($temp_publications as $key => $value) {
																			if(isset($research[$key.'-coauthors'])){	

																				?>
																				<div class="row clearfix">
																					<div class="col-md-12 column">
																						<h4>
																							<?php echo $value; ?> <span class="label label-danger"><?php echo sizeof($research[$key.'-coauthors']) ?></span>
																						</h4>
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th>
																										#
																									</th>
																									<th>
																										#Co-authors
																									</th>
																									<th>
																										Title
																									</th>
																									<th>
																										Name Of Journal
																									</th>
																									<th>Vol &amp; Issue</th>
																									<th>Year of publication</th>
																									<th>
																										#Citations
																									</th>
																									<th>
																										Impact Factor
																									</th>
																									<th>Upload pdf</th>
																								</tr>
																							</thead>
																							<tbody>
																								<?php 	
																								
																								foreach ($research[$key.'-coauthors'] as $key2 => $value2) {
																									$count=$key2+1;
																									?>
																									<tr>
																										<td><?php echo $count; ?></td>
																										<td><?php echo $value2; ?></td>
																										<td><?php echo $research[$key.'-title'][$key2] ?></td>
																										<td><?php echo $research[$key.'-name'][$key2] ?></td>
																										<td><?php echo $research[$key.'-vol'][$key2] ?></td>
																										<td><?php echo $research[$key.'-year'][$key2] ?></td>
																										<td><?php echo $research[$key.'-citations'][$key2] ?></td>
																										<td><?php echo $research[$key.'-impact'][$key2] ?></td>
																										<td>
																											<?php 
																											for ($i=0; $i < sizeof($saved_files_data); $i++) { 

																												if($saved_files_data[$i]['pdf_col']==$key && $saved_files_data[$i]['idx']==$key2)
																													echo $saved_files_data[$i]['original_name'];
																											}
																											?>
																										</td>


																									</tr>
																									<?php }  ?>
																								</tbody>
																							</table>
																						</div>
																					</div>
																					<?php } } ?>
																					<?php if(isset($research['book-coauthors'])){ ?>
																					<div class="row clearfix">
																						<div class="col-md-12 column">
																							<h4>
																								<?php echo 'Books/Chapter writing'; ?> <span class="label label-danger"><?php echo sizeof($research['book-coauthors']); ?></span>
																							</h4>
																							<table class="table table-bordered">
																								<thead>
																									<tr>
																										<th>
																											#
																										</th>
																										<th>
																											Number of coauthors
																										</th>
																										<th>
																											B/C
																										</th>
																										<th>
																											Title
																										</th>
																										<th>
																											Publisher
																										</th>
																										<th>
																											Year of publication
																										</th>
																									</tr>
																								</thead>
																								<tbody>
																									<?php 	
																									foreach ($research['book-coauthors'] as $key2 => $value2) {
																										$count=$key2+1;
																										?>
																										<tr>
																											<td><?php echo $count; ?></td>
																											<td><?php echo $value2; ?></td>
																											<td><?php echo $research['book-bc'][$key2] ?></td>
																											<td><?php echo $research['book-title'][$key2] ?></td>
																											<td><?php echo $research['book-publisher'][$key2] ?></td>
																											<td><?php echo $research['book-year'][$key2] ?></td>


																										</tr>
																										<?php }  ?>
																									</tbody>
																								</table>
																							</div>
																						</div>
																						<?php } ?>
																						<?php if(isset($research['patents-group-or-organization'])){ ?>
																						<div class="row clearfix">
																							<div class="col-md-12 column">
																								<h4>
																									<?php echo 'Books/Chapter writing'; ?> <span class="label label-danger"><?php echo sizeof($research['patents-group-or-organization']); ?></span>
																								</h4>
																								<table class="table table-bordered">
																									<thead>
																										<tr>
																											<th>
																												#
																											</th>
																											<th>
																												Individual group/Organization
																											</th>
																											<th>
																												Name
																											</th>
																											<th>
																												Year of award
																											</th>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 	
																										foreach ($research['patents-group-or-organization'] as $key2 => $value2) {
																											$count=$key2+1;
																											?>
																											<tr>
																												<td><?php echo $count; ?></td>
																												<td><?php echo $value2; ?></td>
																												<td><?php echo $research['patents-name'][$key2] ?></td>
																												<td><?php echo $research['patents-year-of-award'][$key2] ?></td>



																											</tr>
																											<?php }  ?>
																										</tbody>
																									</table>
																								</div>
																							</div>
																							<?php } ?>						
																							<!-- Contributions -->
																							<h3 class="text-primary text-center">
																								<span>Contributions to Curricular/Co-curricular activities</span>
																							</h3>
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
																								<?php 
																								$temp_FDP=array(
																									'attended'=>'Faculty development programs attended',
																									'conducted'=>'Faculty development programs conducted as coordinator',
																									'FDP-faculty'=>'Faculty in FDP organized within Institution',
																									'FDP-invited-faculty'=>'Invited faculty in FDP organized outside Institution'
																									);
																								foreach ($temp_FDP as $key => $value) {
																									if(isset($contributions[$key.'-organization'])){
																										?>
																										<div class="row clearfix">
																											<div class="col-md-12 column">
																												<h4>
																													<?php echo $value; ?> <span class="label label-danger"><?php echo sizeof($contributions[$key.'-organization']); ?></span>
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
																															<?php }  ?>
																														</tbody>
																													</table>
																												</div>
																											</div>
																											<?php } } ?>					
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
																														<span><strong><?php echo $place_date['place']; ?></strong></span>
																													</div>

																												</div>
																												<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																													<div class="row">
																														<label class="col-md-6">Date:</label>
																														<span><strong><?php echo $place_date['date']; ?></strong></span>
																													</div>
																												</div>
																											</div>



																										</div>
																										<!-- row end -->
																									</div>
																									<script>
																										//window.print();
																									</script>
<!-- container end -->