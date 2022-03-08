<?php

class campana extends Controller
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    function render()
    {
        if(($_SESSION['userAcces'] != 2)||($_SESSION['userAcces'] != 3)){
        $Cedulas =  $this->model->Cargarcampana();
        $this->view->ced = $Cedulas;
        $plantilla =  $this->model->traerPlantillasNombres();
        $this->view->plan = $plantilla;
        $this->view->render('campana/campana');
    }else{
        $this->view->render('errores/404');

    }
    }

    function Agendar(){
        $campana = $this->model->traercampanaCb();
        $this->view->can = $campana;
        $this->view->render('campana/agendarcampana');

    }
    
    function Traercampana()
    {
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traercampana();
    }

    function traercampanaPorId()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traercampanaPorId($array);
    }

    function TraercampanaDet()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->TraercampanaDet($array);
    }

    function Guardarcampana()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Guardarcampana($array);
    }
    function GuardarCampanaDet()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->GuardarCampanaDet($array);
    }


    function Actualizarcampana()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Actualizarcampana($array);
    }

    function CargarPlantilla()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->CargarPlantilla($array);
    }

    function NumeroCampana()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->consultarNunCampana($array);
    }

    function NumeroIdent()
    {
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->consultarNunIdent();
    }
}
