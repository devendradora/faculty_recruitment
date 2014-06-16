
<div class="row hidden-print hidden">
<ol class="breadcrumb">
		<li>
			<button type="button" class="btn btn-success btn-sm togglebtn" data-toggle="toggle">Toggle Navigation &lt;&gt;</button>
		</li>
		<li class="<?php echo (isset($current_page) && $current_page === "instructions")?"active":""; ?>">
			<?php
			$flag=0;
			if (isset($completed['instructions']) && $completed['instructions'] === true)
			$flag=1;
			?>
         	<a href="<?php echo base_url("recruitment/home/instructions"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

			Instructions
			</a>
		</span>
	</li>

	<li class="<?php echo (isset($current_page) && $current_page === "applypost")?"active":""; ?>">

		<?php
		$flag=0;
		if (isset($completed['applypost']) && $completed['applypost'] === true)
		$flag=1;
		?>
		<a href="<?php echo base_url("recruitment/home/applypost"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

		Application
		</a>
	</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "personal")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['personal']) && $completed['personal'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/personal"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Personal Information
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "educational")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['educational']) && $completed['educational'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/educational"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Educational Information
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "sponsored_projects")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['sponsored_projects']) && $completed['sponsored_projects'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/sponsored_projects"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Sponsored Projects
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "experience")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['experience']) && $completed['experience'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/experience"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Work Experience
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "research")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['research']) && $completed['research'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/research"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Visual Research Output
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "contributions")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['contributions']) && $completed['contributions'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/contributions"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Co-Curricular activities
	</a>
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "declaration")?"active":""; ?>">

	<?php
	$flag=0;
	if (isset($completed['fee_details']) && $completed['fee_details'] === true)
	$flag=1;
	?>
	<a href="<?php echo base_url("recruitment/home/fee_details"); ?>" <?php if($flag) echo 'style="color:green;"'; ?>>

	Fee details
	</a>
</span>
</li>
</ol>
</div>