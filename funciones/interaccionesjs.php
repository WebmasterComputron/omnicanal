<?php

$urlTraerinteracciones = constant('URL') . 'interacciones/Traerinteracciones/';
$urlGuardarinteracciones = constant('URL') . 'interacciones/Guardarinteracciones/';

?>
<script>
    var urlin = '<?php echo $urlTraerinteracciones; ?>';
    var urlinteracciones = '<?php echo $urlGuardarinteracciones; ?>';
    var cedulaglobalinteraccion;

    function mensajeerror(mensaje) {
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: mensaje})
    }

    function validarinteraccion(){
        var cedula = $("#txtcedulabuscar").val();

        console.log("cedula",cedula);

        if (cedula == "") {

        }else{

            var data ={
                cedula:cedula            
            }   
            
            traerinteracciones(data);
            cedulaglobalinteraccion = cedula;

        }
    }

    function traerinteracciones(data) {

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
                console.log("interacciones",data);
                $("#tablainteraccion").show(500);
                $("#btinteraccion").show(500);
                $("#mostrarbotones").show(500);                
                traertabla3(data);


            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlin, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }

    function traertabla3(datos) {

        console.log(datos);
        var table = $('#interacciones').DataTable({
            destroy: true,
            data: datos,
            dom: 'Bfrtip',
            columns: [
                {
                  data: "fechahora",
                  title: "FECHA/HORA"
              },
              /*{
                  data: "usuarios",
                  title: "ASESOR"
              },*/
              {
                  data: "procedencia",
                  title: "CANAL"
              },
              {
                  data: "nombre_campana",
                  title: "CAMPAÑAS"
              },
              {
                  data: "tipificacion",
                  title: "TIPIFICACIONES"
              },
              {
                  data: "telefonocontacto",
                  title: "TELEFONO CONTACTO"
              },
              /*{
                  data: "cedulacontacto",
                  title: "CEDULA CONTACTO"
              },*/
              {
                  data: "observacion",
                  title: "OBSERVACIONES"
              }

            ],
            "createdRow": function(row, data, index, cell) {

            }

        });

    }

    function ValidarInteracciones() {
        //var fecha = $("#datepicker1").val();
        var fecha = moment().format("YYYY-MM-DD HH:mm");
        var procedencias = $("#procedencias").val();
        var observaciones = $("#txtObservacion").val();
        var campana = $("#campana").val();
        var tipificaciones = $("#tipificaciones").val();
        var telefonocontacto = $("#txttelefonocontacto").val();
        //var cedula = $("#txtcedula").val();
        var cedula = cedulaglobalinteraccion;

        if (fecha == "") {
            mensajeerror("no a seleccionado fecha")
        } else if (cedula == ""){
        } else if (procedencias == "") {
        } else if (campana == "") {
        } else if (tipificaciones == "") {
        } else if (telefonocontacto == "") {

        }else{

            var data ={
                fecha:fecha,
                procedencias:procedencias,
                observaciones:observaciones,
                campana:campana,
                tipificaciones:tipificaciones,
                telefonocontacto:telefonocontacto,
                cedula:cedula

            }
            //console.log("prueba",data);
            Guardarinteracciones(data);

        }

    }

    function Guardarinteracciones(data) {
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
                traerinteracciones();
                location.reload();
            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlinteracciones, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }
</script>
