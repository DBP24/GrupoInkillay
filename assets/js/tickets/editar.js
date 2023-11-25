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
          document.querySelector("#nro_registros").value = objData.ticket.NumeroRegistros;
          document.querySelector("#correlativo").value = objData.ticket.Correlativo;

          // Obtén el valor del tipo de proceso desde la respuesta
          let tipoProceso = objData.ticket.TipoProceso;

          // Obtén el select
          let selectTipoProceso = document.querySelector("#tipo_proceso");

           // Recorre las opciones del select y selecciona la que coincida con el tipo de proceso
           for (let i = 0; i < selectTipoProceso.options.length; i++) {
            if (selectTipoProceso.options[i].value === tipoProceso) {
              selectTipoProceso.options[i].selected = true;
              break; // No es necesario seguir buscando
            }
          }
          
          document.querySelector("#id_ticket").value = objData.ticket.ID_Ticket;
  
          $("#modalEditarTicket").modal("show");
  
        } else {
          swal("Error", objData.msg, "error");
        }
      }
    };
 }
