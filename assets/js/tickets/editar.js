function verDatos(id) {
    let request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    let ajaxUrl = base_url + "/Tickets/editar/";
    let strData = "id=" + id;
    request.open("POST", ajaxUrl, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(strData);
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        let objData = JSON.parse(request.responseText);
  
        if (objData.status) {
          document.querySelector("#periodo").value = objData.ticket.Periodo;
          document.querySelector("#fechaproceso").value = objData.ticket.FechaProceso;
          document.querySelector("#numero_ticket").value = objData.ticket.NumTicket;
          document.querySelector("#nro_registros_sunat").value = objData.ticket.NumeroRegistrosSUNAT;
          //document.querySelector("#nro_registros").value = objData.ticket.NumeroRegistrosEmpresa;
          document.querySelector("#correlativo").value = objData.ticket.Correlativo;

          
          document.querySelector("#id_ticket").value = objData.ticket.ID_Ticket;
          cargarTipoLibrosEditar(id);
  
          $("#modalEditarTicket").modal("show");
  
        } else {
          swal("Error", objData.msg, "error");
        }
      }
    };
}



function cargarTipoLibrosEditar(id) {
  $.ajax({
    type: "POST",
    url: base_url + "/Tickets/cargarcombos/",
    data: { action: "get-book_type-Purchases-Or-Sales", id: id},
    dataType: "JSON",
    success: function (response) {
      var options = '<option value="0">Todos</option>';
      $.each(response, function (index, value) {
        // console.log(value);
        options +=
          '<option value="' +
          value.IdLibro +
          /*'" data-valida-ticket="' +
          value.ValidaTicket +
          '" data-importa-archivo="' +
          value.ImportaArchivo +*/
          '">' +
          value.LibroNombre +
          "</option>";
      });
      $("#tipo_libro_editar").html(options);

     /* $("#tipo_libro_editar").change(function () {
        // Obtener el valor de ValidaTicket seleccionado
        var validaTicket = $(this).find(":selected").data("valida-ticket");
        var importaArchivo = $(this).find(":selected").data("importa-archivo");
        
        //Validar Nro de Ticket
        if (validaTicket === "N") {
          $('input[name="numero_ticket"]').attr('disabled', true).val('');;
        } else if(validaTicket === "S"){
          $('input[name="numero_ticket"]').attr('disabled', false);
        } else {
          $('input[name="numero_ticket"]').attr('disabled', true).val('');;
        }

        //Validar ImportaArchivo
        if (importaArchivo === "N") {
          $('input[name="archivo"]').attr('disabled', true);
        } else if(importaArchivo === "S"){
          $('input[name="archivo"]').attr('disabled', false);
        } else {
          $('input[name="archivo"]').attr('disabled', true);
        }

      });*/
    },
  }).fail(function (jqXHR, textStatus, errorThrown) {
    console.log(jqXHR);
  });
}