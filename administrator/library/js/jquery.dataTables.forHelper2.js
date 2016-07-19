
/*--------------------------------------
Function helper for Data Table
--------------------------------------*/


//-- start (collapsing and grouping) --//

detailRow_add = function (id, table) {
    $(id).find('tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        console.log(table);
        var row = table.row(tr);

        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child(detailRow_formatStock(row.data())).show();
            tr.addClass('shown');
        }
    });
}

detailRow_formatStock = function (d) {
    // 'd' is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;margin: -8px -10px -6px 10px;" class="table table-hovered table-striped table-bordered">' +
            '<tr>' +
                '<th>Tanggal</th>' +
                '<th>Masuk</th>' +
                '<th>Keluar</th>' +
                '<th>Saldo</th>' +
            '</tr>' +
            '<tr>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
            '</tr>' +
            '<tr>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
            '</tr>' +
            '<tr>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
                '<td>' + d.extn + '</td>' +
            '</tr>' +
            '</table>';
}

//-- end (collapsing and grouping) --//


//-- start (template editable dataTable) --//
/*function getCodeForm() {
    var data = [
        { "code": "", "url": "misal", "form":"#form-material" },
        { "code": "", "url": "milsa", "form":"#form-komp-material" },
        ]
    return 
}*/
//editRow = function (code, oTable, id) {
editRow = function (Url, oTable) {
    idForm = "#form-komp-material";
//    $.ajax({
//        type: 'POST',
//        url: Url,
//        data: { id: id },
//        success: function (get) {
//            if (get.isSuccess) {
                $(oTable).parents("table").find("tr").removeClass('hidden').parent().find("tr.form-input").remove();

                var obj = $(idForm).clone().removeAttr('id').addClass('form-input');
                var oTr = $(oTable).parents("tr");

                $(oTr).before(obj).addClass('hidden');
//            } else {
//                alertify.alert('Failed', get.msg);
//            }
//        },
//        error: ajax_error_callback,
//        dataType: 'json'
//    });
}


removeRow = function (url,o) {
    $(o).parents("tr").remove();

}

cancelEdit = function (o) {
    $(o).parentsUntil("table").find("tr").removeClass('hidden').parent().find("tr.form-input").remove();
    
}

//-- end (template editable dataTable) --//