document.addEventListener('DOMContentLoaded', function() {
        if (document.querySelector("#formularioLogin")) {
            let formLogin = document.querySelector("#formularioLogin");
            formLogin.onsubmit = function(e) {
                e.preventDefault();
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url + '/login/validarcredenciales';
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
                                icon:  objData.type,
                                title: objData.msg,
                                showConfirmButton: true,
                                allowOutsideClick : false,
                                allowEscapeKey : false,
                                allowEnterKey : false,
                                iconColor: "#429B1B",
                                confirmButtonColor:"#429B1B"
                            })
                            .then((result) => {
                                if (result.isConfirmed) { 
                                   window.location.reload();
                                }
                            });
                        } else {
                            Swal.fire("Atención", objData.msg, objData.type);
                        }
                    } else {
                       Swal.fire("Atención", objData.msg, objData.type);
                    }
                    return false;
                }
            }
        }
});
