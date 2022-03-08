<?php

$urlTraerinteracciones = constant('URL') . 'ingreso_campana/Traerinteracciones/';
$urlGuardarPlantillaCab = constant('URL') . 'ingreso_campana/GuardarPlantillaCab/';
$urlGuardarPlantillaDet = constant('URL') . 'ingreso_campana/GuardarPlantillaDet/';


$urlNumPlantilla = constant('URL') . "ingreso_campana/NumeroPlantilla/";


?>
<script>
    var url = '<?php echo $urlTraerinteracciones; ?>';
    var urlplantillaCab = '<?php echo $urlGuardarPlantillaCab; ?>';
    var urlplantillaDet = '<?php echo $urlGuardarPlantillaDet; ?>';



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

    function crear() {

        var a = `
        <tr>
            <th scope="row">
            <input placeholder="Nombre del campo" type="text" class="form-control"></input>
            </th>
            <td>
                <select name="" id="" class="form-control">
                    <option value="texto">texto</option>
                    <option value="fecha">fecha</option>
                    <option value="area">Area de texto</option>
                </select>
            </td>
            <th scope="row">
                <button onclick="crear()" class="btn btn-info"><i class="fa fa-plus-circle"></i></button>
                <button class="btn btn-danger btn_remove"><i class="fa fa-minus-circle"></i></button>
            </th>
        </tr>`;

        $("#PlantillaBody").append(a);
    }

    $("body").on("click", ".btn_remove", function() {
        var input = $(this);
        var columns = input.closest("tr").children();
        //var tot = columns.eq(5).text();
        console.log("asdasd");
        //restar(tot);
        //
        $(this).closest("tr").remove();
    });

    var NumeroPlantillaGlobal;

    function NumPlantilla() {
        var url = '<?php echo $urlNumPlantilla ?>';
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                NumeroPlantillaGlobal = data;
                console.log(NumeroPlantillaGlobal);

            }
        }
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }


    function Validarplantilla() {
        var plantilla = $("#txtplantilla").val();
        var descripcion = $("#txtdescripcion").val();
        var tbl = document.querySelectorAll('#TablaPlantillas tbody tr').length;

        if (plantilla == "") {
            mensajeerror("no a ingresado nombre de plantilla")
        } else {

            var ok = validarCAmposTabla();
            console.log(ok);

            if (ok == 0) {
                var cab = {
                    nombre: plantilla,
                    descripcion: descripcion,
                }

                GuardarPlantilla(cab, urlplantillaCab);

                for (var i = 1; i < tbl + 1; i++) {
                    var campo = document.getElementById("TablaPlantillas").rows[i].cells[0].children[0].value;
                    var tipo = document.getElementById("TablaPlantillas").rows[i].cells[1].children[0].value;
                    DatosDetalle = {
                        id_plantilla: NumeroPlantillaGlobal,
                        campo: campo,
                        tipo: tipo
                    }
                    console.log(DatosDetalle);

                    GuardarPlantilla(DatosDetalle, urlplantillaDet);
                }
            } else {
                mensajeerror("los campos no pueden tener nombre vacio");
            }

        }

    }

    function validarCAmposTabla() {
        var con = 0;
        var tbl = document.querySelectorAll('#TablaPlantillas tbody tr').length;
        for (var i = 1; i < tbl + 1; i++) {
            var campo = document.getElementById("TablaPlantillas").rows[i].cells[0].children[0].value;
            if (campo == "") {
                con = con + 1;
            }
        }
        return con
    }

    function GuardarPlantilla(data, url) {
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
                if (data == "true") {
                    $("#btnnuevo").show();
                    $("#btnguardar").hide();
                    mensajeok("Datos Guardados");
                    setInterval(reload, 2000);

                }else{
                    mensajeerror("Error al Guardar");
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

    function reload(){
        location.reload();

    }
</script>