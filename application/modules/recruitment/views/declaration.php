<div class="row">
	<form class="form-horizontal" name="declaration_form" action="<?php echo base_url("recruitment/fee/final_submit");?>" method="POST" role="form">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php
				if($this->session->flashdata('other') == TRUE)
					echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
				?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a role="button" href="<?php echo base_url("recruitment/contributions"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
			<button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
		</div>
		<div class="clearfix"></div>
		<br>
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
			<br>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="place">Place*</label>
					<div class="col-sm-10">
						<input type="text" name="place" class="form-control input-sm" required>
					</div>
				</div>

			</div>
			<div class="col-md-4">

			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="date">Date*</label>
					<div class="col-sm-10">
						<input type="date" placeholder="MM/DD/YYYY" name="date" class="form-control input-sm" required>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<br>
			<br>
			<div class="col-md-4 col-md-offset-1">
				<a role="button" class="btn btn-info btn-block" href="<?php echo base_url("recruitment/main/generate_preview"); ?>" target="_blank">Preview application</a>
			</div>
			<div class="col-md-4 col-md-offset-1">

				<!-- <button type="submit" class="btn btn-primary btn-block">Final Submission</button> -->
				<!-- Button trigger modal -->

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
			document.declaration_form.place.value='<?php echo $saved_data['place'] ?>';
			document.declaration_form.date.value='<?php echo $saved_data['date'] ?>';
			<?php } ?>
		</script>