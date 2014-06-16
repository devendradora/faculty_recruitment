function sponsored_add_row(){
    var tdsNames = new Array("sponsored_agency[]", "sponsored_coinvestigator[]",
    	"sponsored_title[]","sponsored_date_of_sanction[]","sponsored_amount[]","sponsored_status[]");
    var tdsTypes = new Array("text" ,"text" ,"text" ,"date","number","select");
    var options=new Array(
    	[],[],[],[],[],
    	['Completed','Ongoing']
    	);
    
    var tdsRequired = new Array("","","","","","");
    var noColumns=6;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"sponsored",options);
}
$("#sponsored-projects-add-row").click(sponsored_add_row);
$(function(){
    $(document).on('click', '.remove-row', remove_row);
});