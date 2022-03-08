<?php


class agendar extends Controller
{

    function __construct()    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    
    function render()
    {
        if($_SESSION['userAcces'] != 3){
            $Cedulas =  $this->model->CargarCedulas();
            $this->view->ced = $Cedulas;
            $this->view->render('agendar/agendar');

        }else{
            $this->view->render('errores/404');

        }
       
    }

    function Traeragendar()
    {
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traeragendar();
    }

    function GuardarAgenda()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->GuardarAgenda($array);
    }

    function Actualizaragendar()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Actualizaragendar($array);
    }
}
