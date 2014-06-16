<div class="container">
	<div class="row">
		<div class="form-inline pull-right">
		<div class="form-group">
		<input type="text" id="tag-text" name="searchtag" value="" placeholder="Enter the tag" class="form-control">
		</div>
		<div class="form-group">
		<button type="submit" id="search" class="form-control btn btn-primary">Search</button>
		</div>
		</div>
	</div>
	<div class="row">
		<div id="loading-overlay"><img src="<?php echo(IMG.'win2-loader.gif');?>" /></div>
		<div id="tags-content">
		<?php 
			foreach($tags as $row)
			{
				echo'<div class="col-md-2 col-sm-3 col-xs-6 tag-div">
						<div class="clearfix custom-background">
							<a href="#">'.$row->tag_details.'</a>
							<span class="pull-right">x&nbsp;'.$question_tags[$row->tag_id].'</span>
						</div>
					</div>';
			}
		?>
		</div>
	</div>
</div>
</div> <!-- wrapper closes -->
<script>

</script>