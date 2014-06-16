tinymce.init({
    selector: ".editable_header",
    inline: true,
    toolbar: "undo redo",
    menubar: false,
    verify_html: true
});

tinymce.init({
    selector: "div.editable",
    inline: true,
    verify_html: true,
    browser_spellcheck : true,
    // contextmenu:true,
    // spellchecker_rpc_url: "rpc.php",
    plugins : "autolink,lists,pagebreak,layer,table,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
		        // Theme options
             fullpage_default_doctype: "div",
             toolbar1: "undo redo| styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview ",
             image_advtab: true,
         });

// tinymce.init({
//     selector: ".tinymce2",
//   //  inline: true,
//     verify_html: true,
//     plugins : "autolink,lists,spellchecker,pagebreak,layer,table,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
//                 // Theme options
//              fullpage_default_doctype: "div",
//              toolbar1: "undo redo| styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview",
//              image_advtab: true,
//          });
