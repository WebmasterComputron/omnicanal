<?php


class ingreso_campana extends Controller
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
        $this->view->render('ingreso_campana/ingreso_campana');
        }else{
            $this->view->render('errores/404');

        }
    }

    
}
