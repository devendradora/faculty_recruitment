function schooling_add_row(){
    var tdsNames = new Array("schooling_certificate[]", "schooling_boardu[]","schooling_yopass[]","schooling_percentage[]");
    var tdsTypes = new Array("text" ,"text" ,"datepicker_year_month" ,"text");
    var tdsRequired = new Array("","","","");
    var noColumns=4;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"schooling");
}
// function undergraduation_add_row() {
//     var tdsNames = new Array("undergraduation_degree[]", "undergraduation_branch[]", "undergraduation_boardu[]", "undergraduation_yopass[]", "undergraduation_percentage[]");
//     var tdsTypes = new Array("text" ,"text","text" ,"text" ,"text");
//     var tdsRequired = new Array("","","","","");
//     var noColumns=5;
//     add(tdsNames,tdsTypes,tdsRequired,noColumns,"undergraduation");
// }
// function masters_add_row() {
//     var tdsNames = new Array("masters_degree[]", "masters_branch[]", "masters_specialization[]", "masters_boardu[]", "masters_yopass[]", "masters_cgpa[]");
//     var tdsTypes = new Array("text" ,"text" ,"text" ,"text","text","text");
//     var tdsRequired = new Array("","","","","","");
//     var noColumns=6;
//     add(tdsNames,tdsTypes,tdsRequired,noColumns,"masters");
// }
function phd_awarded_add_row() {
    var tdsNames = new Array("phd_month_year[]", "phd_awarded_institution[]", "phd_awarded_department[]", "phd_thesis[]");
    var tdsTypes = new Array("datepicker_year_month" ,"text" ,"text" ,"text");
    var tdsRequired = new Array("","","","");
    var noColumns=4;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-awarded");
}
function phd_pursuing_add_row() {
    var tdsNames = new Array("phd_dor[]", "phd_pursuing_institution[]", "phd_pursuing_department[]", "phd_submission_synopsis[]","phd_submission_thesis[]");
    var tdsTypes = new Array("date" ,"text" ,"text" ,"select","select");
    var options=new Array(
        [],[],[],
        ["Yes","No"],["Yes","No"]
        );
    var tdsRequired = new Array("","","","","");
    var noColumns=5;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-pursuing",options);
    /*
    var element=$("#phd-pursuing").find("tr").last().find("select");
    var first_one=element.first()
    ,second_one=element.last();
    var add_synopsis_date='<input type="text" class="datepicker_year_month form-control input-sm" name="phd_submission_synopsis_date[]" placeholder="Date of Synopsis Submission">';
    var add_thesis_date='<input type="text" class="datepicker_year_month form-control input-sm" name="phd_submission_thesis_date[]" placeholder="Date of thesis Submission">';
    first_one.parent().append(add_synopsis_date);
    second_one.parent().append(add_thesis_date);
    var box1=first_one.parent().find("input")
    ,box2=second_one.parent().find("input");
    box1.hide();
    box2.hide();
    first_one.click(function(){
        $(this).change(function  () {
            if($(this).val()==="Yes")
            {
                box1.show();
                box1.attr('required',"");

            }
            else
            {
                box1.hide();
                box1.removeAttr('required');

            }
        });
    });
    second_one.click(function(){
        $(this).change(function  () {
            if($(this).val()==="Yes")
            {
                box2.show();
                box2.attr('required');

            }
            else
            {
                box2.hide();
                box2.removeAttr('required');

            }
        });
    });
*/
}

$("#schooling-add-row").click(schooling_add_row);
$("#undergraduation-add-row").click(undergraduation_add_row);
$("#masters-add-row").click(masters_add_row);
// $("#graduation-add-row").click(graduation_add_row);
$("#phd-awarded-add-row").click(phd_awarded_add_row);
$("#phd-pursuing-add-row").click(phd_pursuing_add_row);

$(function(){
    $(document).on('click', '.remove-row', remove_row);
    $('body').on('focus',".datepicker_year_month", function(){
        $(this).datepicker({
            format: "mm-yyyy",
            viewMode: "months",
            minViewMode: "months"
        });
    });
});


$(document).on('change', '#phd-pursuing > tr > td:nth-child(5) > select', function() {
    var selectEl = $(this);
    var inputEl = '<p>Date of submission:</p> <input type="date" name="phd_thesis_submission[]" class="form-control input-sm">';
    if (selectEl.val() === "Yes") {
        // clear all non-select children
        selectEl.parent().children(':not(select)').remove();
        selectEl.parent().append(inputEl);
    } else {
        selectEl.parent().children(':not(select)').remove();
    }
});
$(document).on('change', '#phd-pursuing > tr > td:nth-child(4) > select', function() {
    var selectEl = $(this);
    var inputEl = '<p>Date of submission:</p> <input type="date" name="phd_synopsis_submission[]" class="form-control input-sm">';
    if (selectEl.val() === "Yes") {
        // clear all non-select children
        selectEl.parent().children(':not(select)').remove();
        selectEl.parent().append(inputEl);
    } else {
        selectEl.parent().children(':not(select)').remove();
    }
});
