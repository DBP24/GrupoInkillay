$(document).ready(function () {
    var table1 = $('#example3').DataTable();
    // table1({
    //     lengthChange: false,
    //     //order: [],
    //     ordering: false,
    //     searching: false, // Deshabilitar la funcionalidad de búsqueda
    //     columnDefs: [
    //         { width: '2%', targets: 0 },  // Tamaño de la primera columna
    //         { width: '6%', targets: 1 }, // Tamaño de la segunda columna
    //         { width: '10%', targets: 2 }, // Tamaño de la tercera columna
    //         { width: '15%', targets: 3 }, // Tamaño de la cuarta columna
    //         { width: '15%', targets: 4 }, // Tamaño de la quinta columna
    //         { width: '10%', targets: 5 }, // Tamaño de la sexta columna
    //         { sortable:false, targets: "_all"}
    //     ],
    //     language: {
    //         processing:     "Procesando...",
    //         search:         "Buscar:",
    //         lengthMenu:    "Mostrar _MENU_ elementos",
    //         info:           "Mostrando desde _START_ al _END_ de _TOTAL_ elementos",
    //         infoEmpty:      "Mostrando ningún elemento.",
    //         infoFiltered:   "(filtrado _MAX_ elementos total)",
    //         infoPostFix:    "",
    //         loadingRecords: "Cargando registros...",
    //         zeroRecords:    "No se encontraron registros",
    //         emptyTable:     "No hay datos disponibles en la tabla",
    //         paginate: {
    //             first:      "Primero",
    //             previous:   "<<",
    //             next:       ">>",
    //             last:       "Último"
    //         },
    //         aria: {
    //             sortAscending:  ": Activar para ordenar la columna de manera ascendente",
    //             sortDescending: ": Activar para ordenar la columna de manera descendente"
    //         }
    //     }
    // });

    $('#busqueda_tipo_documento, #busqueda_serie1, #busqueda_comprobante1, #busqueda_tipo_libro1, #busqueda_nro_registros1, #busqueda_estado1').on('input', function () {
        // Obtener el valor de los campos de búsqueda
        var tipoDocumento = $('#busqueda_tipo_documento').val().toUpperCase();
        var serie = $('#busqueda_serie1').val().toUpperCase();
        var comprobante = $('#busqueda_comprobante1').val().toUpperCase();
        var tipoLibro = $('#busqueda_tipo_libro1').val().toUpperCase();
        var nroRegistros = $('#busqueda_nro_registros1').val().toUpperCase();
        var estado = $('#busqueda_estado1').val().toUpperCase();

        // Limpiar la búsqueda actual
        table1.search('').draw();

        // Aplicar los nuevos criterios de búsqueda
        table1.columns().every(function () {
            var column = this;
            column.search('').draw();
        });

        if (tipoDocumento !== '0') {
            table1.column(0).search(tipoDocumento).draw();
        }
        if (serie !== '') {
            table1.column(1).search(serie).draw();
        }
        if (comprobante !== '') {
            table1.column(2).search(comprobante).draw();
        }
        if (tipoLibro !== '') {
            table1.column(3).search(tipoLibro).draw();
        }
        if (nroRegistros !== '') {
            table1.column(4).search(nroRegistros).draw();
        }
        if (estado !== '') {
            table1.column(5).search(estado).draw();
        }
    });
});
