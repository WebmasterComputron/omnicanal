<?php

$urlTraercliente = constant('URL') . 'cliente/Traercliente/';


?>
<script>

var url = '<?php echo $urlTraercliente; ?>';


function traercliente() {

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
var table = $('#cliente').DataTable({
      destroy: true,
      data: datos,
      scrollY: 600,
      scrollX: 100,
      responsive: true,
      deferedRender: true,
      scrollCollapse: true,
      dom: 'Bfrtip',
      columns: [
        {
                    data: null,
                    title: "#",
                    render: function(data, type, row, meta) {

                        var a = "<i class='fa fa-plus-circle'>"
                        return a;
                    }
                },
        
        {
             data: "registro_cedula",
             title: "CEDULA"
         },
         {
             data: "registro_apellido_paterno",
             title: "PRIMER APELLIDO"
         },
         {
             data: "registro_apellido_materno",
             title: "SEGUNDO APELLIDO"
         },
         {
             data: "registro_nombre",
             title: "NOMBRES"
         },
         {
             data: "registro_fecha_nacimiento",
             title: "FECHA NACIMIENTO"
         },
         {
             data: "registro_edad",
             title: "EDAD"
         },
         {
             data: "registro_sexo",
             title: "SEXO"
         },
         {
             data: "registro_estado_civil",
             title: "ESTADO CIVIL"
         },
         {
             data: "registro_correo_electronico",
             title: "CORREO ELECTRONICO"
         },
         {
             data: "registro_telefono",
             title: "TELEFONO"
         },
         {
             data: "registro_celular",
             title: "CELULAR"
         },
         {
             data: "registro_pais",
             title: "PAIS"
         },
         {
             data: "registro_tipo_cedula",
             title: "TIPO CEDULA"
         },
         {
             data: "registro_numero_hijos",
             title: "NUMERO HIJOS"
         },
         {
             data: "registro_nivel_educacion",
             title: "NIVEL EDUCACION"
         },
         {
             data: "registro_situacion_laboral",
             title: "SITUACION LABORAL"
         },
         {
             data: "registro_antiguedad_laboral",
             title: "ANTIGUEDAD LABORAL"
         },
         {
             data: "registro_tipo_afiliacion",
             title: "TIPO AFILIACION"
         },
         {
             data: "registro_dia_pago",
             title: "DIA PAGO"
         },
         {
             data: "registro_envio_correspondencia",
             title: "ENVIO CORRESPONDENCIA"
         },
         {
             data: "registro_tipo_vehiculo",
             title: "TIPO VEHICULO"
         },
         {
             data: "registro_total_ingresos",
             title: "TOTAL INGRESOS"
         },
         {
             data: "registro_total_egresos",
             title: "TOTAL EGRESOS"
         },
         {
             data: "registro_otros_ingresos",
             title: "OTROS INGRESOS"
         },
         {
             data: "registro_origen_otros_ingresos",
             title: "ORIGEN OTROS INGRESOS"
         },
         {
             data: "registro_ciudad",
             title: "CIUDAD"
         },
         {
             data: "registro_barrio_domicilio",
             title: "BARRIO DOMICILIO"
         },
         {
             data: "registro_calle_principal_domicilio",
             title: "CALLE PRINCIPAL"
         },
         {
             data: "registro_numero_casa_domicilio",
             title: "NUMERO CASA"
         },
         {
             data: "registro_bloq_domicilio",
             title: "BLOQ DOMICILIO"
         },
         {
             data: "registro_dpto_domicilio",
             title: "DPTO DOMICILIO"
         },
         {
             data: "registro_interseccion_domicilio",
             title: "INTERSECCION DOMICILIO"
         },
         {
             data: "registro_mz_domicilio",
             title: "MZ DOMICILIO"
         },
         {
             data: "registro_solar_villa_domicilio",
             title: "SOLAR DOMICILIO"
         },
         {
             data: "registro_tipo_vivienda",
             title: "TIPO VIVIENDA"
         },
         {
             data: "registro_antiguedad_residencia",
             title: "TIEMPO RESIDENCIA"
         }

      ],
      "createdRow": function(row, data, index, cell) {

      }

  });

}

</script>