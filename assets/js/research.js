function phd_SCI_journal_add_row(){
    var tdsNames = new Array("phd-SCI-journal-coauthors[]","phd-SCI-journal-title[]","phd-SCI-journal-name[]","phd-SCI-journal-vol[]","phd-SCI-journal-year[]","phd-SCI-journal-citations[]","phd-SCI-journal-impact[]","phd-SCI-journal-SCI-no[]","phd-SCI-journal-pdf[]","phd-SCI-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text" ,"text","file","hidden");
    var tdsRequired = new Array("","","","","","","","","");
    var noColumns=10;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-SCI-journal");
}
function phd_non_SCI_journal_add_row(){
    var tdsNames = new Array("phd-non-SCI-journal-coauthors[]","phd-non-SCI-journal-title[]","phd-non-SCI-journal-name[]","phd-non-SCI-journal-vol[]","phd-non-SCI-journal-year[]","phd-non-SCI-journal-citations[]","phd-non-SCI-journal-impact[]","phd-non-SCI-journal-pdf[]","phd-non-SCI-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text","file","hidden");
    var tdsRequired = new Array("","","","","","","","");
    var noColumns=9;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-non-SCI-journal");
}
function phd_outside_SCI_journal_add_row(){
    var tdsNames = new Array("phd-outside-SCI-journal-coauthors[]","phd-outside-SCI-journal-title[]","phd-outside-SCI-journal-name[]","phd-outside-SCI-journal-vol[]","phd-outside-SCI-journal-year[]","phd-outside-SCI-journal-citations[]","phd-outside-SCI-journal-impact[]","phd-outside-SCI-journal-SCI-no[]","phd-outside-SCI-journal-pdf[]","phd-outside-SCI-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text" ,"text","file","hidden");
    var tdsRequired = new Array("","","","","","","","","");
    var noColumns=10;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-outside-SCI-journal");
}
function phd_outside_non_SCI_journal_add_row(){
    var tdsNames = new Array("phd-outside-non-SCI-journal-coauthors[]","phd-outside-non-SCI-journal-title[]","phd-outside-non-SCI-journal-name[]","phd-outside-non-SCI-journal-vol[]","phd-outside-non-SCI-journal-year[]","phd-outside-non-SCI-journal-citations[]","phd-outside-non-SCI-journal-impact[]","phd-outside-non-SCI-journal-pdf[]","phd-outside-non-SCI-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text","file","hidden");
    var tdsRequired = new Array("","","","","","","","");
    var noColumns=9;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"phd-outside-non-SCI-journal");
}
function hard_copy_peer_journal_add_row(){
    var tdsNames = new Array("hard-copy-peer-journal-coauthors[]","hard-copy-peer-journal-title[]","hard-copy-peer-journal-name[]","hard-copy-peer-journal-vol[]","hard-copy-peer-journal-year[]","hard-copy-peer-journal-citations[]","hard-copy-peer-journal-impact[]","hard-copy-peer-journal-pdf[]","hard-copy-peer-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text","file","hidden");
    var tdsRequired = new Array("","","","","","","","");
    var noColumns=9;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"hard-copy-peer-journal");
}
function soft_copy_peer_journal_add_row(){
    var tdsNames = new Array("soft-copy-peer-journal-coauthors[]","soft-copy-peer-journal-title[]","soft-copy-peer-journal-name[]","soft-copy-peer-journal-vol[]","soft-copy-peer-journal-year[]","soft-copy-peer-journal-citations[]","soft-copy-peer-journal-impact[]","soft-copy-peer-journal-pdf[]","soft-copy-peer-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text","file","hidden");
    var tdsRequired = new Array("","","","","","","","");
    var noColumns=9;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"soft-copy-peer-journal");
}
function conference_journal_add_row(){
    var tdsNames = new Array("conference-journal-coauthors[]","conference-journal-title[]","conference-journal-name[]","conference-journal-vol[]","conference-journal-year[]","conference-journal-citations[]","conference-journal-impact[]","conference-journal-pdf[]","conference-journal-pdf-upload-flag[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year","number","text","file","hidden");
    var tdsRequired = new Array("","","","","","","","");
    var noColumns=9;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"conference-journal");
}
function book_add_row(){
    var tdsNames = new Array("book-coauthors[]","book-bc[]","book-title[]","book-publisher[]","book-year[]");
    var tdsTypes = new Array("number" ,"text" ,"text","text","datepicker_year");
    var tdsRequired = new Array("","","","","");
    var noColumns=5;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"book");
}
function patents_add_row(){
    var tdsNames = new Array("patents-group-or-organization[]","patents-name[]","patents-year-of-award[]");
    var tdsTypes = new Array("text" ,"text","datepicker_year");
    var tdsRequired = new Array("","","");
    var noColumns=3;
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"patents");
}
$("#phd-SCI-journal-add-row").click(phd_SCI_journal_add_row);
$("#phd-non-SCI-journal-add-row").click(phd_non_SCI_journal_add_row);
$("#phd-outside-SCI-journal-add-row").click(phd_outside_SCI_journal_add_row);
$("#phd-outside-non-SCI-journal-add-row").click(phd_outside_non_SCI_journal_add_row);
$("#hard-copy-peer-journal-add-row").click(hard_copy_peer_journal_add_row);
$("#soft-copy-peer-journal-add-row").click(soft_copy_peer_journal_add_row);
$("#conference-journal-add-row").click(conference_journal_add_row);
$("#book-add-row").click(book_add_row);
$("#patents-add-row").click(patents_add_row);

$(function(){
    $(document).on('click', '.remove-row', function(){
        delete_btn=$(this).parents("tr").find("td:nth-last-child(3)").find("button");
        if(delete_btn!=undefined)
        {
            delete_btn.trigger("click");
        }
        $(this).parents("tr").remove();
        
    });
    $('body').on('focus',".datepicker_year", function(){
            $(this).datepicker({
                format: " yyyy",
                viewMode: "years",
                minViewMode: "years"
            });
        });
});