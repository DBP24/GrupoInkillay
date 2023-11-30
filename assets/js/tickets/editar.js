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
  
          $("#modalEditarTicket").modal("show");
  
        } else {
          swal("Error", objData.msg, "error");
        }
      }
    };
}

