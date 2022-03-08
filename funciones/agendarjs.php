<?php

$urlTraeragendar = constant('URL') . 'agendar/Traeragendar/';
$urlGuardarAgenda = constant('URL') . 'agendar/GuardarAgenda/';
$urlactualizaragendar = constant('URL') . 'agendar/Actualizaragendar/';
$acceso = $_SESSION['userAcces'];
?>
<script>
    var url = '<?php echo $urlTraeragendar; ?>';
    var urlagenda = '<?php echo $urlGuardarAgenda; ?>';
    var urltagendaractualizar = '<?php echo $urlactualizaragendar; ?>';

    function traeragendar() {

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
                //console.log(data);
                traertabla2(data);

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

    var cedula_global;

    function cedulaglobal() {
        var cedula = $("#txtcedulabuscar").val();

        console.log(cedula);
        cedula_global = cedula;
        console.log(cedula_global);

    }

    function traertabla2(datos) {

        //console.log(datos);
        var acceso = '<?php echo $acceso ?>';
        var botones= 'Bfrtip';
        //console.log('hola',acceso);
        if (acceso!=1){
            botones = 'frtip';
        }
        var table = $('#agendar').DataTable({
            destroy: true,
            data: datos,
            dom: botones,/*Bfrtip*/ 
            columns: [
                {
                    data: null,
                    title: "",
                    className: "dt-center  btn_add",
                    defaultContent: '<button class="btn btn-success btn_add">Actualizar Estado</button>',
                    orderable: false
                },
                /*{
                    data: "usuarios",
                    title: "USUARIOS"
                },*/
                {
                    data: "fecha_hora_agendar",
                    title: "FECHA/HORA"
                },
                {
                    data: "estado",
                    title: "ESTADO"

                },
                {
                    data: "cedula_registro",
                    title: "CEDULA",
                    className: "dt-center  btn_a",
                    defaultContent: '<button class="btn btn-success btn_a">Actualizar Estado</button>',
                    orderable: false                    
                    
                },
                {
                    data: "llamarCliente",
                    title: "LLAMAR CLIENTE"
                },
                {
                    data: "observaciones_agendar",
                    title: "OBSERVACIONES"
                }

            ],
            "createdRow": function(row, data, index, cell) {
                var fechaactual = moment().format('YYYY-MM-DD');
                if (moment(data["fecha_hora_agendar"]).format('YYYY-MM-DD')<fechaactual)
                {
                    $('td', row).eq(2).html("<h5 style='color:red;' >Tiempo fuera</h5>");

                } 
                if (moment(data["fecha_hora_agendar"]).format('YYYY-MM-DD')>=fechaactual)
                {
                    $('td', row).eq(2).html("<h5 style='color:green;' >Pendiente</h5>");
                    
                }
                if ((data["llamarCliente"])==0)
                {
                    $('td', row).eq(4).html("<h5>Pendiente</h5>");

                }
                if ((data["llamarCliente"])==1)
                {
                    $('td', row).eq(4).html("<h5>Contactado</h5>");

                }
                if ((data["cedula_registro"]))
                {
                    $('td', row).eq(3).html("<a href=''>"+data["cedula_registro"]+"</a>");

                }
               

            }

        });

        $('#agendar tbody').on('click', 'td.btn_a', function(e) {
            e.preventDefault();
            //var data = table.row(this).data();
            
            var data = table.row(this).data();

            //console.log("aaaaaaaaaaa",data);
            var d = data["cedula_registro"];
            var data ={
                cedula:d            
            }            

            buscador(data);


        });

        $('#agendar tbody').on('click', 'td.btn_add', function(e) {
            e.preventDefault();
            //var data = table.row(this).data();
            
            var data = table.row(this).data();
            //
            var ag = data['id_agendar'];
            var data2 = {
                id_agendar : ag,
                
            }
            
            console.log(data2);
            Actualizaragendar(data2);
           location.reload();

        });

    }


    function ValidarAgendar() {
        var fecha = $("#datepicker2").val();
        var cedula = $("#Cedulas").val();
        var observaciones = $("#txtObservacion1").val();


        if (fecha == "") {
     

        }else{

            var data ={
                fecha:fecha,
                cedula:cedula_global,
                observaciones:observaciones
            }
            console.log(data);

            GuardarAgenda(data);
            

        }

    }

    function GuardarAgenda(data) {
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
                //traeragendar();
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
        xmlhttp.open("POST", urlagenda, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function Actualizaragendar(data) {
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
               // traercampana();

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urltagendaractualizar, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }
</script>
