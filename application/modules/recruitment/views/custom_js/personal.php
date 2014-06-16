<script type="text/javascript">
	<?php 
	if(isset($files_data) && $files_data!=FALSE)
	{
		foreach ($files_data->result() as $key => $value) {
			$exact_name=$value->original_name;
            $stored_name=$value->stored_name;
            $pdf_category=$value->field;
            $fid=$value->id;
            $msg='<b>Certificate</b><p><span class="glyphicon glyphicon-saved text-success"></span> <a href="'.base_url().'uploads/'.$stored_name.'" target="_blank">'.$exact_name.'</a></p>';
            $handle='<p><button type="button" class="btn btn-danger btn-xs delete_file" data-type="'.$pdf_category.'" data-fid="'.$fid.'" data-name="'.$stored_name.'">Remove</button></p>';
        	?>
        	$("#<?php echo $pdf_category ?>_upload_div").show();
        	$('#<?php echo $pdf_category ?>_cert_input').empty();
        	$('#<?php echo $pdf_category ?>_cert_input').append('<?php echo $msg ?>');
        	$('#<?php echo $pdf_category ?>_cert_input').append('<?php  echo $handle ?>');
    <?php 
		}
	} 
	?>
	$(".delete_file").click(function(){
        var txt;
        var r = confirm("Do you want to delete the file permanently.");
        if (r == true) {
            txt = "You pressed OK!";
        } else {
            txt = "You pressed Cancel!";
            return;
        }
        id=$(this).data("fid");
        stored_name=$(this).data("name");
        element_row=$(this).parent().parent();
        category=$(this).data("type");
    $.ajax({
        url : "<?php echo base_url('recruitment/home/delete_file_details');?>",
        type: "POST",
        data : {'id':id,'stored_name':stored_name,'page':'<?php echo $current_page; ?>'},
        beforeSend: function (xhr) {
            element_row.html("Deleting...");
        },
        success: function(data, textStatus, jqXHR)
        {
            if(data==1)
            {
            	str='<div class="form-group">'+
                '<label>Upload relevant certificate pdf</label>'+
                '<input name = "'+category+'" type="file" class="form-control input-sm">'+
            	'</div>';
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
$(document).ready(function() {
	$.validator.addMethod(
    "greaterThan",
    function(value, element, params) {
        var target = params;
        var isValueNumeric = !isNaN(parseFloat(value)) && isFinite(value);
        var isTargetNumeric = !isNaN(parseFloat(target)) && isFinite(target);
        if (isValueNumeric && isTargetNumeric) {
            return Number(value) >= Number(target);
        }

        if (!/Invalid|NaN/.test(new Date(value))) {
        	//console.log(value+' '+new Date(target));
        	//console.log(new Date(value) >= new Date(target));
            return new Date(value) >= new Date(target);
        }

        return false;
    },
    'Must be greater than 1st January 2014.');
	var a=new Date("2014-01-01");
	$("#<?php echo $current_page ?>").validate({
		rules: {
        category_cert_doi: { greaterThan: a },
        pda_cert_doi:{ greaterThan: a }
        
    	},
    	errorClass: "errorcss",
    	error: function(element) {
            element.addClass("error");
        },
        success: function(label) {
            label.addClass("successcss");
        }
	});
});
</script>