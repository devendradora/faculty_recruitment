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

// function old_add (tdsNames,tdsTypes,tdsRequired,noColumns,id,options) {
//     var required_array_size=tdsRequired.length;
//     var row = document.createElement("tr");

//     for (var i=0; i<noColumns; i++) {
//         var tds = document.createElement("td");
//         if (tdsTypes[i] == "hidden") {
//             tds.className+="hidden";
//         } else if(tdsTypes[i]=="select") {
//             var inputfield = document.createElement("select");
//             for (var j = 0; j < options[i].length; j++) {
//                 var option=document.createElement("option");
//                 if (typeof options[i][j] !== "object") {
//                     // If value & the option name are the same
//                     option.setAttribute("value", options[i][j]);
//                     option.innerHTML=options[i][j];
//                     inputfield.appendChild(option);
//                 } else {
//                     // if value & option name are different
//                     // specify the option as an array of arrays
//                     // options should be a array in this case
//                     option.setAttribute("value", options[i][j][0]);
//                     option.innerHTML=options[i][j][1];
//                     inputfield.appendChild(option);
//                 }
//             };
//         } else if(tdsTypes[i]=="datepicker_year_month") {
//             var inputfield = document.createElement("input");
//             inputfield.setAttribute("type","text");
//             inputfield.setAttribute("data-date-format","mm/yy");
//             inputfield.className = inputfield.className + "datepicker_year_month ";
//         } else if(tdsTypes[i]=="date") {
//             var inputfield = document.createElement("input");
//             inputfield.setAttribute("placeholder", "YYYY-MM-DD");
//         } else if(tdsTypes[i]=="number") {
//             var inputfield = document.createElement("input");
//             inputfield.setAttribute("step", "any");
//         } else {
//             var inputfield = document.createElement("input");
//             inputfield.setAttribute("type", tdsTypes[i]);
//         }

//         // setting name on the input field
//         inputfield.setAttribute("name", tdsNames[i]);
//         // required attribute
//         if(i<required_array_size) {
//             inputfield.setAttribute("required", tdsRequired[i]);
//         }
//         inputfield.className = inputfield.className + "form-control input-sm";
//         tds.appendChild(inputfield);
//         row.appendChild(tds);
//     }
//     row.appendChild(remove_button());
//     document.getElementById(id).appendChild(row);
// }


function add (tdsNames, tdsTypes, tdsRequired, noColumns, id, options, tdsAttributes) {
    var row = document.createElement("tr");
    // Filling in a empty options if not exist
    if (typeof options === 'undefined') {
        options = new Array();
        for (var i = 0; i < noColumns; i++) {
            options[i] = new Array();
        }
    }
    // Filling in a empty attributes if not exist
    if (typeof tdsAttributes === 'undefined') {
        tdsAttributes = new Array();
        for (var i = 0; i < noColumns; i++) {
            tdsAttributes[i] = {};
        }
    }
    // Appending require number of ''
    if (tdsRequired.length < noColumns) {
        for (var i = tdsRequired.length; i < noColumns; i++) {
            tdsRequired[i] = '';
        }
    }
    // Appending require number of ''
    if (tdsAttributes.length < noColumns) {
        for (var i = tdsAttributes.length; i < noColumns; i++) {
            tdsAttributes[i] = {};
        }
    }
    // Sanity checks
    if (tdsNames.length !== tdsTypes.length || tdsNames.length !== noColumns || tdsTypes.length !== noColumns) {
        alert('Error in code. Please contact wsdc.nitw@gmail.com');
        return;
    }

    for (var i=0; i<noColumns; i++) {
        var tds = document.createElement("td");


        // if tdsTypes[i] is not a array
        if (typeof tdsTypes[i] !== 'object') {
            tdsTypes[i] = new Array(tdsTypes[i]);
            tdsNames[i] = new Array(tdsNames[i]);
            tdsRequired[i] = new Array(tdsRequired[i]);
            options[i] = new Array(options[i]);
            tdsAttributes[i] = new Array(tdsAttributes[i]);
        }
        // Provision for multiple for elements in a cell
        for (var j = 0; j < tdsTypes[i].length; j++) {
            var inputfield;

            switch(tdsTypes[i][j]) {
                case 'hidden':
                    tds.className += ' hidden';
                    break;
                case 'select':
                    inputfield = document.createElement('select');
                    // Iterating through all options of select
                    for ( var k = 0; k < options[i][j].length; k++) {
                        var option = document.createElement('option');
                        if (typeof options[i][j][k] !== 'object') {
                            // If value & the option name are the same
                            option.setAttribute("value", options[i][j][k]);
                            option.innerHTML = options[i][j][k];
                            inputfield.appendChild(option);
                        } else {
                            // if value & option name are different
                            // specify the option as an array of arrays
                            // options should be a array in this case
                            option.setAttribute("value", options[i][j][k][0]);
                            option.innerHTML = options[i][j][k][1];
                            inputfield.appendChild(option);
                        }
                    }
                    break;
                case 'datepicker_year_month':
                    inputfield = document.createElement("input");
                    inputfield.setAttribute("type","text");
                    inputfield.setAttribute("data-date-format","mm/yy");
                    inputfield.className += "datepicker_year_month ";
                    break;
                case 'date':
                    inputfield = document.createElement("input");
                    inputfield.setAttribute("placeholder", "YYYY-MM-DD");
                    break;
                case 'number':
                    inputfield = document.createElement("input");
                    inputfield.setAttribute("step", "any");
                    break;
                default:
                    inputfield = document.createElement("input");
                    inputfield.setAttribute("type", tdsTypes[i][j]);
                    break;
            }

            // setting name on the input field
            inputfield.setAttribute("name", tdsNames[i][j]);
            // required attribute
            if (tdsRequired[i][j] !== 'no') {
                inputfield.setAttribute("required", tdsRequired[i][j]);
            }
            inputfield.className += " form-control input-sm";
            for (var key in tdsAttributes[i][j]) {
                if (key !== 'hidden') {
                    inputfield.setAttribute(key, tdsAttributes[i][j][key]);
                } else {
                    inputfield.className += ' hidden';
                }
            }
            tds.appendChild(inputfield);
        }
        row.appendChild(tds);
    }
    row.appendChild(remove_button());
    document.getElementById(id).appendChild(row);
}