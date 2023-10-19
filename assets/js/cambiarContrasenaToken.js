$(document).ready(function() {
    $('#cambiar').click(function(e) {
        e.preventDefault();
        var correo = $('#correo').val();
        var pass_1 = $('#pass_1').val();
        var pass_2 = $('#pass_2').val();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + '/recuperarcontrasena/recuperar';
        var formData = new FormData();
        formData.append('correo', correo);
        formData.append('pass_1', pass_1);
        formData.append('pass_2', pass_2);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function() {
        if (request.readyState != 4) return;
        if (request.status == 200) {
            var objData = JSON.parse(request.responseText);
            if (objData.status) {
                Swal.fire({
                    position: 'center',
                    icon: objData.type,
                    title: objData.msg,
                    showConfirmButton: true,
                    allowOutsideClick : false,
                    allowEscapeKey : false,
                    allowEnterKey : false,
                }).then((result) => {
                        if (result.isConfirmed) { 
                              window.location.href=base_url + '/recuperarcontrasena/CambiarContrasenaToken';
                        }
                    });
            } else {
                    Swal.fire("error", objData.msg, objData.type);
                }
        } else {
            Swal.fire("Atención", objData.msg, objData.type);
        }
        return false;
        }
    });
});
  
  