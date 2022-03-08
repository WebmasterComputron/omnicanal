<?php require 'views/header.php'; ?>
<?php require 'funciones/buscadorjs.php'; ?>
<?php require 'funciones/interaccionesjs.php'; ?>
<?php require 'funciones/agendarjs.php'; ?>

<div class="az-content-header d-block d-md-flex">
    <!--<div>
        <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
        <p class="mg-b-0">Your sales monitoring dashboard template.</p>
    </div>-->

    <div class="az-dashboard-header-right"></div><!-- az-dashboard-header-right -->    
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="needs-validation" novalidate onsubmit="return false">
                <div class="card-body">
                    <h6 class="card-title">Informacion del cliente</h6>
                    <div class="row" style="margin-left:5px;">
                        <div class="form-row">
                            <label style="margin-left:10px;">Número de cédula</label>
                            <input style="width:100px;margin-left:10px;" type="text" class="form-control" id="txtcedulabuscar"></input>
                        </div>
                        <div class="form-row" style="margin-left:10px;">
                            <button id="btnguardar" onclick="buscarcedula()" class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
                    <div class="table-responsive" style="height: 230px;">

                        <table class="table">
                            <!-- <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>-->
                            <tbody>

                                <tr>
                                    <td>
                                        <label>
                                            <font size=1>Cédula:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="cedula">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Apellido paterno:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Apellido_paterno">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Apellido materno:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Apellido_materno">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Nombre:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Nombre">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Fecha de nacimiento:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Fecha_nacimiento">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Edad:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Edad">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Sexo:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Sexo">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Correo electrónico:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Correo_electronico">
                                            <font size=1>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label>
                                            <font size=1>Teléfono:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Telefono">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Celular:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Celular">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Ciudad donde vive:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Ciudad">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Calle principal del domicilio:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Calle_principal_domicilio">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Intersección del domicilio:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Interseccion_domicilio">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Tipo afiliación:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Tipo_afiliacion">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Nombre de la empresa:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Nombre_empresa">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Ocupación laboral:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Ocupacion_laboral">
                                            <font size=1>
                                        </label>
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        <label>
                                            <font size=1>Tipo de actividad:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Tipo_actividad">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Teléfono laboral:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Telefono_laboral">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Celular laboral:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Celular_laboral">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Ciudad donde labora:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Ciudad_labora">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Calle principal donde labora:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Calle_principal_labora">
                                            <font size=1>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <font size=1>Intersección donde labora:
                                        </label>
                                    </td>
                                    <td>
                                        <label style="color:blue;" id="Interseccion_donde_labora">
                                            <font size=1>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row" style="display: none;" id="mostrarbotones">

    <div class="col-6">
        <div class="card bd-0">
            <div class="card-header bg-gray-400 bd-b-0-f pd-b-0">
                <nav class="nav nav-tabs">
                    <a class="nav-link active" data-toggle="tab" href="#tabCont1">Interacciones</a>
                    <a class="nav-link" data-toggle="tab" href="#tabCont2">Info-Cliente</a>
                    <a class="nav-link" data-toggle="tab" href="#tabCont3">Actualizar-Cliente</a>
                </nav>
            </div><!-- card-header -->
            
            <div class="card-body bd bd-t-0 tab-content">

                <div id="tabCont1" class="tab-pane active show">
                    <div class="col-12" style="display: none;" id="btinteraccion">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="card">

                                            <div class="form-row">
                                                <button id="" onclick="btninter()" class="btn btn-success">Agregar Interaccion</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12" id="CardInter" style="display: none;">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Ingreso de interacción</h6>
                                    <form class="needs-validation" novalidate onsubmit="return false">

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3" style="display: none">
                                                <label for="txtNombre">Fecha</label>
                                                <input required type="text" class="form-control" name="datepicker1" id="datepicker1" />
                                                <div class="invalid-feedback">Seleccione Fecha</div>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Canal</label>
                                                <select required onchange="" name="procedencias" id="procedencias" class="select2 form-control select2-size-md">
                                                    <option value=""></option>
                                                    <option value="web">web</option>
                                                    <option value="whatsapp">whatsapp</option>
                                                    <option value="callcenter">callcenter</option>
                                                </select>
                                                <div class="invalid-feedback">Seleccione Procedencia</div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>Campaña</label>
                                                <select required onchange="cargar_tipificacion(this.value)" name="campana" id="campana" class="select2 form-control select2-size-md">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($this->cam as $row) {
                                                    ?>
                                                        <option value=<?php echo ($row["id_campana"]); ?>><?php echo ($row["nombre_campana"]); ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">Seleccione campaña</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Tipificaciones</label>
                                                <select required onchange="" name="tipificaciones" id="tipificaciones" class="select2 form-control select2-size-md">
                                                    <option value=""></option>
                                                 
                                                </select>
                                                <div class="invalid-feedback">Seleccione tipificacion</div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>Telefono Contacto</label>
                                                <input type="text" class="form-control" id="txttelefonocontacto"></input>
                                                <div class="invalid-feedback">Ingrese el telefono</div>
                                            </div>
                                            <div class="col-md-6 mb-3" style="display: none">
                                                <label>Cédula</label>
                                                <input type="text" class="form-control" id="txtcedula"></input>
                                                <div class="invalid-feedback">Ingrese la cédula</div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label>Observacion</label>
                                                <textarea type="text" class="form-control" id="txtObservacion"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <button id="btnguardar1" onclick="ValidarInteracciones()" class="btn btn-primary">Guardar</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12" style="display: none;" id="tablainteraccion">
                        <div class="card-body">
                            <h6 class="card-title">Interacciones</h6>
                            <span class="d-block mg-b-20">Lista de interacciones.</span>
                            <div class="table-responsive">
                                <table id="interacciones" class="display stripet" style="font-weight: bold; width:100%;">

                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- tab-pane -->

                <div id="tabCont2" class="tab-pane">
                    <div class="table-responsive">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Ingreso de usuarios</h6>
                                    <form class="needs-validation" novalidate onsubmit="return false">
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Cedula</label>
                                                <input type="text" class="form-control" id="cedula2"></input>
                                                <div class="invalid-feedback">Ingrese la cedula</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="Apellido_paterno2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido paterno</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Materno</label>
                                                <input type="text" class="form-control" id="Apellido_materno2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido materno</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Nombre</label>
                                                <input type="text" class="form-control" id="Nombre2"></input>
                                                <div class="invalid-feedback">Ingrese el nombre</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Fecha de nacimiento</label>
                                                <input type="text" class="form-control" id="Fecha_nacimiento2"></input>
                                                <div class="invalid-feedback">Ingrese la fecha de nacimiento</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Edad</label>
                                                <input type="text" class="form-control" id="Edad2"></input>
                                                <div class="invalid-feedback">Ingrese la edad</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Sexo</label>
                                                <input type="text" class="form-control" id="Sexo2"></input>
                                                <div class="invalid-feedback">Ingrese el sexo</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Estado Civil</label>
                                                <input type="text" class="form-control" id="Estado_civil2"></input>
                                                <div class="invalid-feedback">Ingrese el estado civil</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Correo Electronico</label>
                                                <input type="text" class="form-control" id="Correo_electronico2"></input>
                                                <div class="invalid-feedback">Ingrese el correo electronico</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Teléfono</label>
                                                <input type="text" class="form-control" id="Telefono2"></input>
                                                <div class="invalid-feedback">Ingrese el telefono</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Celular</label>
                                                <input type="text" class="form-control" id="Celular2"></input>
                                                <div class="invalid-feedback">Ingrese el celular</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">País</label>
                                                <input type="text" class="form-control" id="Pais2"></input>
                                                <div class="invalid-feedback">Ingrese el pais</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tipo de Cédula</label>
                                                <input type="text" class="form-control" id="Tipo_cedula2"></input>
                                                <div class="invalid-feedback">Ingrese tipo de cedula</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Número de hijos</label>
                                                <input type="text" class="form-control" id="Numero_hijos2"></input>
                                                <div class="invalid-feedback">Ingrese el numero de hijos</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Nivel de Educación</label>
                                                <input type="text" class="form-control" id="Nivel_educacion2"></input>
                                                <div class="invalid-feedback">Ingrese nivel de educación</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Situación Laboral</label>
                                                <input type="text" class="form-control" id="Situacion_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese la situación laboral</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Antiguedad Laboral</label>
                                                <input type="text" class="form-control" id="Antiguedad_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese antiguedad laboral</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tip de Contrato</label>
                                                <input type="text" class="form-control" id="Tipo_contrato2"></input>
                                                <div class="invalid-feedback">Ingrese tipo de contrato</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tipo de Afiliación</label>
                                                <input type="text" class="form-control" id="Tipo_afiliacion2"></input>
                                                <div class="invalid-feedback">Ingrese tipo de afiliación</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Día de Pago</label>
                                                <input type="text" class="form-control" id="Dia_pago2"></input>
                                                <div class="invalid-feedback">Ingrese el dia de pago</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Envio Correspondencia</label>
                                                <input type="text" class="form-control" id="Envio_correspondencia2"></input>
                                                <div class="invalid-feedback">Ingrese el envio de correspondencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tipo de Vehículo</label>
                                                <input type="text" class="form-control" id="Tipo_vehiculo2"></input>
                                                <div class="invalid-feedback">Ingrese el tipo de vehiculo</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Total de Ingresos</label>
                                                <input type="text" class="form-control" id="Total_ingresos2"></input>
                                                <div class="invalid-feedback">Ingrese el total de ingresos</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Total de Egresos</label>
                                                <input type="text" class="form-control" id="Total_egresos2"></input>
                                                <div class="invalid-feedback">Ingrese el total de egresos</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Otros Ingresos</label>
                                                <input type="text" class="form-control" id="Otros_ingresos2"></input>
                                                <div class="invalid-feedback">Ingrese otros ingresos</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Origen de otros Ingresos</label>
                                                <input type="text" class="form-control" id="Origen_otros_ingresos2"></input>
                                                <div class="invalid-feedback">Ingrese el origen de otros ingresos</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Ciudad</label>
                                                <input type="text" class="form-control" id="Ciudad2"></input>
                                                <div class="invalid-feedback">Ingrese la ciudad</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Barrio de Domicilio</label>
                                                <input type="text" class="form-control" id="Barrio_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese el barrio de domicilio</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Calle Principal Domicilio</label>
                                                <input type="text" class="form-control" id="Calle_principal_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese la calle principal del domicilio</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Numero Casa Domicilio</label>
                                                <input type="text" class="form-control" id="Numero_casa_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese el Numero de Casa del Domicilio</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Número de Bloque</label>
                                                <input type="text" class="form-control" id="Bloque_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese el número de bloque</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Departamento Domicilio</label>
                                                <input type="text" class="form-control" id="Departamento_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese el departamento</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Intersección Domicilio</label>
                                                <input type="text" class="form-control" id="Interseccion_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese la interseccion de domicilio</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Manzana Domicilio</label>
                                                <input type="text" class="form-control" id="Manzana_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese la manzana del domicilio</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Solar del Domicilio</label>
                                                <input type="text" class="form-control" id="Solar_domicilio2"></input>
                                                <div class="invalid-feedback">Ingrese el solar del domicilio</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tip de vivienda</label>
                                                <input type="text" class="form-control" id="Tipo_vivienda2"></input>
                                                <div class="invalid-feedback">Ingrese el tipo de vivienda</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Antiguedad Residencia</label>
                                                <input type="text" class="form-control" id="Antiguedad_residencia2"></input>
                                                <div class="invalid-feedback">Ingrese la antiguedad de residencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Teléfono Laboral</label>
                                                <input type="text" class="form-control" id="Telefono_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese el teléfono laboral</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Celular Laboral</label>
                                                <input type="text" class="form-control" id="Celular_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese el celular laboral</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Ciudad donde Labora</label>
                                                <input type="text" class="form-control" id="Ciudad_labora2"></input>
                                                <div class="invalid-feedback">Ingrese la ciudad laboral</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Nombre de la Empresa</label>
                                                <input type="text" class="form-control" id="Nombre_empresa2"></input>
                                                <div class="invalid-feedback">Ingrese el nombre de la empresa</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Ocupación Laboral</label>
                                                <input type="text" class="form-control" id="Ocupacion_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese la ocupacion laboral</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Tipo de Actividad</label>
                                                <input type="text" class="form-control" id="Tipo_actividad2"></input>
                                                <div class="invalid-feedback">Ingrese el tipo de actividad</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Barrio donde Labora</label>
                                                <input type="text" class="form-control" id="Barrio_labora2"></input>
                                                <div class="invalid-feedback">Ingrese el barrio donde labora</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Calle Principal Labora</label>
                                                <input type="text" class="form-control" id="Calle_principal_labora2"></input>
                                                <div class="invalid-feedback">Ingrese la calle principal donde labora</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Número casa laboral</label>
                                                <input type="text" class="form-control" id="Numero_casa_donde_labora2"></input>
                                                <div class="invalid-feedback">Ingrese el número de casa donde labora</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Intersección laboral</label>
                                                <input type="text" class="form-control" id="Interseccion_donde_labora2"></input>
                                                <div class="invalid-feedback">Ingrese la interseccion donde labora</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Manzana donde Labora</label>
                                                <input type="text" class="form-control" id="Manzana_laboral2"></input>
                                                <div class="invalid-feedback">Ingrese la manzana donde labora</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Solar Villa donde Labora</label>
                                                <input type="text" class="form-control" id="Solar_villa_donde_labora2"></input>
                                                <div class="invalid-feedback">Ingrese el solar de villa donde labora</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Cédula de Cónyuge</label>
                                                <input type="text" class="form-control" id="Cedula_conyuge2"></input>
                                                <div class="invalid-feedback">Ingrese la cedula de cónyuge</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Paterno Cónyuge</label>
                                                <input type="text" class="form-control" id="Apellido_paterno_conyuge2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido paterno de cónyuge</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Materno Cónyuge</label>
                                                <input type="text" class="form-control" id="Apellido_materno_conyuge2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido materno de cónyuge</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Nombre de Cónyuge</label>
                                                <input type="text" class="form-control" id="Nombre_conyuge2"></input>
                                                <div class="invalid-feedback">Ingrese el nombre de cónyuge</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Paterno de Referencia</label>
                                                <input type="text" class="form-control" id="Apellido_paterno_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido paterno de referencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Apellido Materno de Referencia</label>
                                                <input type="text" class="form-control" id="Apellido_materno_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el apellido materno de referencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Nombre de Referencia</label>
                                                <input type="text" class="form-control" id="Nombre_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el nombre de referencia</div>

                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Teléfono de Referencia</label>
                                                <input type="text" class="form-control" id="Telefono_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el teléfono de referencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Celular de referencia</label>
                                                <input type="text" class="form-control" id="Celular_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el celular de referencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Ciudad de Referencia</label>
                                                <input type="text" class="form-control" id="Ciudad_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese la ciudad de referencia</div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label style="font-size:9px;">Parentesco Referencia</label>
                                                <input type="text" class="form-control" id="Parentesco_referencia2"></input>
                                                <div class="invalid-feedback">Ingrese el parentesco de referencia</div>

                                            </div>

                                        </div>                                   

                                                <!--<div class="form-row">
                                                    <button id="btnguardar" onclick="Validarbuscador2()" class="btn btn-primary">Actualizar</button>
                                                </div>-->
                                    </form>                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tabCont3" class="tab-pane">
                    <div class="table-responsive">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Actualizacion de usuarios</h6>
                                    <form class="needs-validation" novalidate onsubmit="return false">

                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Cedula</label>
                                            <input type="text" class="form-control" id="cedula2"></input>
                                            <div class="invalid-feedback">Ingrese la cedula</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="Apellido_paterno2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido paterno</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Materno</label>
                                            <input type="text" class="form-control" id="Apellido_materno2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido materno</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Nombre</label>
                                            <input type="text" class="form-control" id="Nombre2"></input>
                                            <div class="invalid-feedback">Ingrese el nombre</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Fecha de nacimiento</label>
                                            <input type="text" class="form-control" id="Fecha_nacimiento2"></input>
                                            <div class="invalid-feedback">Ingrese la fecha de nacimiento</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Edad</label>
                                            <input type="text" class="form-control" id="Edad2"></input>
                                            <div class="invalid-feedback">Ingrese la edad</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Sexo</label>
                                            <input type="text" class="form-control" id="Sexo2"></input>
                                            <div class="invalid-feedback">Ingrese el sexo</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Estado Civil</label>
                                            <input type="text" class="form-control" id="Estado_civil2"></input>
                                            <div class="invalid-feedback">Ingrese el estado civil</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Correo Electronico</label>
                                            <input type="text" class="form-control" id="Correo_electronico2"></input>
                                            <div class="invalid-feedback">Ingrese el correo electronico</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Teléfono</label>
                                            <input type="text" class="form-control" id="Telefono2"></input>
                                            <div class="invalid-feedback">Ingrese el telefono</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Celular</label>
                                            <input type="text" class="form-control" id="Celular2"></input>
                                            <div class="invalid-feedback">Ingrese el celular</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">País</label>
                                            <input type="text" class="form-control" id="Pais2"></input>
                                            <div class="invalid-feedback">Ingrese el pais</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tipo de Cédula</label>
                                            <input type="text" class="form-control" id="Tipo_cedula2"></input>
                                            <div class="invalid-feedback">Ingrese tipo de cedula</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Número de hijos</label>
                                            <input type="text" class="form-control" id="Numero_hijos2"></input>
                                            <div class="invalid-feedback">Ingrese el numero de hijos</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Nivel de Educación</label>
                                            <input type="text" class="form-control" id="Nivel_educacion2"></input>
                                            <div class="invalid-feedback">Ingrese nivel de educación</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Situación Laboral</label>
                                            <input type="text" class="form-control" id="Situacion_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese la situación laboral</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Antiguedad Laboral</label>
                                            <input type="text" class="form-control" id="Antiguedad_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese antiguedad laboral</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tip de Contrato</label>
                                            <input type="text" class="form-control" id="Tipo_contrato2"></input>
                                            <div class="invalid-feedback">Ingrese tipo de contrato</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tipo de Afiliación</label>
                                            <input type="text" class="form-control" id="Tipo_afiliacion2"></input>
                                            <div class="invalid-feedback">Ingrese tipo de afiliación</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Día de Pago</label>
                                            <input type="text" class="form-control" id="Dia_pago2"></input>
                                            <div class="invalid-feedback">Ingrese el dia de pago</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Envio Correspondencia</label>
                                            <input type="text" class="form-control" id="Envio_correspondencia2"></input>
                                            <div class="invalid-feedback">Ingrese el envio de correspondencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tipo de Vehículo</label>
                                            <input type="text" class="form-control" id="Tipo_vehiculo2"></input>
                                            <div class="invalid-feedback">Ingrese el tipo de vehiculo</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Total de Ingresos</label>
                                            <input type="text" class="form-control" id="Total_ingresos2"></input>
                                            <div class="invalid-feedback">Ingrese el total de ingresos</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Total de Egresos</label>
                                            <input type="text" class="form-control" id="Total_egresos2"></input>
                                            <div class="invalid-feedback">Ingrese el total de egresos</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Otros Ingresos</label>
                                            <input type="text" class="form-control" id="Otros_ingresos2"></input>
                                            <div class="invalid-feedback">Ingrese otros ingresos</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Origen de otros Ingresos</label>
                                            <input type="text" class="form-control" id="Origen_otros_ingresos2"></input>
                                            <div class="invalid-feedback">Ingrese el origen de otros ingresos</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Ciudad</label>
                                            <input type="text" class="form-control" id="Ciudad2"></input>
                                            <div class="invalid-feedback">Ingrese la ciudad</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Barrio de Domicilio</label>
                                            <input type="text" class="form-control" id="Barrio_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese el barrio de domicilio</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Calle Principal Domicilio</label>
                                            <input type="text" class="form-control" id="Calle_principal_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese la calle principal del domicilio</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Numero Casa Domicilio</label>
                                            <input type="text" class="form-control" id="Numero_casa_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese el Numero de Casa del Domicilio</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Número de Bloque</label>
                                            <input type="text" class="form-control" id="Bloque_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese el número de bloque</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Departamento Domicilio</label>
                                            <input type="text" class="form-control" id="Departamento_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese el departamento</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Intersección Domicilio</label>
                                            <input type="text" class="form-control" id="Interseccion_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese la interseccion de domicilio</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Manzana Domicilio</label>
                                            <input type="text" class="form-control" id="Manzana_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese la manzana del domicilio</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Solar del Domicilio</label>
                                            <input type="text" class="form-control" id="Solar_domicilio2"></input>
                                            <div class="invalid-feedback">Ingrese el solar del domicilio</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tip de vivienda</label>
                                            <input type="text" class="form-control" id="Tipo_vivienda2"></input>
                                            <div class="invalid-feedback">Ingrese el tipo de vivienda</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Antiguedad Residencia</label>
                                            <input type="text" class="form-control" id="Antiguedad_residencia2"></input>
                                            <div class="invalid-feedback">Ingrese la antiguedad de residencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Teléfono Laboral</label>
                                            <input type="text" class="form-control" id="Telefono_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese el teléfono laboral</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Celular Laboral</label>
                                            <input type="text" class="form-control" id="Celular_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese el celular laboral</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Ciudad donde Labora</label>
                                            <input type="text" class="form-control" id="Ciudad_labora2"></input>
                                            <div class="invalid-feedback">Ingrese la ciudad laboral</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Nombre de la Empresa</label>
                                            <input type="text" class="form-control" id="Nombre_empresa2"></input>
                                            <div class="invalid-feedback">Ingrese el nombre de la empresa</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Ocupación Laboral</label>
                                            <input type="text" class="form-control" id="Ocupacion_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese la ocupacion laboral</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Tipo de Actividad</label>
                                            <input type="text" class="form-control" id="Tipo_actividad2"></input>
                                            <div class="invalid-feedback">Ingrese el tipo de actividad</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Barrio donde Labora</label>
                                            <input type="text" class="form-control" id="Barrio_labora2"></input>
                                            <div class="invalid-feedback">Ingrese el barrio donde labora</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Calle Principal Labora</label>
                                            <input type="text" class="form-control" id="Calle_principal_labora2"></input>
                                            <div class="invalid-feedback">Ingrese la calle principal donde labora</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Número casa laboral</label>
                                            <input type="text" class="form-control" id="Numero_casa_donde_labora2"></input>
                                            <div class="invalid-feedback">Ingrese el número de casa donde labora</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Intersección laboral</label>
                                            <input type="text" class="form-control" id="Interseccion_donde_labora2"></input>
                                            <div class="invalid-feedback">Ingrese la interseccion donde labora</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Manzana donde Labora</label>
                                            <input type="text" class="form-control" id="Manzana_laboral2"></input>
                                            <div class="invalid-feedback">Ingrese la manzana donde labora</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Solar Villa donde Labora</label>
                                            <input type="text" class="form-control" id="Solar_villa_donde_labora2"></input>
                                            <div class="invalid-feedback">Ingrese el solar de villa donde labora</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Cédula de Cónyuge</label>
                                            <input type="text" class="form-control" id="Cedula_conyuge2"></input>
                                            <div class="invalid-feedback">Ingrese la cedula de cónyuge</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Paterno Cónyuge</label>
                                            <input type="text" class="form-control" id="Apellido_paterno_conyuge2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido paterno de cónyuge</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Materno Cónyuge</label>
                                            <input type="text" class="form-control" id="Apellido_materno_conyuge2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido materno de cónyuge</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Nombre de Cónyuge</label>
                                            <input type="text" class="form-control" id="Nombre_conyuge2"></input>
                                            <div class="invalid-feedback">Ingrese el nombre de cónyuge</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Paterno de Referencia</label>
                                            <input type="text" class="form-control" id="Apellido_paterno_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido paterno de referencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Apellido Materno de Referencia</label>
                                            <input type="text" class="form-control" id="Apellido_materno_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el apellido materno de referencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Nombre de Referencia</label>
                                            <input type="text" class="form-control" id="Nombre_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el nombre de referencia</div>

                                        </div>
                                        </div>
                                        <div class="form-row">

                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Teléfono de Referencia</label>
                                            <input type="text" class="form-control" id="Telefono_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el teléfono de referencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Celular de referencia</label>
                                            <input type="text" class="form-control" id="Celular_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el celular de referencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Ciudad de Referencia</label>
                                            <input type="text" class="form-control" id="Ciudad_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese la ciudad de referencia</div>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label style="font-size:9px;">Parentesco Referencia</label>
                                            <input type="text" class="form-control" id="Parentesco_referencia2"></input>
                                            <div class="invalid-feedback">Ingrese el parentesco de referencia</div>

                                        </div>

                                        </div>  
                                        <div class="form-row">
                                            <button id="btnguardar" onclick="Validarbuscador2()" class="btn btn-primary">Actualizar</button>
                                        </div>
                                    </form>
                    
                                </div>
                
                            </div>
                        </div>

                    </div>

                </div>

            </div><!-- card-body -->
        </div><!-- card -->
    </div>


    <div class="col-6">
        <div class="card bd-0">
            <div class="card-header bg-gray-400 bd-b-0-f pd-b-0">
                <nav class="nav nav-tabs">
                    <a class="nav-link active" data-toggle="tab" href="#tabCont_1">Agendar</a>
                    <!--<a class="nav-link" data-toggle="tab" href="#tabCont2">Agendar</a>-->
                    <!--<a class="nav-link" data-toggle="tab" href="#tabCont3">Contact</a>-->
                </nav>
            </div><!-- card-header -->
            <div class="card-body bd bd-t-0 tab-content">
                <div id="tabCont_1" class="tab-pane active show">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="card">

                                            <div class="form-row">
                                                <button id="" onclick="btnagenda()" class="btn btn-success">Agregar Agenda</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12" id="CardAgenda" style="display: none;">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Agregar agenda</h6>
                                    <form class="needs-validation" novalidate onsubmit="return false">

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="txtNombre">Fecha</label>
                                                <input required type="text" class="form-control" name="datepicker2" id="datepicker2" />
                                                <div class="invalid-feedback">Seleccione Fecha</div>
                                            </div>

                                            <div class="col-md-6 mb-3" style='display:none'>
                                                <label>Cedula</label>
                                                <select required onchange="" name="Cedulas" id="Cedulas" class="select2 form-control select2-size-md">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($this->ced as $row) {
                                                    ?>
                                                        <option value=<?php echo ($row["registro_cedula"]); ?>><?php echo ($row["registro_cedula"]); ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">Seleccione Cedula</div>

                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label>Observacion</label>
                                                <textarea type="text" class="form-control" id="txtObservacion1"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <button id="btnguardar2" onclick="ValidarAgendar()" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card-body">
                            <h6 class="card-title">Agendar</h6>
                            <span class="d-block mg-b-20">Lista de agenda.</span>
                            <div class="table-responsive">
                                <table id="agendar" class="display stripet" style="font-weight: bold; width:100%;">

                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- tab-pane -->

            </div><!-- card-body -->
        </div><!-- card -->
    </div>

</div>

<?php require 'views/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/datatables.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>

<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.4/css/dx.common.css">
<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.4/css/dx.light.css">
<link rel="stylesheet" href="index.css">
<script type="text/javascript" src="https://cdn3.devexpress.com/jslib/21.2.4/js/dx.all.js"></script>

<script>
    function btnagenda() {
        $("#CardAgenda").show(500);
        $("#CardInter").hide();

    }

    function btninter() {
        $("#CardInter").show(500);
        $("#CardAgenda").hide();

    }
    $("#datepicker1").flatpickr({
        // mode: "range",
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        //dateFormat: "m",
        // maxDate: dtpfin,
        //  noCalendar: true,
        //minDate: dtpini,
        //defaultDate: [dtpini,dtpfin],
        onChange: ([start, end]) => {
            if (start && end) {

                var s = moment(start).format('YYYY-MM-DD');
                var e = moment(end).format('YYYY-MM-DD');
                // starDate = s;
                //endDate = e;

            }
        },
    });
    $('.select2').select2({
        placeholder: "Elije una opcion"
    });
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    //traerinteracciones();
</script>
<script>
    $("#datepicker2").flatpickr({
        // mode: "range",
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        //dateFormat: "m",
        // maxDate: dtpfin,
        //  noCalendar: true,
        //minDate: dtpini,
        //defaultDate: [dtpini,dtpfin],
        onChange: ([start, end]) => {
            if (start && end) {

                var s = moment(start).format('YYYY-MM-DD');
                var e = moment(end).format('YYYY-MM-DD');
                // starDate = s;
                //endDate = e;

            }
        },
    });
    $('.select2').select2({
        placeholder: "Elije una opcion"
    });
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    traeragendar();

    function buscarcedula() {
        Validarbuscador();
        cedulaglobal();
        validarinteraccion();
    }

    $('.az-nav-tabs .tab-link').on('click', function(e) {
        e.preventDefault();
        $(this).addClass('active');
        $(this).parent().siblings().find('.tab-link').removeClass('active');

        var target = $(this).attr('href');
        $(target).addClass('active');
        $(target).siblings().removeClass('active');
    })
</script>