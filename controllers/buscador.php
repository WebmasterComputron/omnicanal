<?php


class buscador extends Controller{

    function __construct(){

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    function render()
    {
        if($_SESSION['userAcces'] != 0){
        $Cedulas =  $this->model->CargarCedulas();
        $this->view->ced = $Cedulas;
        $campana =  $this->model->Cargarcampana();
        $this->view->cam = $campana;
        //$tipificacion =  $this->model->Cargartipificaciones();
        //$this->view->tip = $tipificacion;
        $this->view->render('buscador/buscador');
    }else{
        $this->view->render('errores/404');
    }
    }

    function traerbuscador(){
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traerbuscador();
    }

    function buscador()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->buscador($array);
    }
    
    function Actualizarcliente()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Actualizarcliente($array);
    }

    function cargar_tipificacion()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->cargartipificaciones($array);
    }

}

?>
