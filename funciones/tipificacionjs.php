<?php

$urlTraertipificacion = constant('URL') . 'tipificacion/Traertipificacion/';
$urlGuardartipificacion = constant('URL') . 'tipificacion/Guardartipificacion/';
$urlactualizartipificacion = constant('URL') . 'tipificacion/Actualizartipificacion/';


?>
<script>
    var url = '<?php echo $urlTraertipificacion; ?>';
    var urltipificacion = '<?php echo $urlGuardartipificacion; ?>';
    var urltipificacionactualizar = '<?php echo $urlactualizartipificacion; ?>';

    function traertipificacion() {

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

    function traertabla(datos) {

        console.log(datos);
        var table = $('#tipificacion').DataTable({
            destroy: true,
            data: datos,
            dom: 'Bfrtip',
            "columnDefs": [{
                "width": "5%",
                "targets": 0
            }],

            columns: [
              {
                    data: null,
                    title: "",
                    className: "dt-center  btn_add",
                    defaultContent: '<button class="btn btn-success btn_add">Actualizar</button>',
                    orderable: false
                },
              {
                data: "tipificacion",
                   title: "TIPIFICACIONES",
                    "render": function(data, type, row, meta) {
                        if (type === 'display') {
                            var d = data;
                            if (d != null) {
                                data = '<input type="text" value="' + d + '" class="form-control input-sas">'
                            }
                        }
                        if (type === 'export') {
                            var d = data;
                            if (d != null) {
                                data = d;
                            }
                        }
                        return data;
                    },
                }
            ],
            "createdRow": function(row, data, index, cell) {

            }

        }).clear().rows.add(datos).draw();

        $('#tipificacion tbody').on('click', 'td.btn_add', function(e) {
            e.preventDefault();
            //var data = table.row(this).data();
            var nameInput = $('input-sas').val();
            var data = table.row(this).data();
            var sas = table.row(this).nodes().to$().find('input').val();
            //

            var a = data['id_tipificaciones'];
            var data2 = {
                id_tipificaciones : a,
                tipificacion:sas
            }
            console.log(data);
            Actualizartipificacion(data2);
        });

        setTimeout(function() {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().draw();
        }, 500);

    }


    function Validartipificacion() {
        var tipificacion = $("#txttipificacion").val();
        var campana = $("#campana").val();
        console.log(tipificacion);

        if (tipificacion == "") {

        }else{

            var data ={
                tipificacion:tipificacion,
                campana:campana
            }
            console.log(data);
            Guardartipificacion(data);

        }

    }

    function Guardartipificacion(data) {
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
                //traertipificacion();
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
        xmlhttp.open("POST", urltipificacion, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function Actualizartipificacion(data) {
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
        xmlhttp.open("POST", urltipificacionactualizar, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }
</script>
