function teaching_add_row(){
    var tdsNames = new Array("teaching-institution[]","teaching-position[]","teaching-doj[]","teaching-dol[]","teaching-duration-years[]","teaching-duration-months[]");
    var tdsTypes = new Array("text" ,"text" ,"date" ,"date" ,"number","number");
    var tdsRequired = new Array("","","","no","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"teaching");
}
function organization_add_row(){
    var tdsNames = new Array("organization-institution[]","organization-position[]","organization-doj[]","organization-dol[]","organization-duration-years[]","organization-duration-months[]");
    var tdsTypes = new Array("text" ,"text" ,"date" ,"date" ,"number","number");
    var tdsRequired = new Array("","","","no","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"organization");
}
function industry_add_row(){text
    var tdsNames = new Array("industry-institution[]","industry-position[]","industry-doj[]","industry-dol[]","industry-duration-years[]","industry-duration-months[]");
    var tdsTypes = new Array("text" ,"text" ,"date" ,"date" ,"number","number");
    var tdsRequired = new Array("","","","no","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"industry");
}

$("#teaching-add-row").click(teaching_add_row);
$("#organization-add-row").click(organization_add_row);
$("#industry-add-row").click(industry_add_row);


$(function(){
    // teaching_add_row();
    // organization_add_row();
    // industry_add_row();
    $(document).on('click', '.remove-row', remove_row);
});