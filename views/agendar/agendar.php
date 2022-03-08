<?php require 'views/header.php'; ?>
<?php require 'funciones/agendarjs.php'; ?>

<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
        <p class="mg-b-0">Your sales monitoring dashboard template.</p>
    </div>
    <div class="az-dashboard-header-right">
    </div><!-- az-dashboard-header-right -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Agregar agenda</h6>
                <form class="needs-validation" novalidate onsubmit="return false">

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="txtNombre">Fecha</label>
                            <input required type="text" class="form-control" name="datepicker" id="datepicker2" />
                            <div class="invalid-feedback">Seleccione Fecha</div>
                        </div>

                        <div class="col-md-6 mb-3">
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
                            <label for="txtTelefono">Observacion</label>
                            <textarea type="text" class="form-control" id="txtObservacion"></textarea>
                        </div>

                    </div>


                    <div class="form-row">
                        <button id="btnguardar" onclick="ValidarAgendar()" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Agenda</h6>
                <span class="d-block mg-b-20">Lista de agenda.</span>
                <div class="table-responsive">
                    <table id="agendar" class="display stripet" style="font-weight: bold; width:100%;">

                    </table>
                </div>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
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
</script>
