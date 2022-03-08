<?php


class usuarios extends Controller{

    function __construct(){

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    function render(){
        if($_SESSION['userAcces'] != 3){
            $this->view->render('usuarios/usuarios');
        }else{
            $this->view->render('errores/404');

        }
    }

    function traerusuarios(){
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traerusuarios();
    }

    function guardarusuarios()
    {
        $array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->guardarusuarios($array);
    }


}


?>
