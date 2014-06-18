
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
            <select name = "application_post" class = "form-control input-sm" id="fpost" required>
                <option value="">Select post</option>
                <?php
                foreach ($fposts as $code => $description) {
                    echo '<option value="'.$code.'" '.((isset($saved_data) && $saved_data['application_post'] === $code)?'selected':'').' >'.$description.'</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Department/Center *</label>
            <select name = "application_dept" class = "form-control input-sm" id="department" required>
                <option value="">Select department</option>
                <?php
                    foreach ($departments as $code => $department) {
                        echo '<option value="'.$code.'" '.((isset($saved_data) && $saved_data['application_dept'] === $code)?'selected':'').' > '.$department.'</option>';
                    }
                ?>
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

var specializationsJ = '<?php echo json_encode($sdspecializations); ?>';
var specializations;

function populateOptions () {
    // getting the faculty position the applicant is applying for
    var fpost_element = document.getElementById('fpost');
    var fpost = fpost_element.options[fpost_element.selectedIndex].value;
    // Implies form hasn't been saved before
    if (fpost_element.selectedIndex === 0) {return;}
    // getting department the applicant is applying for
	var department_element = document.getElementById('department');
	var department = department_element.options[department_element.selectedIndex].value;

    console.log(fpost + " : " + department);

    var specialization_element=document.getElementById('specialization');
	var fc = specialization_element.firstChild;
    // getting specializations for the post & branch selected

    // removing all the options in specialization
	while( fc ) {
	    specialization_element.removeChild( fc );
	    fc = specialization_element.firstChild;
	}
    // If no department is selected, dont display specialization
	if(department === "") {
        specialization_element.parentNode.style.display="none";
        specialization_element.removeAttribute("required");
        return;
    }
    // Generating options for specialization accordin to the branch & post selected
    var specs = specializations[department][fpost];
	for (var i = specs.length - 1; i >= 0; i--) {
		var new_option=document.createElement('option');
		new_option.setAttribute('value', specs[i]);
		new_option.appendChild(document.createTextNode(specs[i]));
		specialization_element.appendChild(new_option);
	}
    specialization_element.parentNode.style.display="block";
}

function fillForm() {

    <?php if(isset($saved_data)) : ?>
        document.application_form.application_post.value='<?php echo $saved_data['application_post']; ?>';
        document.application_form.application_dept.value='<?php echo $saved_data['application_dept']; ?>';
        populateOptions();
        document.application_form.specialization.value='<?php echo $saved_data['specialization']; ?>';

        // TO BE REMOVED
        <?php if($saved_data['specialization'] === "Other"): ?>
        	document.getElementById("other_specialization").style.display="block";
        	document.application_form.other_spec.value='<?php echo $saved_data['other_spec']; ?>';
        <?php endif;?>

        <?php if($pic !== ''):  ?>
            $("#imagePreview").css("background-image", "url('<?php echo base_url('uploads/'.$pic);?>')");
        <?php endif; ?>

    <?php endif; ?>
}

$(function() {

    specializations = JSON && JSON.parse(specializationsJ) || $.parseJSON(specializationsJ);

    fillForm();

    $('#department').on('change', function() {
        if ($('#fpost option:selected').val() === "") {
            alert('You need to select the post before selecting department');
            return false;
        }
        populateOptions();
    });

    $("#uploadFile").on("change", function() {
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
});


</script>