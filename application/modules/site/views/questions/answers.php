<?php 
echo '<div class="panel panel-danger each-ans" id="'.$ans->ans_id.'">
		<div class="panel-body">
				<article class="" style="padding:10px 10px 10px 10px;">
			'.$ans->ans_detail.'
				</article>
		</div>
  <div class="panel-footer clearfix">
	<div class="col-md-4">
	  	<ul class="list-inline" style="padding:0px;">
				<li class="icons">
					<image class="img-circle links" src="'.IMG.'thumbs_up.png'.'" height="30px" width="30px" onClick="like_answer('.$ans->ans_id.');"/>
				</li>
				<li>
					<span class="badge up" id="answerl'.$ans->ans_id.'">'.$ans->likes.'</span>
				</li>
				<li class="icons">
					<image class="img-circle links" src="'.IMG.'thumbs_down.png'.'" height="30px" width="30px" onClick="dislike_answer('.$ans->ans_id.');"/>
				</li>
				
		</ul>
	</div>
  	<div class="col-md-8">
	  	<p class="text-right">
			answered by <a href="'.URL_HOME.'profile/'.$answered_by->firstname.'" style="font-size: 16px;font-style: oblique; text-decoration: none;">'.$answered_by->firstname.'&nbsp;'.$answered_by->lastname.'</a>
			on <span style="color:#6D2B2B;">'.$ans->ans_date.'</span>
		</p>
	</div>
 </div>';
 if($numrows>0)
  {		
  echo '<div class="panel panel-default comments" id="comments_section">
			<div class="panel-heading links" id="toggle-comment-box'.$ans->ans_id.'">
				Comments
			</div>
			<div id="comments-boxes'.$ans->ans_id.'" class="well">';
  }
?>
