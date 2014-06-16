<div class="row hidden-print">
	<div class="bs-callout bs-callout-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<p class="text-center">Your application form is successfully submitted.</p>
	</div>
	<!-- <div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<p class="text-center">Your application form is successfully submitted.</p>
	</div> -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<strong>Click here for viewing the application form in new tab</strong>&nbsp;
		<a role="button" href="<?php echo base_url("recruitment/main/generate_preview"); ?>" class="btn btn-default btn-sm" target="_blank">Print</a>		
	</div>
	<!-- <legend class="text-center">Application preview</legend class="text-center"> -->
</div>
<div class="row">
	<iframe style="width: 100%;
	height: 500px;" src="<?php echo base_url("recruitment/main/generate_preview"); ?>" frameborder="0"></iframe>
</div>