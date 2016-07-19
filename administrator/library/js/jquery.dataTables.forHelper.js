
/*--------------------------------------
Function helper for Data Table
--------------------------------------*/


//-- start (collapsing and grouping) --//

detailRow_add = function (id, table, strFor) {
    $(id).find('tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            if (strFor == "receivedDist") {
                row.child(detailRow_Distribution(row.data(), false)).show();
            } else if (strFor == "deliveredDist") {
                row.child(detailRow_Distribution(row.data(), true)).show();
            } else {
                row.child(detailRow_temp(row.data())).show();
            }
            tr.addClass('shown');
        }
    });
}

detailRow_Distribution = function (d, isDelivery) {
    // 'd' is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;margin: -8px -10px -6px 10px;" class="table table-hovered table-striped">' +
            '<tr>' +
                '<th style="width:120px">' + "No Record" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + isNull(d.NumRecord) + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Kode Material" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + d.MaterialCode + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Nama Material" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + d.Material + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Tanggal Distribusi" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + moment(d.DateDist).format("DD/MM/YYYY HH:mm") + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Berat" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + numberFormat(d.Netto) + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "No. Polisi" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + isNull(d.PoliceLicense) + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Supir" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + isNull(d.Driver) + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + (isDelivery?"Lokasi Tujuan":"Lokasi Sumber") + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + isNull(d.Company) + '</td>' +
            '</tr>' +
            '</table>';
}

detailRow_temp = function (d) {
    // 'd' is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;margin: -8px -10px -6px 10px;" class="table table-hovered table-striped">' +
            '<tr>' +
                '<th style="width:120px">' + "Kode Material" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + "00001" + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th style="width:120px">' + "Nama Material" + '</th>' +
                '<td style="width:10px"> : </td>' +
                '<td>' + " 	Pasir Batu" + '</td>' +
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