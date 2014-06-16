<?php
if($numrows>0)
	echo '</div></div>';
	echo '</div>';
if($logged)
{
echo '<div class="clearfix add_comment">
			<button class="btn btn-default display_comment_box" id="comment-box'.$ans->ans_id.'-butt" data-buttonid="#comment-box'.$ans->ans_id.'-butt" data-boxid="#comment-box'.$ans->ans_id.'"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comment</button>
	<div class="col-md-12 clearfix comment-box" id="comment-box'.$ans->ans_id.'" style="display:none;">
		<div class="col-md-2 col-xs-2">
			<img class="img-responsive" src="'.IMG.'Profile_icon.jpg'.'" alt="">
		</div>
		<div class="col-md-10 col-xs-10">
			<textarea class="form-control" id="comment-text'.$ans->ans_id.'" style=""></textarea>
			<button class="btn btn-default">Post Comment</button>
		</div>
	</div>
</div>';
echo "<hr>";
}
else{
	echo '<div class="row">
<div class="panel panel-default">
	<div class="panel-heading">
	Please <a href="'.URL_HOME.'login'.'">Sign-in</a> to post comment.
	</div>
</div>
</div>';
}
?>