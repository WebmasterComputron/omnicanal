<?php


class tipificacion extends Controller
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
            $campana =  $this->model->Cargarcampana();
        $this->view->cam = $campana;
        $this->view->render('tipificacion/tipificacion');
        
    }else{
        $this->view->render('errores/404');

    }
    }

    function Traertipificacion()
    {
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traertipificacion();
    }

    function Guardartipificacion()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Guardartipificacion($array);
    }

    function Actualizartipificacion()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->Actualizartipificacion($array);
    }
}

?>