$(document).ready(function() {
    var menuLeft=$("#cbp-spmenu-s1");
    $(".togglebtn").click(function() {
        $("#main-content").toggleClass('cbp-spmenu-push-toright');
        $("#main-content").toggleClass('col-md-12');
        $("#main-content").toggleClass('col-md-10');
        menuLeft.toggleClass('cbp-spmenu-open');
    });
   $("#user-details").popover();
   $("#instructions-show").popover();
});

$("#save_details").click(function(){
    $("#proceed_val").val("0");
});

function remove_button(){
    var col=document.createElement("td");
    var button=document.createElement("button");
    button.setAttribute("type","button");
    var icon=document.createElement("span");
    icon.setAttribute("class","glyphicon glyphicon-remove");
    button.appendChild(icon);
    button.className=button.className+"remove-row";
    button.className=button.className+" btn btn-sm";
    col.appendChild(button);
    return col;
}

function remove_row() {
    $(this).parents("tr").remove();
}

function add (tdsNames,tdsTypes,tdsRequired,noColumns,id,options) {
    var required_array_size=tdsRequired.length;
    var row=document.createElement("tr");
    for (var i=0; i<noColumns; i++) {
        var tds = document.createElement("td");
        if(tdsTypes[i]=="hidden")
            tds.className+="hidden";
        if(tdsTypes[i]=="select")
        {
            var inputfield = document.createElement("select");
            for (var j = options[i].length - 1; j >= 0; j--) {
                var option=document.createElement("option");
                if (typeof options[i][j] !== "object") {
                    // If value & the option name are the same
                    option.setAttribute("value", options[i][j]);
                    option.innerHTML=options[i][j];
                    inputfield.appendChild(option);
                } else {
                    // if value & option name are different
                    // specify the option as an array of arrays
                    option.setAttribute("value", options[i][j][0]);
                    option.innerHTML=options[i][j][1];
                    inputfield.appendChild(option);
                }
            };
        }
        else
        {
            var inputfield = document.createElement("input");
        }
        if(tdsTypes[i]=="datepicker_year_month")
        {
                inputfield.setAttribute("type","text");
                inputfield.setAttribute("data-date-format","mm/yy");
                inputfield.className = inputfield.className + "datepicker_year_month ";
        }
        else
            inputfield.setAttribute("type", tdsTypes[i]);
        inputfield.setAttribute("name", tdsNames[i]);
        if(i<required_array_size)
            inputfield.setAttribute("required", tdsRequired[i]);
        if(tdsTypes[i]=="date")
        {
            inputfield.setAttribute("placeholder", "YYYY-MM-DD");
        }
        if(tdsTypes[i]=="number")
        {
            inputfield.setAttribute("step", "any");
        }
        inputfield.className = inputfield.className + "form-control input-sm";
        tds.appendChild(inputfield);
        row.appendChild(tds);
    }
    row.appendChild(remove_button());
    document.getElementById(id).appendChild(row);
}