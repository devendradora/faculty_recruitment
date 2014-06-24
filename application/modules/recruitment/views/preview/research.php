<!-- Research -->
<?php unset($research['proceed']);
if(!empty($research)){
	// if($all_saved_files!=FALSE)
	// 	$saved_files_data=$all_saved_files->result_array();
	?>

	<h3 class="text-primary text-center">
		<span>Publications</span>
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
						<!-- <th>Upload pdf</th> -->
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
							<!-- <td>
								<?php
								// for ($i=0; $i < sizeof($saved_files_data); $i++) {

								// 	if($saved_files_data[$i]['pdf_col']=='phd-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
								// 		echo $saved_files_data[$i]['original_name'];
								// }
								?>
							</td> -->


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
							<!-- <th>Upload pdf</th> -->
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
								<!-- <td>
									<?php
									// for ($i=0; $i < sizeof($saved_files_data); $i++) {

									// 	if($saved_files_data[$i]['pdf_col']=='phd-non-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
									// 		echo $saved_files_data[$i]['original_name'];
									// }
									?>
								</td> -->


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
								<!-- <th>Upload pdf</th> -->
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
									<!-- <td>
										<?php
										// for ($i=0; $i < sizeof($saved_files_data); $i++) {

										// 	if($saved_files_data[$i]['pdf_col']=='phd-outside-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
										// 		echo $saved_files_data[$i]['original_name'];
										// }
										?>
									</td>
 -->

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
									<!-- <th>Upload pdf</th> -->
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
										<!-- <td>
											<?php
											// for ($i=0; $i < sizeof($saved_files_data); $i++) {

											// 	if($saved_files_data[$i]['pdf_col']=='phd-outside-non-SCI-journal' && $saved_files_data[$i]['idx']==$key2)
											// 		echo $saved_files_data[$i]['original_name'];
											// }
											?>
										</td> -->


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
												<!-- <th>Upload pdf</th> -->
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
													<!-- <td>
														<?php
														// for ($i=0; $i < sizeof($saved_files_data); $i++) {

														// 	if($saved_files_data[$i]['pdf_col']==$key && $saved_files_data[$i]['idx']==$key2)
														// 		echo $saved_files_data[$i]['original_name'];
														// }
														?>
													</td> -->


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