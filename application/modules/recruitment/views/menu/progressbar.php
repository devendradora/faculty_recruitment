<div class="row">
	<ol class="breadcrumb">
		<li class="<?php echo (isset($current_page) && $current_page === "instructions")?"active":""; ?>">
			<?php if (isset($completed['instructions']) && $completed['instructions'] === true)
			echo '<span class="text-success">';
			else
				echo '<span class="text-danger">';
			?>

			Instructions
		</span>
	</li>

	<li class="<?php echo (isset($current_page) && $current_page === "applypost")?"active":""; ?>">

		<?php if (isset($completed['applypost']) && $completed['applypost'] === true)
		echo '<span class="text-success">';
		else
			echo '<span class="text-danger">';
		?>
		Application
	</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "personal")?"active":""; ?>">

	<?php if (isset($completed['personal']) && $completed['personal'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Personal Information
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "educational")?"active":""; ?>">

	<?php if (isset($completed['educational']) && $completed['educational'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Educational Information
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "experience")?"active":""; ?>">

	<?php if (isset($completed['experience']) && $completed['experience'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Work Experience
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "research")?"active":""; ?>">

	<?php if (isset($completed['research']) && $completed['research'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Visual Research Output
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "contributions")?"active":""; ?>">

	<?php if (isset($completed['contributions']) && $completed['contributions'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Co-Curricular activities
</span>
</li>
<li class="<?php echo (isset($current_page) && $current_page === "declaration")?"active":""; ?>">

	<?php if (isset($completed['declaration']) && $completed['declaration'] === true)
	echo '<span class="text-success">';
	else
		echo '<span class="text-danger">';
	?>
	Declaration
</span>
</li>
</ol>
</div>