$(document).ready(function() {

    // Manejar el evento de cambio para los campos de búsqueda
    $('#busqueda_periodo, #busqueda_numero_ticket, #busqueda_fecha_proceso, #busqueda_nro_registros')
        .on('input', function() {
            // Obtener el valor de los campos de búsqueda
            var periodo = $('#busqueda_periodo').val().trim();
            var numeroTicket = $('#busqueda_numero_ticket').val().trim();
            var fechaProceso = $('#busqueda_fecha_proceso').val().trim();
            var nroRegistros = $('#busqueda_nro_registros').val().trim();
            // Filtrar la tabla en función de los valores de búsqueda
            $('tbody tr').each(function() {
                var valorPeriodo = $(this).find('td:eq(1)').text().trim();
                var valorNumeroTicket = $(this).find('td:eq(2)').text().trim();
                var valorFechaProceso = $(this).find('td:eq(3)').text().trim();
                var valorNroRegistros = $(this).find('td:eq(5)').text().trim();
                var mostrarFila =
                    (!periodo || valorPeriodo.includes(periodo)) &&
                    (!numeroTicket || valorNumeroTicket.includes(numeroTicket)) &&
                    (!fechaProceso || valorFechaProceso.includes(fechaProceso)) &&
                    (!nroRegistros || valorNroRegistros.includes(nroRegistros));

                // Mostrar u ocultar la fila según las condiciones de filtro
                $(this).toggle(mostrarFila);
            });
        });


    //Manejar la búsqueda de los selectores
    $('#busqueda_tipo_libro, #busqueda_estado').on('change', function() {
        // Obtener el valor de los campos de búsqueda
        var tipoLibro = $('#busqueda_tipo_libro').val().trim();
        var estado = $('#busqueda_estado').val().trim();
        // Filtrar la tabla en función de los valores de búsqueda
        $('tbody tr').each(function() {

            var valorTipoLibro = $(this).find('td:eq(4)').text().trim();
            var valorEstado = $(this).find('td:eq(6)').text().trim();
            var mostrarFila =
                (tipoLibro === '0' || valorTipoLibro.includes(tipoLibro)) &&
                (estado === 'TODOS' || valorEstado.includes(estado));

            // Mostrar u ocultar la fila según las condiciones de filtro
            $(this).toggle(mostrarFila);
        });
    });
});