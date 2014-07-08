<script type="text/javascript">

    <?php
    if(!isset($saved_data))
    {
        foreach ($initialize as $key => $value) {
            echo $adding_functions[$value];
        }
    }
    else
    {
        //calculating filled row sizes
        foreach ($rows_calcuate as $key => $value) {
            if(isset($saved_data[$value]))
            {
                $size=sizeof($saved_data[$value]);
                for($i=0;$i<$size;$i++)
                    echo $adding_functions[$key];
            }
        }
        // print_r($saved_data);
        foreach ($names as $key => $name)
        {
            if(isset($saved_data[$name]))
            {
                if(sizeof($saved_data[$name])==1)
                {
                    echo 'document.'.$form_name.'.elements.namedItem("'.$name.'[]").value="'.$saved_data[$name][0].'";';
                }
                else
                {
                    foreach ($saved_data[$name] as $key => $value)
                    {
                        echo 'document.'.$form_name.'.elements.namedItem("'.$name.'[]")['.$key.'].value="'.$saved_data[$name][$key].'";';
                    }
                }
            }
        }
    }
    ?>


<?php
    if(isset($files_data) && $files_data!=FALSE)
    {
        foreach ($files_data->result() as $key => $value) {
            $exact_name   = $value->original_name;
            $stored_name  = $value->stored_name;
            $pdf_category = $value->field;
            $fid          = $value->id;
            $msg          = '<b>File</b><p>'
                            .'<span class="glyphicon glyphicon-saved text-success"></span>'
                            .' <a href="'.base_url().'uploads/'
                            .$stored_name.'" target="_blank">'
                            .$exact_name.'</a></p>';
            $handle       = '<p><button type="button" class="btn btn-danger btn-xs delete_file" data-type="'
                            .$pdf_category.'" data-fid="'
                            .$fid.'" data-name="'.$stored_name.'">Remove</button></p>';
            ?>
            alert('<?php echo $msg; ?>');
            $("#<?php echo $pdf_category ?>_upload_div").show();
            $('#<?php echo $pdf_category ?>-cert-input').empty();
            $('#<?php echo $pdf_category ?>-cert-input').append('<?php echo $msg ?>');
            $('#<?php echo $pdf_category ?>-cert-input').append('<?php echo $handle ?>');
    <?php
        }
    }
?>


    $("body").on("change","input:file",function(){
       var idx=$(this).parent().parent().index();
       $(this).parent().next().find("input").val(idx);
    });

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
        url : "<?php echo base_url('recruitment/research/delete_file_details');?>",
        type: "POST",
        data : {'id':id,'stored_name':stored_name,'page':'research'},
        beforeSend: function (xhr) {
            element_row.html("Deleting...");
        },
        success: function(data, textStatus, jqXHR)
        {
            if(data==1)
            {
                element_row.html('<input type="file" name="'+category+'[]" required="" class="form-control input-sm">');
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
</body>
</html>