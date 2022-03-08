<?php


class interacciones extends Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    
    function render()
    {
        if($_SESSION['userAcces'] != 3){
        $Cedulas =  $this->model->CargarCedulas();
        $this->view->ced = $Cedulas;
        $campana =  $this->model->Cargarcampana();
        $this->view->cam = $campana;
        $tipificacion =  $this->model->Cargartipificaciones();
        $this->view->tip = $tipificacion;
        $this->view->render('interacciones/interacciones');
    }else{
        $this->view->render('errores/404');

    }
    }

    function Traerinteracciones()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traerinteracciones($array);
    }

    function Guardarinteracciones()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Guardarinteracciones($array);
    }
}
