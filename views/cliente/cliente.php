<?php require 'views/header.php'; ?>
<?php require 'funciones/clientejs.php'; ?>

<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
        <p class="mg-b-0">Your sales monitoring dashboard template.</p>
    </div>
    <div class="az-dashboard-header-right">
        <button class="btn btn-success" onclick="crear()">asd</button>
    </div><!-- az-dashboard-header-right -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">Clientes</h6>
            <span class="d-block mg-b-20">Lista de clientes.</span>
            <div class="table-responsive">
            <table id="cliente" class="display stripet" style="font-weight: bold; width:100%;">

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
 traercliente();
</script>
