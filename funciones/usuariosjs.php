<?php

$urlTraerUsuarios = constant('URL') . 'usuarios/traerusuarios/';
$urlGuardarUsuarios = constant('URL') . 'usuarios/guardarusuarios/';
?>
<script>

var url = '<?php echo $urlTraerUsuarios; ?>';
var urlusuarios = '<?php echo $urlGuardarUsuarios; ?>';

function traerusuarios() {

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
                traertabla(data);

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        //data = JSON.stringify(data);
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send();
}

function traertabla(datos){

console.log(datos);
var table = $('#usuarios').DataTable({
      destroy: true,
      data: datos,
      dom: 'Bfrtip',
      columns: [
          {
              data: "usuarios_cedula",
              title: "CEDULA"
          },
          {
              data: "apellido",
              title: "APELLIDOS"
          },
          {
              data: "nombre",
              title: "NOMBRES"
          },
          {
              data: "celular",
              title: "TELEFONO"
          },
          {
              data: "correo_electronico",
              title: "CORREO ELECTRONICO"
          },
          {
              data: "contrasena",
              title: "CONTRASEÑA"
          },
          {
              data: "procedencia",
              title: "PROCEDENCIA"
          }

      ],
      "createdRow": function(row, data, index, cell) {

      }

  });

}

function Validarusuarios() {
        var cedula = $("#txtcedula").val();
        var apellido = $("#txtapellido").val();
        var nombre = $("#txtnombre").val();
        var telefono = $("#txttelefono").val();
        var correo_electronico = $("#txtcorreoelectronico").val();
        var contrasena = $("#txtcontraseña").val();
        var procedencia = $("#txtprocedencia").val();

        console.log(cedula);
        console.log(apellido);
        console.log(nombre);
        console.log(telefono);
        console.log(correo_electronico);
        console.log(contrasena);
        console.log(procedencia);

        if (cedula == "") {  
        } else if (apellido == ""){
        } else if (nombre == "") {
        } else if (telefono == "") {
        } else if (correo_electronico == "") {
        } else if (contrasena == "") { 
        } else if (procedencia == "") {     

        }else{

            var data ={
                cedula:cedula,
                apellido:apellido,
                nombre:nombre,
                telefono:telefono,
                correo_electronico:correo_electronico,
                contrasena:contrasena,
                procedencia:procedencia
            }

            guardarusuarios(data);

        }

    }

    function guardarusuarios(data) {
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
                //traerusuarios();
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
        xmlhttp.open("POST", urlusuarios, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }
</script>
