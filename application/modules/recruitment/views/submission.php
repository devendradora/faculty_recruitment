<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php
		if($this->session->flashdata('other') == TRUE)
			echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
		?>
	</div>
</div>


	<form class="form-horizontal" name="fee_details_form" action="<?php echo base_url("recruitment/submission/final_submit");?>" method="POST" role="form">
 
				<!-- Displaying declaration -->
		<div class="form-group">
			<div class="col-sm-12">
				<p class="text-justify">
					<center> <input type="checkbox" required> I hereby solemnly declare that the information furnished in previous forms is true and correct
					and I am responsible for the veracity of the same </center>
				</p>
			</div>
		</div>
		<div class="form-group"></div>

		<!-- DIsplaying place field -->
		<div class="form-group">
			<label class="col-sm-3 control-label" for="place">Place*</label>
			<div class="col-sm-3">
				<input type="text" name="place" class="form-control input-sm" required />
			</div>
		</div>

		<!-- displaying date field -->
		<div class="form-group">
			<label class="col-sm-3 control-label" for="date">Date(mm/dd/yyyy)*</label>
			<div class="col-sm-3">
				<input type="date" placeholder="MM/DD/YYYY" name="date" class="form-control input-sm" required>
			</div>
		</div>

		<!-- Displaying preview button -->
		<div class="col-md-4 col-md-offset-1">
			<a role="button" class="btn btn-info btn-block" href="<?php echo base_url("recruitment/main/generate_preview"); ?>" target="_blank">Preview application</a>
		</div>
		<!-- displaying submit button -->
		<div class="col-md-4 col-md-offset-1">
			<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">
				Submit
			</button>
		</div>
 


		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
					</div>
					<div class="modal-body">
						<p class="text-danger">
							Please preview the application form and make necessary changes.
							You cannot go back after you clicked on <strong>Final Submission</strong>.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Final Submission</button>
					</div>
				</div>
			</div>
		</div>
 </form>
<script>

	<?php if(isset($saved_data)) { ?>
		document.fee_details_form.place.value='<?php echo $saved_data['place'] ?>';
		document.fee_details_form.date.value='<?php echo $saved_data['date'] ?>';	
	<?php } ?>
</script> 