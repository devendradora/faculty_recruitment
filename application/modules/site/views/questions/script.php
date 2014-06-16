<script> 
     $("#answer-button").click(function(){
      if($("#your-answer").css('display')=="none")
      {
     	  $("#your-answer").show();
        $("#answer-button span").removeClass("glyphicon-plus");
        $("#answer-button span").addClass("glyphicon-minus");
      }
      else
       {
        $("#answer-button span").removeClass("glyphicon-minus");
        $("#answer-button span").addClass("glyphicon-plus");
        $("#your-answer").hide();
       }
     	// $('html,body').animate({scrollTop: $(this).offset().top},500);
     });
     $('.display_comment_box').click(function(){
      var id=$(this).data('boxid');
      //alert(id);
      var buttonid=$(this).data('buttonid');
      display_box(id,buttonid);
     });
     function display_box(id,buttonid){
      console.log(id);
      if($(id).css('display')=="none")
      {
        $(id).show();
        $(buttonid+" span").removeClass("glyphicon-plus");
        $(buttonid+" span").addClass("glyphicon-minus");
      }
      else
       {
        $(buttonid+" span").removeClass("glyphicon-minus");
        $(buttonid+" span").addClass("glyphicon-plus");
        $(id).hide();
       }
     }
    /* Ajax calling scripts*/
    $(".like").click(function(){
      var type=$(this).data('type');
      var id=$(this).data('id');
      if(type=='q')
      {
      var formdata={};
      formdata.id=id;
      formdata="formdata="+JSON.stringify(formdata);
      console.log(formdata);
      $.ajax({
        url: '<?php echo base_url()."main/like_q";?>',
        type:"POST",
        data:formdata,
        beforeSend:function(xhr){
          
        },
        success:function(data,textStatus,jqXHR){
          console.log(textStatus); 
          console.log(data);
          data=JSON.parse(data);  
          console.log(data);
          if(data==true)
          {
            alert("liked");
            $("#like_question_box").hide();
            $(".response-question .count").html(parseInt($(".response-question .count").html())+1);
            $(".response-question").removeClass("hide");

          }
            
        },
        error: function(jqXHR,textStatus,errorThrown){
          console.log('error');
        } 
      });
      }
    });
</script>
<script src="<?php echo(URL.'assets/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript">
      function GetContents() {
      // Get the editor instance that you want to interact with.
      var editor = CKEDITOR.instances.question;

      // Get editor contents
      // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
      return editor.getData();
    }
</script>