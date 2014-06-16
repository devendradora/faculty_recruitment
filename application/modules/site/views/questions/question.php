<div class="container" style="">
<div class="row">
	<div class="col-md-9">		
	<div class="panel panel-info">
		 <div class="panel-heading">
		 	<ul class="list-inline">
				<li>
				<image class="img-circle" src="<?php echo (IMG.'q.png');?>" height="40px" width="40px"/> 
				<a href="<?php echo (URL_HOME.'question_page/'.$result->q_id);?>"><span class="lead"><?php echo $result->q_brief;?></span></a>
				</li>
				<li class="pull-right">
					Answers <span class="badge q_no_ans"><?php echo $result->no_of_answers;?></span>
				</li>
			</ul>
		 </div>
		  <div class="panel-body">
			<article style="padding:10px 10px 10px 10px;">
					<?php echo $result->q_detail; ?>
			</article>
		  </div>
		  <div class="panel-footer clearfix">
		  	<div class="col-md-6">
		  	<ul class="list-inline" style="padding:0px;" id="like_question_box">
					<li class="icons">
						<a><image data-type="q" data-id="<?php echo $result->q_id; ?>" class="like img-circle links" src="<?php echo (IMG.'thumbs_up.png');?>" height="30px" width="30px"/></a>
					</li>
					<li>
						<span class="badge up" id="question_likes" ><?php echo $result->votes; ?></span>
					</li>
					<li class="icons">
						<a><image data-type="q" data-id="<?php echo $result->q_id; ?>" class="dislike img-circle links" src="<?php echo (IMG.'thumbs_down.png');?>" height="30px" width="30px"/></a>
					</li>
					<!-- <li>
						<span class="badge down"></span>
					</li> -->
			</ul>
			<div class="alert response-question hide text-info">
					<span class="glyphicon glyphicon-ok text-danger"></span> &nbsp;Thanks for the feedback <span class="text-warning">(votes: <span class="count"><?php echo $result->votes; ?></span></span>)
			</div>
			</div>
			<div class="col-md-6"><p class="text-right">
				asked by <a href="<?php echo(URL_HOME.'profile/'.$user_asked->firstname); ?>" style="font-size: 16px;font-style: obliq; text-decoration: none;"><?php echo ($user_asked->firstname.'&nbsp;'.$user_asked->lastname); ?></a>
				on <span style="color:#6D2B2B;"><?php echo $result->q_date; ?></span>
			</p>
		</div>
			</div>
		</div>
</div>
<div class="col-md-3" style="">
		<div class="panel panel-info">
			<div class="panel-heading">
				Tags
			</div>
			<div class="panel-body list-group">
				<a href="" class="list-group-item">c++</a>
				<a href="" class="list-group-item">java</a>
				<a href="" class="list-group-item">tag</a>
			</div>
		</div>
</div>
</div>
	<!-- Answers Div -->
<?php if($result->no_of_answers>0)
echo '<div class="row">
<div class="col-md-9" id="answers"> 
	<div id="answers-title" class="well">
		<h4><span class="badge q_no_ans">'.$result->no_of_answers.'</span>&nbsp;Answers</h4>
	</div>';
?>