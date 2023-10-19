$(function () {
    "use strict";

    $(document).ready(function () {
        $('#example').DataTable();
    });


    $(document).ready(function () {
        var table = $('#example2').DataTable({
            lengthChange: false,
            ordering: false,
            columnDefs: [{
                targets: "_all",
                sortable: false
            }],
            buttons: ['excel']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });


});