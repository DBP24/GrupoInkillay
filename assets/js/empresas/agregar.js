document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#formularioAgregarEmpresa")) {
        let formLogin = document.querySelector("#formularioAgregarEmpresa");
        formLogin.onsubmit = function(e) {
            e.preventDefault();
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Empresas/crearEmpresa';
            var formData = new FormData(formLogin);
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
                            iconColor: "#16e15d",
                            confirmButtonColor:"#16e15d"
                        })
                        .then((result) => {
                            if (result.isConfirmed) { 
                             cargarEmpresas();
                              $('#modalAgregarEmpresa').modal('hide');
                            }
                        });
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: objData.type,
                            title: objData.msg,
                            showConfirmButton: true,
                            allowOutsideClick : false,
                            allowEscapeKey : false,
                            allowEnterKey : false,
                            iconColor: "#16e15d",
                            confirmButtonColor:"#16e15d"
                        })
                    }
                }   
                return false;
            }
        }
    }
});

