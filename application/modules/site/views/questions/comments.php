<?php
echo '<div class="comment comment-body clearfix">
	<img alt="" src="'.IMG.'user.png'.'" class="avatar avatar-35 photo" height="35" width="35">      
	<div class="comment-author vcard">
		<a href="">'.$commented_by->firstname.'&nbsp;'.$commented_by->lastname.'</a>
	</div>
		<div class="comment-meta commentmetadata">
			<span class="comment-date">'.$comment->comment_date.'</span>
		</div>
	<div class="comment-inner">
		<p>'.$comment->comment_detail.'</p>
	</div>
	</div>';
?>