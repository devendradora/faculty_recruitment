<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php
		if($this->session->flashdata('other') == TRUE)
			echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
		?>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a role="button" href="<?php echo base_url("recruitment/contributions"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
		<button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
	</div>
</div>

<div class="row">
	<form class="form-horizontal" name="fee_details_form" action="<?php echo base_url("recruitment/fee/final_submit");?>" method="POST" role="form">

		<br>
		<legend>Application Fee Details</legend>
		<!-- Displaying bank -->
		<div class="form-group">
			<label for="transaction" class="col-md-3 control-label">Name of the Bank*</label>
			<div class="col-md-9">
				<input type="text" class="form-control input-sm" name="name_bank" value="<?php echo set_value('name_bank'); ?>" required/>
			</div>
		</div>
		<!-- Displaying branch -->
		<div class="form-group">
			<label for="transaction" class="col-md-3 control-label">Name of the Branch *</label>
			<div class="col-md-9">
				<input type="text" class="form-control input-sm" name="name_branch" value="<?php echo set_value('name_branch'); ?>" required/>
			</div>
		</div>
		<!-- Displaying fee amount -->
		<div class="form-group">
			<label for="fee" class="control-label col-md-3">Fee Amount *</label>
			<div class="col-md-9">
				<p class="text-info lead">
					<?php
					if(isset($category))
					{
						if($category == 0 || $category == 1) {
							echo "Rs 500";
						} else {
							echo "Rs 200";
						}
					}?>
				</p>
				<input type="hidden" name="fee_amount" value="<?php
					if(isset($category))
					{
						if($category == 0 || $category == 1) {
							echo "Rs 500";
						} else {
							echo "Rs 200";
						}
					}?>"/>
			</div>
		</div>
		<!-- Displaying Mode of Payment -->
		<div class="form-group">
			<label for="inputMode" class="control-label col-md-3">Mode of Payment *</label>
			<div class="col-md-9">
				<select name="mode" id="inputMode" class="form-control input-sm" required="required">
					<option value="" >Select option</option>
					<option value="1" <?php echo set_select('mode', '1'); ?> >DD</option>
					<option value="2" <?php echo set_select('mode', '2'); ?> >Online</option>
				</select>
			</div>
		</div>
		<!-- Displaying transaction number -->
		<div class="form-group">
			<label for="transaction" class="control-label col-md-3">DD no/Transaction no *</label>
			<div class="col-md-9">
				<input type="text" class="form-control input-sm" id="transaction" name="transaction_no" value="<?php echo set_value('transaction_no'); ?>" required/>
			</div>
		</div>
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
</div>
<script>
	<?php if(isset($saved_data)) { ?>
		document.fee_details_form.place.value='<?php echo $saved_data['place'] ?>';
		document.fee_details_form.date.value='<?php echo $saved_data['date'] ?>';
	    document.fee_details_form.mode.value='<?php echo $saved_data['mode']; ?>';
	    document.fee_details_form.transaction_no.value='<?php echo $saved_data['transaction_no']; ?>';
		document.fee_details_form.name_branch.value='<?php echo $saved_data['name_branch']; ?>';
		document.fee_details_form.name_bank.value='<?php echo $saved_data['name_bank']; ?>';
		<?php } ?>
</script>