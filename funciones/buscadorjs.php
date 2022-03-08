<?php

$urlTraerbuscador = constant('URL') . 'buscador/traerbuscador/';
$urlGuardarbuscador = constant('URL') . 'buscador/guardarbuscador/';
$urlbuscador = constant('URL') . 'buscador/buscador/';
$urlactualizarcliente = constant('URL') . 'buscador/Actualizarcliente/';
$urlcargar_tipificacion = constant('URL') . 'buscador/cargar_tipificacion/';
?>
<script>
    var url = '<?php echo $urlTraerbuscador; ?>';
    var urlbuscador = '<?php echo $urlGuardarbuscador; ?>';
    var urlbotonbuscador = '<?php echo $urlbuscador; ?>';
    var urlclienteactualizar = '<?php echo $urlactualizarcliente; ?>';
    var urlcargar_tipificacion = '<?php echo $urlcargar_tipificacion; ?>'; 



    function Validarbuscador() {
        var cedula = $("#txtcedulabuscar").val();

        console.log(cedula);

        if (cedula == "") {

        } else {

            var data = {
                cedula: cedula
            }

            buscador(data);

        }

    }

    function Validarbuscador2() {

        var cedula2 = $("#cedula2").val();
        var Apellido_paterno2 = $("#Apellido_paterno2").val();
        var Apellido_materno2 = $("#Apellido_materno2").val();
        var Nombre2 = $("#Nombre2").val();
        var Fecha_nacimiento2 = $("#Fecha_nacimiento2").val();
        var Edad2 = $("#Edad2").val();
        var Sexo2 = $("#Sexo2").val();
        var Estado_civil2 = $("#Estado_civil2").val();
        var Correo_electronico2 = $("#Correo_electronico2").val();
        var Telefono2 = $("#Telefono2").val();
        var Celular2 = $("#Celular2").val();
        var Pais2 = $("#Pais2").val();
        var Tipo_cedula2 = $("#Tipo_cedula2").val();
        var Numero_hijos2 = $("#Numero_hijos2").val();
        var Nivel_educacion2 = $("#Nivel_educacion2").val();
        var Situacion_laboral2 = $("#Situacion_laboral2").val();
        var Antiguedad_laboral2 = $("#Antiguedad_laboral2").val();
        var Tipo_contrato2 = $("#Tipo_contrato2").val();
        var Tipo_afiliacion2 = $("#Tipo_afiliacion2").val();
        var Dia_pago2 = $("#Dia_pago2").val();
        var Envio_correspondencia2 = $("#Envio_correspondencia2").val();

        var Tipo_vehiculo2 = $("#Tipo_vehiculo2").val();
        var Total_ingresos2 = $("#Total_ingresos2").val();
        var Total_egresos2 = $("#Total_egresos2").val();
        var Otros_ingresos2 = $("#Otros_ingresos2").val();
        var Origen_otros_ingresos2 = $("#Origen_otros_ingresos2").val();
        var Ciudad2 = $("#Ciudad2").val();
        var Barrio_domicilio2 = $("#Barrio_domicilio2").val();
        var Calle_principal_domicilio2 = $("#Calle_principal_domicilio2").val();
        var Numero_casa_domicilio2 = $("#Numero_casa_domicilio2").val();
        var Bloque_domicilio2 = $("#Bloque_domicilio2").val();
        var Departamento_domicilio2 = $("#Departamento_domicilio2").val();
        var Interseccion_domicilio2 = $("#Interseccion_domicilio2").val();
        var Manzana_domicilio2 = $("#Manzana_domicilio2").val();
        var Solar_domicilio2 = $("#Solar_domicilio2").val();
        var Tipo_vivienda2 = $("#Tipo_vivienda2").val();
        var Antiguedad_residencia2 = $("#Antiguedad_residencia2").val();
        var Telefono_laboral2 = $("#Telefono_laboral2").val();
        var Celular_laboral2 = $("#Celular_laboral2").val();
        var Ciudad_labora2 = $("#Ciudad_labora2").val();
        var Nombre_empresa2 = $("#Nombre_empresa2").val();

        var Ocupacion_laboral2 = $("#Ocupacion_laboral2").val();
        var Tipo_actividad2 = $("#Tipo_actividad2").val();
        var Barrio_labora2 = $("#Barrio_labora2").val();
        var Calle_principal_labora2 = $("#Calle_principal_labora2").val();
        var Numero_casa_donde_labora2 = $("#Numero_casa_donde_labora2").val();
        var Interseccion_donde_labora2 = $("#Interseccion_donde_labora2").val();
        var Manzana_laboral2 = $("#Manzana_laboral2").val();
        var Solar_villa_donde_labora2 = $("#Solar_villa_donde_labora2").val();
        var Cedula_conyuge2 = $("#Cedula_conyuge2").val();
        var Apellido_paterno_conyuge2 = $("#Apellido_paterno_conyuge2").val();
        var Apellido_materno_conyuge2 = $("#Apellido_materno_conyuge2").val();
        var Nombre_conyuge2 = $("#Nombre_conyuge2").val();
        var Apellido_paterno_referencia2 = $("#Apellido_paterno_referencia2").val();
        var Apellido_materno_referencia2 = $("#Apellido_materno_referencia2").val();
        var Nombre_referencia2 = $("#Nombre_referencia2").val();
        var Telefono_referencia2 = $("#Telefono_referencia2").val();
        var Celular_referencia2 = $("#Celular_referencia2").val();
        var Ciudad_referencia2 = $("#Ciudad_referencia2").val();
        var Parentesco_referencia2 = $("#Parentesco_referencia2").val();

        console.log(cedula2);

        if (cedula == "") {

        } else if (Apellido_paterno2 == "") {

        } else {

            var data = {

                cedula2: cedula2,
                Apellido_paterno2: Apellido_paterno2,
                Apellido_materno2: Apellido_materno2,
                Nombre2: Nombre2,
                Fecha_nacimiento2: Fecha_nacimiento2,
                Edad2: Edad2,
                Sexo2: Sexo2,
                Estado_civil2: Estado_civil2,
                Correo_electronico2: Correo_electronico2,
                Telefono2: Telefono2,
                Celular2: Celular2,
                Pais2: Pais2,
                Tipo_cedula2: Tipo_cedula2,
                Numero_hijos2: Numero_hijos2,
                Nivel_educacion2: Nivel_educacion2,
                Situacion_laboral2: Situacion_laboral2,
                Antiguedad_laboral2: Antiguedad_laboral2,
                Tipo_contrato2: Tipo_contrato2,
                Tipo_afiliacion2: Tipo_afiliacion2,
                Dia_pago2: Dia_pago2,
                Envio_correspondencia2: Envio_correspondencia2,
                Tipo_vehiculo2: Tipo_vehiculo2,
                Total_ingresos2: Total_ingresos2,
                Total_egresos2: Total_egresos2,
                Otros_ingresos2: Otros_ingresos2,
                Origen_otros_ingresos2: Origen_otros_ingresos2,
                Ciudad2: Ciudad2,
                Barrio_domicilio2: Barrio_domicilio2,
                Calle_principal_domicilio2: Calle_principal_domicilio2,
                Numero_casa_domicilio2: Numero_casa_domicilio2,
                Bloque_domicilio2: Bloque_domicilio2,
                Departamento_domicilio2: Departamento_domicilio2,
                Interseccion_domicilio2: Interseccion_domicilio2,
                Manzana_domicilio2: Manzana_domicilio2,
                Solar_domicilio2: Solar_domicilio2,
                Tipo_vivienda2: Tipo_vivienda2,
                Antiguedad_residencia2: Antiguedad_residencia2,
                Telefono_laboral2: Telefono_laboral2,
                Celular_laboral2: Celular_laboral2,
                Ciudad_labora2: Ciudad_labora2,
                Nombre_empresa2: Nombre_empresa2,
                Ocupacion_laboral2: Ocupacion_laboral2,
                Tipo_actividad2: Tipo_actividad2,
                Barrio_labora2: Barrio_labora2,
                Calle_principal_labora2: Calle_principal_labora2,
                Numero_casa_donde_labora2: Numero_casa_donde_labora2,
                Interseccion_donde_labora2: Interseccion_donde_labora2,
                Manzana_laboral2: Manzana_laboral2,
                Solar_villa_donde_labora2: Solar_villa_donde_labora2,
                Cedula_conyuge2: Cedula_conyuge2,
                Apellido_paterno_conyuge2: Apellido_paterno_conyuge2,
                Apellido_materno_conyuge2: Apellido_materno_conyuge2,
                Nombre_conyuge2: Nombre_conyuge2,
                Apellido_paterno_referencia2: Apellido_paterno_referencia2,
                Apellido_materno_referencia2: Apellido_materno_referencia2,
                Nombre_referencia2: Nombre_referencia2,
                Telefono_referencia2: Telefono_referencia2,
                Celular_referencia2: Celular_referencia2,
                Ciudad_referencia2: Ciudad_referencia2,
                Parentesco_referencia2: Parentesco_referencia2,

            }
           
            Actualizarcliente(data);

        }

    }

    function buscador(data) {
        var xmlhttp = new XMLHttpRequest();
        $.blockUI({
            message: '<div class="d-flex justify-content-center align-items-center"><p class="mr-50 mb-0">Cargando ...</p> <div class="spinner-grow spinner-grow-sm text-white" role="status"></div> </div>',
            css: {
                backgroundColor: 'transparent',
                color: '#fff',
                border: '0'
            },
            overlayCSS: {
                opacity: 0.5
            }
        });

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                data = JSON.parse(data);
                console.log(data);

                $("#cedula").text(data[0]["registro_cedula"]);
                $("#cedula2").val(data[0]["registro_cedula"]);
                $("#Apellido_paterno").text(data[0]["registro_apellido_paterno"]);
                $("#Apellido_materno").text(data[0]["registro_apellido_materno"]);
                $("#Nombre").text(data[0]["registro_nombre"]);
                $("#Fecha_nacimiento").text(data[0]["registro_fecha_nacimiento"]);
                $("#Edad").text(data[0]["registro_edad"]);
                $("#Sexo").text(data[0]["registro_sexo"]);
                $("#Estado_civil").text(data[0]["registro_estado_civil"]);
                $("#Correo_electronico").text(data[0]["registro_correo_electronico"]);
                $("#Telefono").text(data[0]["registro_telefono"]);
                $("#Celular").text(data[0]["registro_celular"]);
                $("#Pais").text(data[0]["registro_pais"]);
                $("#Tipo_cedula").text(data[0]["registro_tipo_cedula"]);
                $("#Numero_hijos").text(data[0]["registro_numero_hijos"]);
                $("#Nivel_educacion").text(data[0]["registro_nivel_educacion"]);
                $("#Situacion_laboral").text(data[0]["registro_situacion_laboral"]);
                $("#Antiguedad_laboral").text(data[0]["registro_antiguedad_laboral"]);
                $("#Tipo_contrato").text(data[0]["registro_tipo_contrato"]);
                $("#Tipo_afiliacion").text(data[0]["registro_tipo_afiliacion"]);
                $("#Dia_pago").text(data[0]["registro_dia_pago"]);
                $("#Envio_correspondencia").text(data[0]["registro_envio_correspondencia"]);

                $("#Tipo_vehiculo").text(data[0]["registro_tipo_vehiculo"]);
                $("#Total_ingresos").text(data[0]["registro_total_ingresos"]);
                $("#Total_egresos").text(data[0]["registro_total_egresos"]);
                $("#Otros_ingresos").text(data[0]["registro_otros_ingresos"]);
                $("#Origen_otros_ingresos").text(data[0]["registro_origen_otros_ingresos"]);
                $("#Ciudad").text(data[0]["registro_ciudad"]);
                $("#Barrio_domicilio").text(data[0]["registro_barrio_domicilio"]);
                $("#Calle_principal_domicilio").text(data[0]["registro_calle_principal_domicilio"]);
                $("#Numero_casa_domicilio").text(data[0]["registro_numero_casa_domicilio"]);
                $("#Bloque_domicilio").text(data[0]["registro_bloq_domicilio"]);
                $("#Departamento_domicilio").text(data[0]["registro_dpto_domicilio"]);
                $("#Interseccion_domicilio").text(data[0]["registro_interseccion_domicilio"]);
                $("#Manzana_domicilio").text(data[0]["registro_mz_domicilio"]);
                $("#Solar_domicilio").text(data[0]["registro_solar_villa_domicilio"]);
                $("#Tipo_vivienda").text(data[0]["registro_tipo_vivienda"]);
                $("#Antiguedad_residencia").text(data[0]["registro_antiguedad_residencia"]);
                $("#Telefono_laboral").text(data[0]["laboral_telefono"]);
                $("#Celular_laboral").text(data[0]["laboral_celular"]);
                $("#Ciudad_labora").text(data[0]["laboral_ciudad"]);
                $("#Nombre_empresa").text(data[0]["laboral_nombre_empresa"]);

                $("#Ocupacion_laboral").text(data[0]["laboral_ocupacion"]);
                $("#Tipo_actividad").text(data[0]["laboral_tipo_actividad"]);
                $("#Barrio_labora").text(data[0]["laboral_barrio_ciudadela"]);
                $("#Calle_principal_labora").text(data[0]["laboral_calle_principal"]);
                $("#Numero_casa_donde_labora").text(data[0]["laboral_numero_casa"]);
                $("#Interseccion_donde_labora").text(data[0]["laboral_interseccion"]);
                $("#Manzana_laboral").text(data[0]["laboral_mz"]);
                $("#Solar_villa_donde_labora").text(data[0]["laboral_solar_villa"]);
                $("#Cedula_conyuge").text(data[0]["conyuge_cedula"]);
                $("#Apellido_paterno_conyuge").text(data[0]["conyuge_apellido_paterno"]);
                $("#Apellido_materno_conyuge").text(data[0]["conyuge_apellido_materno"]);
                $("#Nombre_conyuge").text(data[0]["conyuge_nombre"]);
                $("#Apellido_paterno_referencia").text(data[0]["referencias_apellido_paterno"]);
                $("#Apellido_materno_referencia").text(data[0]["referencias_apellido_materno"]);
                $("#Nombre_referencia").text(data[0]["referencias_nombre"]);
                $("#Telefono_referencia").text(data[0]["referencias_telefono"]);
                $("#Celular_referencia").text(data[0]["referencias_celular"]);
                $("#Ciudad_referencia").text(data[0]["referencias_ciudad"]);
                $("#Parentesco_referencia").text(data[0]["referencias_parentesco"]);

                $("#Apellido_paterno2").val(data[0]["registro_apellido_paterno"]);
                $("#Apellido_materno2").val(data[0]["registro_apellido_materno"]);
                $("#Nombre2").val(data[0]["registro_nombre"]);
                $("#Fecha_nacimiento2").val(data[0]["registro_fecha_nacimiento"]);
                $("#Edad2").val(data[0]["registro_edad"]);
                $("#Sexo2").val(data[0]["registro_sexo"]);
                $("#Estado_civil2").val(data[0]["registro_estado_civil"]);
                $("#Correo_electronico2").val(data[0]["registro_correo_electronico"]);
                $("#Telefono2").val(data[0]["registro_telefono"]);
                $("#Celular2").val(data[0]["registro_celular"]);
                $("#Pais2").val(data[0]["registro_pais"]);
                $("#Tipo_cedula2").val(data[0]["registro_tipo_cedula"]);
                $("#Numero_hijos2").val(data[0]["registro_numero_hijos"]);
                $("#Nivel_educacion2").val(data[0]["registro_nivel_educacion"]);
                $("#Situacion_laboral2").val(data[0]["registro_situacion_laboral"]);
                $("#Antiguedad_laboral2").val(data[0]["registro_antiguedad_laboral"]);
                $("#Tipo_contrato2").val(data[0]["registro_tipo_contrato"]);
                $("#Tipo_afiliacion2").val(data[0]["registro_tipo_afiliacion"]);
                $("#Dia_pago2").val(data[0]["registro_dia_pago"]);
                $("#Envio_correspondencia2").val(data[0]["registro_envio_correspondencia"]);

                $("#Tipo_vehiculo2").val(data[0]["registro_tipo_vehiculo"]);
                $("#Total_ingresos2").val(data[0]["registro_total_ingresos"]);
                $("#Total_egresos2").val(data[0]["registro_total_egresos"]);
                $("#Otros_ingresos2").val(data[0]["registro_otros_ingresos"]);
                $("#Origen_otros_ingresos2").val(data[0]["registro_origen_otros_ingresos"]);
                $("#Ciudad2").val(data[0]["registro_ciudad"]);
                $("#Barrio_domicilio2").val(data[0]["registro_barrio_domicilio"]);
                $("#Calle_principal_domicilio2").val(data[0]["registro_calle_principal_domicilio"]);
                $("#Numero_casa_domicilio2").val(data[0]["registro_numero_casa_domicilio"]);
                $("#Bloque_domicilio2").val(data[0]["registro_bloq_domicilio"]);
                $("#Departamento_domicilio2").val(data[0]["registro_dpto_domicilio"]);
                $("#Interseccion_domicilio2").val(data[0]["registro_interseccion_domicilio"]);
                $("#Manzana_domicilio2").val(data[0]["registro_mz_domicilio"]);
                $("#Solar_domicilio2").val(data[0]["registro_solar_villa_domicilio"]);
                $("#Tipo_vivienda2").val(data[0]["registro_tipo_vivienda"]);
                $("#Antiguedad_residencia2").val(data[0]["registro_antiguedad_residencia"]);
                $("#Telefono_laboral2").val(data[0]["laboral_telefono"]);
                $("#Celular_laboral2").val(data[0]["laboral_celular"]);
                $("#Ciudad_labora2").val(data[0]["laboral_ciudad"]);
                $("#Nombre_empresa2").val(data[0]["laboral_nombre_empresa"]);

                $("#Ocupacion_laboral2").val(data[0]["laboral_ocupacion"]);
                $("#Tipo_actividad2").val(data[0]["laboral_tipo_actividad"]);
                $("#Barrio_labora2").val(data[0]["laboral_barrio_ciudadela"]);
                $("#Calle_principal_labora2").val(data[0]["laboral_calle_principal"]);
                $("#Numero_casa_donde_labora2").val(data[0]["laboral_numero_casa"]);
                $("#Interseccion_donde_labora2").val(data[0]["laboral_interseccion"]);
                $("#Manzana_laboral2").val(data[0]["laboral_mz"]);
                $("#Solar_villa_donde_labora2").val(data[0]["laboral_solar_villa"]);
                $("#Cedula_conyuge2").val(data[0]["conyuge_cedula"]);
                $("#Apellido_paterno_conyuge2").val(data[0]["conyuge_apellido_paterno"]);
                $("#Apellido_materno_conyuge2").val(data[0]["conyuge_apellido_materno"]);
                $("#Nombre_conyuge2").val(data[0]["conyuge_nombre"]);
                $("#Apellido_paterno_referencia2").val(data[0]["referencias_apellido_paterno"]);
                $("#Apellido_materno_referencia2").val(data[0]["referencias_apellido_materno"]);
                $("#Nombre_referencia2").val(data[0]["referencias_nombre"]);
                $("#Telefono_referencia2").val(data[0]["referencias_telefono"]);
                $("#Celular_referencia2").val(data[0]["referencias_celular"]);
                $("#Ciudad_referencia2").val(data[0]["referencias_ciudad"]);
                $("#Parentesco_referencia2").val(data[0]["referencias_parentesco"]);

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlbotonbuscador, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function Actualizarcliente(data) {
        var xmlhttp = new XMLHttpRequest();
        $.blockUI({
            message: '<div class="d-flex justify-content-center align-items-center"><p class="mr-50 mb-0">Cargando ...</p> <div class="spinner-grow spinner-grow-sm text-white" role="status"></div> </div>',
            css: {
                backgroundColor: 'transparent',
                color: '#fff',
                border: '0'
            },
            overlayCSS: {
                opacity: 0.5
            }
        });

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                //data = JSON.parse(data);
                console.log(data);
                //traercampana();

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlclienteactualizar, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function cargar_tipificacion(id){
        var data = {
            id:id
        }
        console.log(data);
        var xmlhttp = new XMLHttpRequest();
        $.blockUI({
            message: '<div class="d-flex justify-content-center align-items-center"><p class="mr-50 mb-0">Cargando ...</p> <div class="spinner-grow spinner-grow-sm text-white" role="status"></div> </div>',
            css: {
                backgroundColor: 'transparent',
                color: '#fff',
                border: '0'
            },
            overlayCSS: {
                opacity: 0.5
            }
        });        

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                data = JSON.parse(data);
                console.log(data);
                //traercampana();

                var tipificaciones = document.getElementById("tipificaciones");
                $('#tipificaciones option').remove(); // clear all values 
                $('#tipificaciones ').append('<option value=""></option>');
                jQuery.each(data, function(key, value) {
                    //alert(value.Marca);
                    option = document.createElement("option");
                    option.value = value.id_tipificaciones;
                    option.text = value.tipificacion;
                    tipificaciones.appendChild(option);
                });

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlcargar_tipificacion, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }
</script>