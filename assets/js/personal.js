var date_box='<div id="date-box" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'+
        '<label>Date of issue of certificate</label> <p class="text-danger">(Issued on or after 1st January 2014) </p>'+
        '<input type="date" id="category_date_field" min="2014-01-01" class="form-control input-sm" placeholder="YYYY-MM-DD" name="category_cert_doi">'+
      '</div>';
$("#category").change(function () {
    if(this.value == '0'){
       $('#category_pdf_cert_input > div > input').attr('required', false);
       $("#date-box").remove();
       $("#category_pdf_upload_div").hide();
       $(".delete_file").trigger('click');   
       return;
    }
    $('#category_pdf_cert_input > div > input').attr('required', true);
    $("#category_pdf_upload_div").show();
    $(".delete_file").trigger('click'); 
    
    if(this.value=='1')
    { 
      $("#category_pdf_upload_div").append(date_box);
      return;
    }
    $("#date-box").remove();
   });
    
$("#pda").change(function () {
    $("#pda_pdf_upload_div").hide();
    $('#pda_pdf_cert_input > div > input').attr('required' , false);
    if(this.value == '1'){
        $("#pda_pdf_upload_div").show();
        $("#pda_pdf_cert_input > div > input").attr('required' , true);
    }
});
$(document).ready(function(){
  $("#category_pdf_upload_div").hide();
  $("#pda_pdf_upload_div").hide();
  if($("select[name='category']").val()!=0)
  {
    $('#category_pdf_cert_input > div > input').attr('required', true);
    $("#category_pdf_upload_div").show();    
  }
  if($("select[name='category']").val()==1)
  {
    $("#category_pdf_upload_div").append(date_box);
    $("#category_date_field").val(category_date);
  }
  if($("select[name='spcl_cat_pda']").val()!=0)
  {
    $("#pda_pdf_upload_div").show();
    $("#pda_pdf_cert_input > div > input").attr('required' , true);
  }
});

// $('.category').hide();
// $('.category-pda').hide();
// $("#category").change(function () {
//     $('.category').hide();
//     $('.category > div > input').attr('required', false);
//     if(this.value == '1'){
//         $("#obc-ncl").show();
//         $("#obc-ncl > div > input").attr('required' , true);
//     }
//     if(this.value == '2'){
//         $("#sc").show();
//         $("#sc > div > input").attr('required' , true);
//     }
//     if(this.value == '3'){
//         $("#st").show();
//         $("#st > div > input").attr('required' , true);
//     }

// });

// $("#pda").change(function () {
//     console.log(this.value);
//     $('.category-pda').hide();
//     $('.category-pda > div > input').attr('required' , false);
//     if(this.value == '1'){
//         $("#pda-extra").show();
//         $("#pda-extra > div > input").attr('required' , true);
//     }
// });