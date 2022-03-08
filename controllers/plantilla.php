<?php


class plantilla extends Controller
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
        $this->view->render('plantilla/plantilla');
        }else{
            $this->view->render('errores/404');

        }
    }

    function Traerinteracciones()
    {
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traerinteracciones();
    }

    function GuardarPlantillaCab()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->GuardarPlantillaCab($array);
    }

    
    function GuardarPlantillaDet()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->GuardarPlantillaDet($array);
    }
    
    function NumeroPlantilla()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->consultarNunPlantilla($array);
    }
}
