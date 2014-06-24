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
									Duration	
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
									<td>
									<?php 
									
									echo ($experience[$value.'-duration-years'][$key2] != '0')
										? $experience[$value.'-duration-years'][$key2].' years and ' : '';
									echo ($experience[$value.'-duration-months'][$key2] != '0')
									? $experience[$value.'-duration-months'][$key2].' months' : '';
									 ?>
									
									</td>

								</tr>
								<?php }  ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php }
			}
			?>
<div class="panel panel-default">
    <div class="panel-heading">Consolidated Non-overlapping Experience</div>
    <div class="panel-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>
                        Total experience
                    </th>
                    <th>
                        Duration
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>After award of Ph.D.</td>
                    <td>
                        <?php  echo ($experience['after_phd_exp_years'][$key2] != '0')
										? $experience['after_phd_exp_years'][$key2].' years and ' : '';
									echo ($experience['after_phd_exp_months'][$key2] != '0')
									? $experience['after_phd_exp_months'][$key2].' months' : '';
									?>
                    </td>
                    
                </tr>
                <tr>
                    <td>After M. Tech excluding PhD registration period.</td>
                    <td>
                    	<?php echo ($experience['after_mtech_exp_years'][$key2] != '0')
										? $experience['after_mtech_exp_years'][$key2].' years and ' : '';
									echo ($experience['after_mtech_exp_months'][$key2] != '0')
									? $experience['after_mtech_exp_months'][$key2].' months' : '';
						?>
                    </td>
                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>