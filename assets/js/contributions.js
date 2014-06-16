function FDP_attended_add_row(){
    var tdsNames = new Array("attended-organization[]","attended-program[]","attended-year[]","attended-duration[]","attended-sponsor[]","attended-agency[]");
    var tdsTypes = new Array("text" ,"text" ,"text" ,"text" ,"text" ,"text" );
    var tdsRequired = new Array("","","","","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"FDP-attended");
}
function FDP_conducted_add_row(){
    var tdsNames = new Array("conducted-organization[]","conducted-program[]","conducted-year[]","conducted-duration[]","conducted-sponsor[]","conducted-agency[]");
    var tdsTypes = new Array("text" ,"text" ,"text" ,"text" ,"text" ,"text" );
    var tdsRequired = new Array("","","","","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"FDP-conducted");
}
function FDP_faculty_add_row(){
    var tdsNames = new Array("FDP-faculty-organization[]","FDP-faculty-program[]","FDP-faculty-year[]","FDP-faculty-duration[]","FDP-faculty-sponsor[]","FDP-faculty-agency[]");
    var tdsTypes = new Array("text" ,"text" ,"text" ,"text" ,"text" ,"text" );
    var tdsRequired = new Array("","","","","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"faculty-FDP");
}
function FDP_invited_faculty_add_row(){
    var tdsNames = new Array("FDP-invited-faculty-organization[]","FDP-invited-faculty-program[]","FDP-invited-faculty-year[]","FDP-invited-faculty-duration[]","FDP-invited-faculty-sponsor[]","FDP-invited-faculty-agency[]");
    var tdsTypes = new Array("text" ,"text" ,"text" ,"text" ,"text" ,"text" );
    var tdsRequired = new Array("","","","","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"invited-faculty-FDP");
}
function medals_awarded_add_row () {
    var tdsNames = new Array("medals-awarded-name[]","medals-awarded-organization[]","medals-awarded-date[]");
    var tdsTypes = new Array("text" ,"text" ,"date" );
    var tdsRequired = new Array("","","");
    var noColumns=3;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"medals-awarded");
}
$("#FDP-attended-add-row").click(FDP_attended_add_row);
$("#FDP-conducted-add-row").click(FDP_conducted_add_row);
$("#faculty-FDP-add-row").click(FDP_faculty_add_row);
$("#invited-faculty-FDP-add-row").click(FDP_invited_faculty_add_row);
$("#medals-awarded-add-row").click(medals_awarded_add_row);
$(function(){
    $(document).on('click', '.remove-row', remove_row);
});