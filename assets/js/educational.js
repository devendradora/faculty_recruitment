function schooling_add_row(){
    var tdsNames = new Array("schooling_certificate[]", "schooling_boardu[]","schooling_yopass[]","schooling_percentage[]");
    var tdsTypes = new Array("text" ,"text" ,"datepicker_year_month" ,"text");
    var tdsRequired = new Array("","","","");
    var noColumns=4;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"schooling");
}
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
}

$("#schooling-add-row").click(schooling_add_row);
$("#undergraduation-add-row").click(undergraduation_add_row);
$("#masters-add-row").click(masters_add_row);
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

var add_synopsis_date_func=function() {
    var selectEl = $(this);
    var inputEl = '<p>Date of submission:</p> <input type="date" name="phd_synopsis_submission[]" class="form-control input-sm" required>';
    if (selectEl.val() === "Yes") {
        // clear all non-select children
        selectEl.parent().children(':not(select)').remove();
        selectEl.parent().append(inputEl);
    } else {
        selectEl.parent().children(':not(select)').remove();
    }
};
var add_thesis_date_func=function() {
    var selectEl = $(this);
    var inputEl = '<p>Date of submission:</p> <input type="date" name="phd_thesis_submission[]" class="form-control input-sm" required>';
    if (selectEl.val() === "Yes") {
        // clear all non-select children
        selectEl.parent().children(':not(select)').remove();
        selectEl.parent().append(inputEl);
    } else {
        selectEl.parent().children(':not(select)').remove();
    }
};
$(document).on('change', '#phd-pursuing > tr > td:nth-child(5) > select', add_thesis_date_func);
$(document).on('change', '#phd-pursuing > tr > td:nth-child(4) > select',add_synopsis_date_func);