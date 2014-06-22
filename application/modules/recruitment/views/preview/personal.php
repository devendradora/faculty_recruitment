<h3 class="text-center text-primary">
	Personal Details
</h3>
<div class="row clearfix">
	<div class="col-md-12 column">
		<?php
		unset($personal['proceed']);
		foreach ($personal as $key => $value) :
			if($key=='category')
				break;
			?>
			<div class="row">
				<label class="col-md-6"><?php echo $personal_lang[$key]; ?></label>
				<span class="col-md-6"><?php echo $value ?></span>
			</div>
		<?php endforeach; ?>

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

					?>
				</span>
				
			</div>
			<?php if($personal['category']=='1'): ?>
			<div class="row">
				<label class="col-md-6">Category certificate issue Date</label>
				<span class="col-md-6">
					<?php echo $personal['category_cert_doi']; ?>
				</span>
			</div>
		<?php endif; ?>
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

					?>
				</span>
			</div>
			<?php if($personal['spcl_cat_pda']=='1'): ?>
			<div class="row">
				<label class="col-md-6">Special category PDA certificate issue Date</label>
				<span class="col-md-6">
					<?php echo $personal['pda_cert_doi']; ?>
				</span>
			</div>
		<?php endif; ?>
		</div>
	</div>