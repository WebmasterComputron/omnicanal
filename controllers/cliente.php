<?php


class cliente extends Controller{

    function __construct(){
       
        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    function render(){
        if($_SESSION['userAcces'] != 3){
            $this->view->render('cliente/cliente');
        }else{
            $this->view->render('errores/404');

        }
    }
    
    function TraerCliente(){
        //$array = json_decode(file_get_contents("php://input"), true);
        $function = $this->model->traercliente();
    }

}


?>