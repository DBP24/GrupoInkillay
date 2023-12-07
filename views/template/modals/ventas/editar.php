<!-- Modal Editar Ventas SUNAT-->
<div class="modal fade" id="modalEditarVentasSUNAT" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="formularioActualizarVentasSUNAT" name="formularioActualizarVentasSUNAT" method="POST"
                enctype="multipart/form-data">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Edición o Consulta de un comprobante</h1>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row datos_del_proveedor mb-4">
                            <div class="col-md-4">
                                <label class="mt-3">Tip Doc Identidad</label>
                                <input type="text" class="form-control" name="tipdocidentidad" id="tipdocidentidad">
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Nro Doc Identidad</label>
                                <input type="text" class="form-control" id="nrodocidentidad" name="nrodocidentidad" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Apellidos Nombres / Razón Social</label>
                                <input type="text" class="form-control" id="razonsocial" name="razonsocial" disabled>
                            </div>
                        </div>
                        <div class="row detalles_del_cp mb-4">
                            <div class="col-md-3">

                                <label class="mt-3">Monto Exportacion</label>
                                <input type="text" class="form-control" id="montoexportacion" name="montoexportacion">

                                <label class="mt-3">Base Imponible Gravado</label>
                                <input type="text" class="form-control" id="baseimponiblegravado" name="baseimponiblegravado">

                                <label class="mt-3">Base Imponible Dsct</label>
                                <input type="text" class="form-control" id="baseimponibledsct" name="baseimponibledsct">

                                <label class="mt-3">Base Igv Ipm</label>
                                <input type="text" class="form-control" id="baseigvipm" name="baseigvipm">

                                <label class="mt-3">Dscto Igv Ipm</label>
                                <input type="text" class="form-control" id="dsctoigvipm" name="dsctoigvipm">

                                <label class="mt-3">Monto Exonerado</label>
                                <input type="text" class="form-control" id="montoexonerado" name="montoexonerado">

                                <label class="mt-3">Monto Inafecto</label>
                                <input type="text" class="form-control" id="montoinafecto" name="montoinafecto">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Monto ISC</label>
                                <input type="text" class="form-control" id="montoisc" name="montoisc">

                                <label class="mt-3">Base Imponible Ivap</label>
                                <input type="text" class="form-control" id="baseimponibleivap" name="baseimponibleivap" >

                                <label class="mt-3">Monto Ivap</label>
                                <input type="text" class="form-control" id="montoivap" name="montoivap">

                                <label class="mt-3">Monto ICBPER</label>
                                <input type="text" class="form-control" id="montoicbper" name="montoicbper">

                                <label class="mt-3">Monto Otros tributos</label>
                                <input type="text"  id="montootrostributos" name="montootrostributos" class="form-control">

                                <label class="mt-3">Monto Total</label>
                                <input type="text" class="form-control" id="montototal" name="montototal">

                                <label class="mt-3">Moneda</label>
                                <input type="text" class="form-control" id="moneda" name="moneda">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Tipo Cambio</label>
                                <input type="text" class="form-control" id="tipocambio" name="tipocambio">

                                <label class="mt-3">Fec Emision Doc Modificado</label>
                                <input type="date" class="form-control" id="fecemisiondocmodificado" name="fecemisiondocmodificado">

                                <label class="mt-3">Tipo Doc Modificado</label>
                                <input type="text" class="form-control" id="tipodocmodificado" name="tipodocmodificado">

                                <label class="mt-3">Serie Doc Modificado</label>
                                <input type="text" class="form-control" id="seriedocmodificado" name="seriedocmodificado">

                                <label class="mt-3">Numero Doc Modificado</label>
                                <input type="text" class="form-control" id="numerodocmodificado" name="numerodocmodificado">

                                <label class="mt-3">Proyecto Operados Atribucion</label>
                                <input type="text" class="form-control" id="proyectooperadosatribucion" name="proyectooperadosatribucion">

                                <label class="mt-3">Tipo de Nota</label>
                                <input type="text" class="form-control" id="tipodenota" name="tipodenota">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Estado Comprobante</label>
                                <input type="text" class="form-control" id="estadocomprobante" name="estadocomprobante" >

                                <label class="mt-3">Valor FOB Embarcado</label>
                                <input type="text" class="form-control" id="valorfobembarcado" name="valorfobembarcado" >

                                <label class="mt-3">Valor Operacion Gratuito</label>
                                <input type="text" class="form-control" id="valoroperaciongratuito" name="valoroperaciongratuito" >

                                <label class="mt-3">Tipo Operacion</label>
                                <input type="text" class="form-control" id="tipooperacion" name="tipooperacion" >

                                <label class="mt-3">DamCP</label>
                                <input type="text" class="form-control" id="damcp" name="damcp" >

                                <label class="mt-3">CLU</label>
                                <input type="text" class="form-control" id="clu" name="clu" >

                                <label class="mt-3">Car Sunat</label>
                                <input type="text" class="form-control" id="carsunat" name="carsunat" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="actualizarDatos();" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Editar Ventas Empresa-->
