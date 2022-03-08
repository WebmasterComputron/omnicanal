<?php require 'views/header.php'; ?>
<?php require 'funciones/ingreso_campanajs.php'; ?>

<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title mg-b-5 mg-b-lg-8">Campañas</h2>
        <p class="mg-b-0">Creacion de campaña.</p>
    </div>
    <div class="az-dashboard-header-right">
    </div><!-- az-dashboard-header-right -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Ingresar Campaña</h6>
                <form class="needs-validation" novalidate onsubmit="return false">

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label>Nombre de Plantilla</label>
                            <input placeholder="Nombre del plantilla" type="text" class="form-control" id="txtplantilla" required></input>
                            <div class="invalid-feedback">Ingrese el nombre</div>

                        </div>
                        
                    </div>

                    <div class="form-row">
                        <button id="btnguardar" onclick="Validarcampana()" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table class="table" id="TablaIngresoCampanas">
                    <thead>
                        <tr>
                            <th scope="col">nombre de campo</th>
                            <th scope="col"></th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody id="PlantillaBody">
                        <tr>
                            <th scope="row">
                                <input placeholder="Nombre del campo" type="text" class="form-control"></input>
                            </th>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="texto">texto</option>
                                </select>
                            </td>
                            <th scope="row">
                                <button onclick="crear()" class="btn btn-info"><i class="fa fa-plus-circle"></i></button>
                            </th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
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
    // traerinteracciones();
    $("#btnnuevo").hide()
    NumPlantilla();

    function Reset(){
        $("#txtplantilla").val("");
        $("#txtdescripcion").val("");
        $("#PlantillaBody").empty();
        var a = `
        <tr>
            <th scope="row">
            <input placeholder="Nombre del campo" type="text" class="form-control"></input>
            </th>
            <td>
                <select name="" id="" class="form-control">
                    <option value="texto">texto</option>
                </select>
            </td>
            <th scope="row">
                <button onclick="crear()" class="btn btn-info"><i class="fa fa-plus-circle"></i></button>
            </th>
        </tr>`;

        $("#PlantillaBody").append(a);

    }
</script>