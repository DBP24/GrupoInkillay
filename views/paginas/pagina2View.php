<?= headerAdmin($data);?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?=$data['page_content'];?></div>
        </div>
        <!--end breadcrumb-->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
            Agregar
        </button>

        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <!-- <h6 class="mb-0">Recent Orders</h6> -->
                </div>
                <div class="table-responsive mt-2">
                    <!-- <table class="table align-middle mb-0"> -->
                    <table id="example2" class="table align-middle mb-0">

                        <thead class="text-center">
                            <tr>

                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Oficina</th>
                                <th>Edad</th>
                                <th>Fecha de Inicio</th>
                                <th>Sueldo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td> S/ 320,800</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td> S/ 170,750</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td> S/ 86,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td> S/ 433,060</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td> S/ 162,700</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td> S/ 372,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td> S/ 137,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td> S/ 327,900</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td> S/ 205,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td> S/ 103,600</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td> S/ 90,560</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td> S/ 342,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td> S/ 470,600</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td> S/ 313,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td> S/ 385,750</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td> S/ 198,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td> S/ 725,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td> S/ 237,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td> S/ 132,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td> S/ 217,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td> S/ 345,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td> S/ 675,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td> S/ 106,450</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td> S/ 85,600</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td> S/ 1,200,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td> S/ 92,575</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td> S/ 357,650</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td> S/ 206,850</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td> S/ 850,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td> S/ 163,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td> S/ 95,400</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td> S/ 114,500</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td> S/ 145,000</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Oficina</th>
                                <th>Edad</th>
                                <th>Fecha de Inicio</th>
                                <th>Sueldo</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                    <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Paterno:</label>
                                    <input type="text" class="form-control" placeholder="Rouillon"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" maxlength="150" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Materno:</label>
                                    <input type="text" class="form-control" placeholder="Lao"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" maxlength="150" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="mt-3">Nombres:</label>
                                    <input type="text" class="form-control" placeholder="Ricardo"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" maxlength="100" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Cargo:</label>
                                    <select class="form-select" required>
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="">Administrador</option>
                                        <option value="">Secretaria</option>
                                        <option value="">Ingeniero</option>
                                        <option value="">Contador</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Correo Electrónico:</label>
                                    <input type="text" class="form-control" placeholder="hola@grupoinkillay.com"
                                        pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                                        title="Ingrese una dirección de correo electrónico válida" maxlength="50" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Teléfono:</label>
                                    <input type="text" class="form-control" placeholder="2321177" pattern="[0-9]+"
                                        title="Solo se permiten números" maxlength="50" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Número Celular:</label>
                                    <input type="text" class="form-control" placeholder="987456321" pattern="[0-9]+"
                                        title="Solo se permiten números" maxlength="50" required>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mt-3">Fecha Registro:</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Fecha Inicio:</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="mt-3">Fecha Final:</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-3">Importe Contrato (S/):</label>
                                <input type="text" class="form-control" placeholder="3320.00" pattern="[0-9]+"
                                    title="Solo se permiten números" required>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Estado:</label>
                                <input type="text" class="form-control" value="Activo" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= footerAdmin($data)?>
<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?= media();?>/js/dataTables/table-datatable.js"></script>
</body>

</html>