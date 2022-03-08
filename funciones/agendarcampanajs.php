<?php

$urlTraercampana = constant('URL') . 'campana/traercampanaPorId/';

$urlTraercampanaDet = constant('URL') . 'campana/TraercampanaDet/';

$urlGuardarcampana = constant('URL') . 'campana/GuardarCampana/';
$urlGuardarcampanaDet = constant('URL') . 'campana/GuardarcampanaDet/';


$urlCargarPlantilla = constant('URL') . 'campana/CargarPlantilla/';

$urlNumCampana = constant('URL') . 'campana/NumeroCampana/';
$urlNumIdent = constant('URL') . 'campana/NumeroIdent/';




?>
<script>
    var url = '<?php echo $urlTraercampana; ?>';
    var urlCDet = '<?php echo $urlTraercampanaDet; ?>';

    var urlcampana = '<?php echo $urlGuardarcampana; ?>';
    var urlcampanaDet = '<?php echo $urlGuardarcampanaDet; ?>';

    var urlCargarPlantilla = '<?php echo $urlCargarPlantilla; ?>';

    var NumeroCamapanaGlobal;
    var IdPlantillaGlobal;
    var NumIdentGLobal;

    function mensajeerror(mensaje) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: mensaje
        })
    }

    function mensajeok(mensaje) {
        Swal.fire({
            icon: 'success',
            text: mensaje
        })
    }

    function NumCamapana() {
        var url = '<?php echo $urlNumCampana ?>';
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                NumeroCamapanaGlobal = data;


            }
        }
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }

    function NumIdent() {
        var url = '<?php echo $urlNumIdent ?>';
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                console.log(data);
                NumIdentGLobal = data;


            }
        }
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }



    function traercampana(id) {
        NumeroCamapanaGlobal = id;
        var data = {
            id_campana: id
        }

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

                CargarPlantilla(data[0]["id_plantilla"]);

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }

    function GetDatosTablaCampana(id) {
        NumeroCamapanaGlobal = id;
        var data = {
            id_campana: id
        }

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


                let unique = [...new Set(data.map(item => item.ident))];
                //console.log(unique);
                var arr = [];
                for (var i = 0; i < unique.length; i++) {
                    const result1 = data.filter(word => word.ident == unique[i]);
                    //console.log(result1);

                    jQuery.each(result1, function(key, value) {
                        var valor = value.valor;
                        var campo = value.campo;

                        arr.push(campo);

                    });

                }

                let uniqueKeys = [];
                let pivotedData = [];

                // finding the unique keys for grouping
                for (let i = 0; i < data.length; i++) {
                    if (!uniqueKeys.includes(data[i]["ident"])) {
                        uniqueKeys.push(data[i]["ident"]);
                    }
                }

                for (let i = 0; i < uniqueKeys.length; i++) {
                    let pivotedObj = {};
                    for (let j = 0; j < data.length; j++) {
                        if (data[j]["ident"] == uniqueKeys[i]) {
                            pivotedObj["ident"] = uniqueKeys[i]; // retain the property class
                            pivotedObj[data[j]["campo"]] = data[j]["valor"]; // transforms rows into columns
                        }
                    }
                    pivotedData.push(pivotedObj);
                }


               // console.log(uniqueKeys);
                console.log(pivotedData);

                var columns = [];
                var k = [];
                for (let i = 0; i < pivotedData.length; i++) {
                    jQuery.each(pivotedData[i], function(key, value) {
                        // console.log(key);
                        if (key != "ident") {
                            k.push({
                            "llave": key
                        });
                        }
                        
                    });
                }

                let uniquekey = [...new Set(k.map(item => item.llave))];

               // console.log(uniquekey);

                for (let i = 0; i < uniquekey.length; i++) {

                    var b = {
                        data: uniquekey[i],
                        title: uniquekey[i]
                    }

                    columns.push(b);
                }

                console.log(columns);

                //console.log(arr);

                //ConjuntoCabeceraTabla(data);
                //CrearDatosTablaRows(data);
                TablaDetallesCampana(pivotedData,columns);
            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlCDet, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }

    function traertabla(datos) {


        var table = $('#campana').DataTable({
            destroy: true,
            data: datos,
            dom: 'Bfrtip',
            "columnDefs": [{
                "width": "5%",
                "targets": 0
            }],
            buttons: [
                'excel', 'print', 'pdf'
            ],
            columns: [

                {
                    data: null,
                    title: "",
                    className: "dt-center  btn_add",
                    defaultContent: '<button class="btn btn-success btn_add"> <i class="fa fa-plus"></i></button>',
                    orderable: false
                },
                {
                    data: "nombre_campana",
                    title: "CAMPAÑAS",
                    /*"render": function(data, type, row, meta) {
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
                    },*/
                },
                {
                    data: "fecha_creacion",
                    title: "FECHA DE CREACION "
                }


            ],
            "createdRow": function(row, data, index, cell) {

            }

        }).clear().rows.add(datos).draw();



        $('#campana tbody').on('click', 'td.btn_add', function(e) {
            e.preventDefault();
            //var data = table.row(this).data();
            var nameInput = $('input-sas').val();
            var data = table.row(this).data();
            var sas = table.row(this).nodes().to$().find('input').val();
            //

            /*var a = data['id_campana'];
            var data2 = {
                id_campana: a,
                nombre_campana: sas
            }*/

            //Actualizarcampana(data2);

            ObtenerDetalleCampana(data);
        });

        setTimeout(function() {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().draw();
        }, 500);

    }

    function ObtenerDetalleCampana(data) {

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

                //TablaDetallesCampana(data);

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlCDet, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }

    function TablaDetallesCampana(data,columnas) {
        if ($.fn.DataTable.isDataTable('#campanaDetalles')) {
            $('#campanaDetalles').DataTable().destroy();

        }
        //$('#campanaDetalles').remove();
        $('#campanaDetalles thead').empty();
        $('#campanaDetalles tbody').empty();


        var table = $('#campanaDetalles').DataTable({
            //destroy: true,
            data: data,
            dom: 'Bfrtip',
            "columnDefs": [{
                //"width": "15%",
               // "targets": 0
            }],
            buttons: [
                'excel', 'print', 'pdf'
            ],
            columns: columnas,
            "createdRow": function(row, data, index, cell) {

            }

        });

        /*setTimeout(function() {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().draw();
        }, 500);*/

    }


    function Validarcampana() {
        var campana = $("#CbCampana").val();
        var tbl = document.querySelectorAll('#TablaCampana tbody tr').length;



        if (campana == "") {

        } else {

            var ok = validarCamposTabla();


            if (ok == 0) {

                /* var cab = {
                     campana: campana,
                     id_plantilla: IdPlantillaGlobal,
                 }
                 
                 Guardarcampana(cab, urlcampana);*/
                //GuardarPlantilla(cab, urlplantillaCab);

                for (var i = 1; i < tbl + 1; i++) {
                    var campo = document.getElementById("TablaCampana").rows[i].cells[0].innerText;
                    var valor = document.getElementById("TablaCampana").rows[i].cells[1].children[0].value;
                    DatosDetalle = {
                        id_campana: NumeroCamapanaGlobal,
                        campo: campo,
                        valor: valor,
                        ident: NumIdentGLobal
                    }

                    Guardarcampana(DatosDetalle, urlcampanaDet);

                    //GuardarPlantilla(DatosDetalle, urlplantillaDet);
                }

            } else {
                mensajeerror("Campos Vacios");
            }

            var data = {
                campana: campana
            }

            //Guardarcampana(data);

        }

    }

    function validarCamposTabla() {
        var con = 0;
        var tbl = document.querySelectorAll('#TablaCampana tbody tr').length;
        for (var i = 1; i < tbl + 1; i++) {
            var campo = document.getElementById("TablaCampana").rows[i].cells[1].children[0].value;
            if (campo == "") {
                con = con + 1;
            }
        }
        return con
    }

    function Guardarcampana(data, url) {
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


                if (data == "true") {
                    mensajeok("Datos Guardados");
                    traercampana(NumeroCamapanaGlobal);
                    GetDatosTablaCampana(NumeroCamapanaGlobal);
                    NumIdent();
                    // setInterval(reload, 2000);
                }

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function reload() {
        location.reload();

    }

    function Actualizarcampana(data) {
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
        xmlhttp.open("POST", urlcampanaactualizar, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);

    }

    function CargarPlantilla(id) {

        IdPlantillaGlobal = id

        var data = {
            id_plantilla: id
        }

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


                CrearCamposCampana(data);

            }
        }
        xmlhttp.onload = () => {
            $.unblockUI();
        };
        xmlhttp.onerror = function() {
            $.unblockUI();
        };
        data = JSON.stringify(data);
        xmlhttp.open("POST", urlCargarPlantilla, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }

    function CrearCamposCampana(data) {
        $("#CampanaBody").empty();
        jQuery.each(data, function(key, value) {
            var campo = value.campo;
            var tipo = value.tipo;
            var valor = "";
            if (tipo == "texto") {
                valor = "<input placeholder='" + campo + "' type='text' class='form-control'></input>"
            } else if (tipo == "fecha") {
                valor = "<input required type='date' class='form-control' name='datepicker' id='datepicker2' >"
            } else if (tipo == "area") {
                valor = "<textarea type='text' class='form-control' id='txtObservacion'></textarea>"
            }

            var a = `
            <tr>
                <th scope="row">
                ` + campo + `
                </th>
                <th scope="row">
                ` + valor + `
                </th>
            </tr>`;

            $("#CampanaBody").append(a);

        });

    }
</script>