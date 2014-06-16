<div class="container">
<div class="row">
<div class="col-md-8" id="content">
    <h3 >Ask question</h3>
		<hr>
		<form id="ask_question" method="post" action="<?php echo (URL_HOME.'submit_question');?>" onsubmit="return validate();">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter title">
      </div>
			<div class="form-group">
        <label for="question" id="question_box" style="width: 100%;">Question</label>
        <textarea name="ques" cols="120" rows="5" required class="ckeditor" id="question" placeholder="Don't exceed 500 characters" title="Provide the question"></textarea>
      </div>
			<!-- 	<input name="abc" type="text" value="Amsterdam,Washington" > -->
			<div class="form-group">
        <label for="tags">Tags</label>
        <input id="tags" type="text" data-role="tagsinput" name="tagsinput" class="tagsinput form-control" required placeholder="What are the fields, the question related to...." title="Provide atleast one tag" size="58"/>
			</div>
      <div class="form-group">
        <label for="branch">Branch</label>
            	<select name="branch" class="form-control"required>
                <option value="">Select Branch</option>
                <option value="01">Biotechnology</option>
                <option value="02">Chemical Engineering</option>
                <option value="03">Civil Engineering</option>
                <option value="04">Computer Science and Engineering</option>
                <option value="05">Electrical and Electronics Engineering</option>
        				<option value="06">Electronics and Communication Engineering</option>
        				<option value="07" >Mechanical Engineering</option>
        				<option value="08">Metallurgy</option>	
				      </select>
       </div>
			<div class="form-group"></div>
					<input type="submit"  class="btn btn-primary" value="Submit" >
					<input type="reset" class="btn btn-primary" value="Reset">
			</div>   
			</form>
</div>
</div>
</div>
    <script src="<?php echo(URL.'assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript">  
    function validate(){
      var ques=GetContents();
      //alert(ques.length);
        if(ques.length==0){
                // <div class="alert alert-danger">
                //  Fill question
                // </div>
            if(document.getElementById("error-ques") == null)
            {
            var element=document.createElement("div");
            element.setAttribute("class","alert alert-danger");
            element.setAttribute("id","error-ques");
            element.innerHTML='<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>Fill Question';
            document.getElementById("question_box").appendChild(element);
            }
            return false;
        }
        else
        {
            return true;
        }
    
    }
    </script>
    <script type="text/javascript">
          function GetContents() {
          // Get the editor instance that you want to interact with.
          var editor = CKEDITOR.instances.question;

          // Get editor contents
          // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
          return editor.getData();
        }
    </script>