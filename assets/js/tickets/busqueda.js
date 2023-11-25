$(document).ready(function() {

    // Filtro de periodo general haciendo click al boton Buscar
    $('.realizar_busqueda').on('click', function() {
        // Obtener el valor del campo de búsqueda de periodo
        var periodo = $('#busqueda_periodo').val().trim();

        // Filtrar la tabla en función del valor de búsqueda de periodo
        $('tbody tr').each(function() {
            var valorPeriodo = $(this).find('td:eq(7)').text()
                .trim(); // Índice 7 para la columna de Periodo oculta
            var mostrarFila = periodo === "" || valorPeriodo === periodo;

            // Mostrar u ocultar la fila según las condiciones de filtro
            $(this).toggle(mostrarFila);
        });
    });

    //Al estar el campo vacio de periodo, automaticamente me debe de cargar todos los registros
    $('#busqueda_periodo')
        .on('input', function() {
        // Obtener el valor del campo de búsqueda de periodo
        var periodo = $('#busqueda_periodo').val().trim();

        if(periodo === "")
        {
            $('tbody tr').each(function() {
                var valorPeriodo = $(this).find('td:eq(7)').text()
                    .trim(); // Índice 7 para la columna de Periodo oculta
                var mostrarFila = periodo === "";
    
                // Mostrar u ocultar la fila según las condiciones de filtro
                $(this).toggle(mostrarFila);
            });
        }
    });

    // Manejar el evento de cambio para los campos de búsqueda
    $('#busqueda_secuencia, #busqueda_numero_ticket, #busqueda_fecha_proceso, #busqueda_nro_registros')
        .on('input', function() {
            // Obtener el valor de los campos de búsqueda
            var secuencia = $('#busqueda_secuencia').val().trim();
            var numeroTicket = $('#busqueda_numero_ticket').val().trim();
            var fechaProceso = $('#busqueda_fecha_proceso').val().trim();
            var nroRegistros = $('#busqueda_nro_registros').val().trim();
            // Filtrar la tabla en función de los valores de búsqueda
            $('tbody tr').each(function() {
                var valorSecuencia = $(this).find('td:eq(1)').text().trim();
                var valorNumeroTicket = $(this).find('td:eq(2)').text().trim();
                var valorFechaProceso = $(this).find('td:eq(3)').text().trim();
                var valorNroRegistros = $(this).find('td:eq(5)').text().trim();
                var mostrarFila =
                    (!secuencia || valorSecuencia.includes(secuencia)) &&
                    (!numeroTicket || valorNumeroTicket.includes(numeroTicket)) &&
                    (!fechaProceso || valorFechaProceso.includes(fechaProceso)) &&
                    (!nroRegistros || valorNroRegistros.includes(nroRegistros));

                // Mostrar u ocultar la fila según las condiciones de filtro
                $(this).toggle(mostrarFila);
            });
        });


    //Manejar la búsqueda de los selectores
    $('#busqueda_tipo_proceso, #busqueda_estado').on('change', function() {
        // Obtener el valor de los campos de búsqueda
        var tipoProceso = $('#busqueda_tipo_proceso').val().trim();
        var estado = $('#busqueda_estado').val().trim();
        // Filtrar la tabla en función de los valores de búsqueda
        $('tbody tr').each(function() {

            var valorTipoProceso = $(this).find('td:eq(4)').text().trim();
            var valorEstado = $(this).find('td:eq(6)').text().trim();
            var mostrarFila =
                (tipoProceso === 'TODOS' || valorTipoProceso.includes(tipoProceso)) &&
                (estado === 'TODOS' || valorEstado.includes(estado));

            // Mostrar u ocultar la fila según las condiciones de filtro
            $(this).toggle(mostrarFila);
        });
    });
});