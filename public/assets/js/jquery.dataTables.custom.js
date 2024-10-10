$('.dataTables').DataTable({
    "dom": '<lf<t>ip>', 
    language: {
        searchPlaceholder: "ค้นหาหรือสแกนบาร์โค้ด ...",
        search: '<i class="icons icon-search"></i>', 
        lengthMenu: "_MENU_",  
        infoEmpty:'',
        infoFiltered:'',
        paginate: {
            'previous': '<span class="arrow-left"></span>',
            'next': '<span class="arrow-right"></span>'
        }
    },
    responsive: false, 
});

$(".dataTable").parent().addClass("dataTable-scrollbar");
$(".dataTables_length select").addClass("form-select");
$(".dataTables_filter input").addClass("form-control");

$( ".dataTables_length,.dataTables_filter " ).wrapAll( "<div class='dataTable-option'></div>" );
$( ".dataTables_info, .dataTables_paginate " ).wrapAll( "<div class='dataTable-footer'></div>" );
