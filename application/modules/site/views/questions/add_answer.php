<?php 
if($result->no_of_answers>0){
	echo '<div id="show_more" class="" style="display: none;">
		<p class="text-center">Show More Answers&nbsp; &nbsp;<span id="loading"><img src="'.IMG.'ajax-loader.gif'.'" alt="Loading...."></span></p>
</div>
</div>
</div>
';
}
?>
<!-- Answers Div End -->
<!-- Answering part-->
<div class="row">
	<div class="row">
		<div class="col-md-9">
		<button id="answer-button" class="btn btn-info">
			<span class="glyhicon glyphicon-plus" style="font-size: 16px;"></span>
			&nbsp;Add your answer</button>
		</div>
	</div>
	<div class="col-md-9" id="your-answer" style="display: none;">
					<div class="panel panel-default" style="font-size: x-large;">
						<div class="panel-heading">
						Your Answer:
						<div id="myNicPanel" style=""></div>
						</div>
					<!-- This div will be used to display the editor contents. -->
						<div class="panel-body" id="editorcontents">
						<textarea name="ques" cols="120" rows="5" required class="ckeditor form-control" id="question" title="Your answer"></textarea>
						</div>
						<div class="just_button">
						<button onclick="" class="btn btn-default">Post Answer</button>
						</div>
					</div>	
	</div>
	  
</div>
</div>