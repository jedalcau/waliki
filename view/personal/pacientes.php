<?php
    include 'header.php'
?>
    <!-- PRINCIPAL SECTION -->
    <div class="page-wrapper">
        <div class="content">
            <!-- ENCABEZADO PACIENTE -->
            <div class="row">
                <!-- TITULO PACIENTE -->
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Pacientes</h4>
                </div>
                <!-- FIN TITULO PACIENTE -->

                <!-- BOTON AGREGAR PACIENTE -->
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="add-paciente.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Agregar Paciente</a>
                </div>
                <!-- FIN BOTON AGREGAR PACIENTE -->
            </div>
            <!-- FIN ENCABEZADO PACIENTE -->

            <!--BUSCADOR PACIENTE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <!--TITULO BUSQUEDA Y BOTON-->
                        <div class="row">
                            <!--PACIENTE-->
                            <div class="col-sm-7 col-6">
                                <h4 class="card-title">Busqueda de Paciente</h4>
                            </div>
                            <!--FIN PERFIL-->

                            <!--BOTON BUSCAR-->
                            <div class="col-sm-5 col-6 text-right m-b-30">
                                <a href="#" class="btn btn-primary btn-rounded"><i class="fa fa-search"></i> Buscar Paciente</a>
                            </div>
                            <!--FIN BOTON BUSCAR-->
                        </div>
                        <!--FIN TITULO BUSQUEDA Y BOTON-->
                        <form>
                            <!--SECCION BUSQUEDA-->
                            <div class="row">
                                <!--BUSQUEDA POR DNI-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">por DNI</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--FIN BUSQUEDA POR DNI-->

                                <!--BUSQUEDA POR APELLIDOS-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">por APELLIDO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--FIN BUSQUEDA POR APELLIDOS-->
                            </div>
                            <!--SECCION BUSQUEDA-->
                        </form>
                    </div>
                </div>
            </div>
            <!--FIN BUSCADOR PACIENTE-->

            <!--TABLA PACIENTE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table datatable mb-0">
                            <!--TITULO TABLA-->
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>EDAD</th>
                                <th>DISTRITO</th>
                                <th>LOCALIDAD</th>
                                <th>TELEFONO</th>
                                <th class="text-right">ACCION</th>
                            </tr>
                            </thead>
                            <!--FIN TITULO TABLA-->
                            <tbody>
                            <!--FILAS TABLA-->
                            <tr>
                                <td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Jennifer Robinson</td>
                                <td>35</td>
                                <td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
                                <td>(207) 808 8863</td>
                                <td>jenniferrobinson@example.com</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!--FIN COLUMNA TABLA-->
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN TABLA PACIENTE-->
        </div>
    </div>
    <!-- FIN PRINCIPAL SECTION -->

    <!-- ALERTA ELIMINACION  -->
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="../assets/img/sent.png" alt="" width="50" height="46">
                    <h3>Are you sure want to delete this Patient?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- FIN ALERTA ELIMINACION -->
<?php
    include 'footer.php'
?>