<div class="modal fade" id="modalEditarVentasEmpresa" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="formularioActualizarVentasEmpresa" name="formularioActualizarVentasEmpresa" method="POST"
                enctype="multipart/form-data">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Edición o Consulta de un comprobante</h1>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row datos_del_proveedor mb-4">
                            <div class="col-md-4">
                                <label class="mt-3">Tip Doc Identidad</label>
                                <input type="text" class="form-control" name="tipdocidentidad1" id="tipdocidentidad1">
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Nro Doc Identidad</label>
                                <input type="text" class="form-control" id="nrodocidentidad1" name="nrodocidentidad1" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Apellidos Nombres / Razón Social</label>
                                <input type="text" class="form-control" id="razonsocial1" name="razonsocial1" disabled>
                            </div>
                        </div>
                        <div class="row detalles_del_cp mb-4">
                            <div class="col-md-3">

                                <label class="mt-3">Monto Exportacion</label>
                                <input type="text" class="form-control" id="montoexportacion1" name="montoexportacion1">

                                <label class="mt-3">Base Imponible Gravado</label>
                                <input type="text" class="form-control" id="baseimponiblegravado1" name="baseimponiblegravado1">

                                <label class="mt-3">Base Imponible Dsct</label>
                                <input type="text" class="form-control" id="baseimponibledsct1" name="baseimponibledsct1">

                                <label class="mt-3">Base Igv Ipm</label>
                                <input type="text" class="form-control" id="baseigvipm1" name="baseigvipm1">

                                <label class="mt-3">Dscto Igv Ipm</label>
                                <input type="text" class="form-control" id="dsctoigvipm1" name="dsctoigvipm1">

                                <label class="mt-3">Monto Exonerado</label>
                                <input type="text" class="form-control" id="montoexonerado1" name="montoexonerado1">

                                <label class="mt-3">Monto Inafecto</label>
                                <input type="text" class="form-control" id="montoinafecto1" name="montoinafecto1">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Monto ISC</label>
                                <input type="text" class="form-control" id="montoisc1" name="montoisc1">

                                <label class="mt-3">Base Imponible Ivap</label>
                                <input type="text" class="form-control" id="baseimponibleivap1" name="baseimponibleivap1" >

                                <label class="mt-3">Monto Ivap</label>
                                <input type="text" class="form-control" id="montoivap1" name="montoivap1">

                                <label class="mt-3">Monto ICBPER</label>
                                <input type="text" class="form-control" id="montoicbper1" name="montoicbper1">

                                <label class="mt-3">Monto Otros tributos</label>
                                <input type="text"  id="montootrostributos1" name="montootrostributos1" class="form-control">

                                <label class="mt-3">Monto Total</label>
                                <input type="text" class="form-control" id="montototal1" name="montototal1">

                                <label class="mt-3">Moneda</label>
                                <input type="text" class="form-control" id="moneda1" name="moneda1">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Tipo Cambio</label>
                                <input type="text" class="form-control" id="tipocambio1" name="tipocambio1">

                                <label class="mt-3">Fec Emision Doc Modificado</label>
                                <input type="date" class="form-control" id="fecemisiondocmodificado1" name="fecemisiondocmodificado1">

                                <label class="mt-3">Tipo Doc Modificado</label>
                                <input type="text" class="form-control" id="tipodocmodificado1" name="tipodocmodificado1">

                                <label class="mt-3">Serie Doc Modificado</label>
                                <input type="text" class="form-control" id="seriedocmodificado1" name="seriedocmodificado1">

                                <label class="mt-3">Numero Doc Modificado</label>
                                <input type="text" class="form-control" id="numerodocmodificado1" name="numerodocmodificado1">

                                <label class="mt-3">Proyecto Operados Atribucion</label>
                                <input type="text" class="form-control" id="proyectooperadosatribucion1" name="proyectooperadosatribucion1">

                                <label class="mt-3">Tipo de Nota</label>
                                <input type="text" class="form-control" id="tipodenota1" name="tipodenota1">

                            </div>
                            <div class="col-md-3">

                                <label class="mt-3">Estado Comprobante</label>
                                <input type="text" class="form-control" id="estadocomprobante1" name="estadocomprobante1" >

                                <label class="mt-3">Valor FOB Embarcado</label>
                                <input type="text" class="form-control" id="valorfobembarcado1" name="valorfobembarcado1" >

                                <label class="mt-3">Valor Operacion Gratuito</label>
                                <input type="text" class="form-control" id="valoroperaciongratuito1" name="valoroperaciongratuito1" >

                                <label class="mt-3">Tipo Operacion</label>
                                <input type="text" class="form-control" id="tipooperacion1" name="tipooperacion1" >

                                <label class="mt-3">DamCP</label>
                                <input type="text" class="form-control" id="damcp1" name="damcp1" >

                                <label class="mt-3">CLU</label>
                                <input type="text" class="form-control" id="clu1" name="clu1" >

                                <label class="mt-3">Car Sunat</label>
                                <input type="text" class="form-control" id="carsunat1" name="carsunat1" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="actualizarDatos();" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>