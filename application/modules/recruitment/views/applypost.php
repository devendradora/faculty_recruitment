<script type="text/javascript">
	var data= [];
	data[1]=["1","2","3"];
</script>
<legend class="text-center">Application details</legend>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php
    if($this->session->flashdata('other') == TRUE)
      echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
    ?>
    </div>
</div>
<div class="text-danger"><?php echo validation_errors(); ?></div>
<form role="form" class="row clearfix" name="application_form" enctype="multipart/form-data" action="<?php echo base_url("recruitment/applypost/submit"); ?>" method="POST">
    <div class="row">
        <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
    </div>
    <br>

    <input id="proceed_val" type="hidden" value="1" name="proceed">

    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
        <div class="form-group">
            <label>Application for the post of *</label>
            <select name = "application_post" class = "form-control input-sm" required>
                <option value="">Select post</option>
                <option value = "AP6" <?php echo set_select('application-post', 'AP6'); ?> >Assistant professor on contract (AGP6000)</option>
                <option value = "AP7" <?php echo set_select('application-post', 'AP7'); ?> >Assistant professor on contract(AGP7000)</option>
                <option value = "AP8" <?php echo set_select('application-post', 'AP8'); ?> >Assistant professor (AGP8000)</option>
            </select>
        </div>
        <div class="form-group">
            <label>Department/Center *</label>
            <select name = "application_dept" class = "form-control input-sm" id="department" required>
                <option value="">Select department</option>
                <option value = "1" <?php echo set_select('application-dept', '1'); ?> >Civil Engineering</option>
                <option value = "2" <?php echo set_select('application-dept', '2'); ?> >Electrical Engineering</option>
                <option value = "3" <?php echo set_select('application-dept', '3'); ?> >Mechanical Engineering</option>
                <option value = "4" <?php echo set_select('application-dept', '4'); ?> >Electronics and Communication engineering</option>
                <option value = "5" <?php echo set_select('application-dept', '5'); ?> >Metallurgical and Materials Engineering</option>
                <option value = "6" <?php echo set_select('application-dept', '6'); ?> >Chemical Engineering</option>
                <option value = "7" <?php echo set_select('application-dept', '7'); ?> >Computer Science and Engineering</option>
                <option value = "8" <?php echo set_select('application-dept', '8'); ?> >Biotechnology</option>
                <option value = "9" <?php echo set_select('application-dept', '9'); ?> >Mathematics</option>
                <option value = "10" <?php echo set_select('application-dept', '10'); ?> >Physics</option>
                <option value = "11" <?php echo set_select('application-dept', '11'); ?> >Chemistry</option>
                <option value = "12" <?php echo set_select('application-dept', '13'); ?> >Humanities and social sciencies</option>
                <option value = "13" <?php echo set_select('application-dept', '12'); ?> >School of management</option>
            </select>
        </div>
        <div class="form-group" style="display:none;">
            <label>Specialization *</label>
            <select name = "specialization" class = "form-control input-sm"  id="specialization" required>
                <option value="">Select Specialization</option>

            </select>
        </div>
        <div class="form-group" id="other_specialization" style="display:none;">
            <label>Other Specialization *</label>
            <input type="text" name="other_spec" class="form-control input-sm"/>
        </div>
    </div>
    <div class="col-md-5 column clearfix">
        <p class="text-center lead ">Photograph Preview</p>
        <center>
        <div id="imagePreview" align="center" class="" style="background-image: url(<?php echo base_url('assets/images/no_pic.gif');?>);">

        </div>
        </center>
        <?php if(!isset($pic) || $pic==''): ?>
        <div class="form-group">
            <label>Upload Passport size photograph *</label>
            <input id="uploadFile" type="file" name="photograph" class="img form-control" required />
        </div>
        <?php else: ?>
        <center>
        <div class="row" style="margin-bottom: 50px;">
        <button type="button" class="btn btn-danger btn-sm delete_file" data-filename="<?php echo $pic ?>">
            Remove and Reupload
        </button>
        </div>
        </center>
        <?php endif; ?>
    </div>
    <br>
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <button type="submit" id="save_details" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Save details</button>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <button type = "submit" class = "btn btn-primary btn-block">Save &amp; Continue</button>
    </div>


</form>
<script>
$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});

function populate () {
	var element=document.getElementById('department');
	var val=element.options[element.selectedIndex].value;
	var specialization_element=document.getElementById('specialization');
	var fc = specialization_element.firstChild;
	while( fc ) {
	    specialization_element.removeChild( fc );
	    fc = specialization_element.firstChild;
	}
	if(val=="") {
        specialization_element.parentNode.style.display="none";
        specialization_element.removeAttribute("required");
        return;
    }
	for (var i = data[val].length - 1; i >= 0; i--) {
		var new_option=document.createElement('option');
		new_option.setAttribute('value', data[val][i]);
		new_option.appendChild(document.createTextNode(data[val][i]));
		specialization_element.appendChild(new_option);
	}
    specialization_element.parentNode.style.display="block";
}

document.getElementById('department').onchange=populate;
<?php if(isset($saved_data)) : ?>
    document.application_form.application_post.value='<?php echo $saved_data['application_post']; ?>';
    document.application_form.application_dept.value='<?php echo $saved_data['application_dept']; ?>';
    populate();
    document.application_form.specialization.value='<?php echo $saved_data['specialization']; ?>';
    <?php
    if($saved_data['specialization']=="Other"):
    ?>
    	document.getElementById("other_specialization").style.display="block";
    	document.application_form.other_spec.value='<?php echo $saved_data['other_spec']; ?>';
    <?php endif;?>
    <?php if($pic!=''):  ?>
        $("#imagePreview").css("background-image", "url('<?php echo base_url('uploads/'.$pic);?>')");
    <?php endif; ?>
<?php endif; ?>

$(".delete_file").click(function(){
    var txt;
    var r = confirm("Do you want to delete the file permanently and reload new photograph?");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
        return;
    }
    name=$(this).data("filename");
    element_row=$(this).parent().parent();
    $.ajax({
        url : "<?php echo base_url('recruitment/applypost/delete_photograph');?>",
        type: "POST",
        data : {'name':name},
        beforeSend: function (xhr) {
            element_row.html("Deleting...");
        },
        success: function(data, textStatus, jqXHR)
        {
            if(data==1)
            {
                str='<div class="form-group">'+
            '<label>Upload Passport size photograph *</label>'+
            '<input id="uploadFile" type="file" name="photograph" class="img form-control" required />'+
            '</div>';
             $("#imagePreview").css("background-image", "url('<?php echo base_url('assets/images/no_pic.gif');?>')");
                element_row.html(str);
            }
            else
            {
                element_row.html('Error occured in deleting.Reload the page');
            }

        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
});
</script>