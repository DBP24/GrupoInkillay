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
            buttons: [{
                extend: 'excel',
                text: 'Exportar en Excel' 
            }],
            language: {
                processing:     "Procesando...",
                search:         "Buscar:",
                lengthMenu:    "Mostrar _MENU_ elementos",
                info:           "Mostrando desde _START_ al _END_ de _TOTAL_ elementos",
                infoEmpty:      "Mostrando ningún elemento.",
                infoFiltered:   "(filtrado _MAX_ elementos total)",
                infoPostFix:    "",
                loadingRecords: "Cargando registros...",
                zeroRecords:    "No se encontraron registros",
                emptyTable:     "No hay datos disponibles en la tabla",
                paginate: {
                    first:      "Primero",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "Último"
                },
                aria: {
                    sortAscending:  ": Activar para ordenar la columna de manera ascendente",
                    sortDescending: ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    
        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });


});