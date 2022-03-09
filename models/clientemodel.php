<?php


class clientemodel extends Model{

    function __construct(){
       
        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }
    
    function traercliente(){

        try{
            $resultado = $this->db->connect()->query("SELECT * FROM omnicanal.registro");
            if($resultado->execute()){
                $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
                exit();
            }else{
                $err = $resultado->errorInfo();
                echo json_encode($err);
                exit();
            }

        }catch(PDOException $e){
            echo json_encode($e);
            exit();
        }
    }    

    
}


?>