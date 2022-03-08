<?php


class tipificacionmodel extends Model
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traertipificacion()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.tipificaciones");
            if ($resultado->execute()) {
                $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
                exit();
            } else {
                $err = $resultado->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            echo json_encode($e);
            exit();
        }
    }


    function Cargartipificacion()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT tipificacion FROM prueba.tipificaciones");
            if ($resultado->execute()) {
                $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
                return ($result);
            } else {
                $err = $resultado->errorInfo();
                return ($err);
            }
        } catch (PDOException $e) {
            return ($e);
        }
    }

    function Guardartipificacion($parametros)
    {
        $tipificacion = $parametros["tipificacion"];
        $id_campana = $parametros["campana"];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.tipificaciones
            (tipificacion, id_campana)
            values(:tipificacion,:id_campana)");

            $query->bindParam(":tipificacion", $tipificacion);
            $query->bindParam(":id_campana", $id_campana);

            if ($query->execute()) {
                $bandera = true;
                echo json_encode($bandera);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            print_r($query->errorInfo());
        }
    }

    function Actualizartipificacion($parametros)
    {
        $id_tipificaciones = $parametros["id_tipificaciones"];
        $tipificacion = $parametros["tipificacion"];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("UPDATE prueba.tipificaciones SET tipificacion =:tipificacion WHERE id_tipificaciones=:id_tipificaciones");

            $query->bindParam(":id_tipificaciones", $id_tipificaciones);
            $query->bindParam(":tipificacion", $tipificacion);            

            if ($query->execute()) {
                $bandera = true;
                echo json_encode($bandera);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            print_r($query->errorInfo());
        }
    }
    function Cargarcampana()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.campana");
            if ($resultado->execute()) {
                $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
                return ($result);
            } else {
                $err = $resultado->errorInfo();
                return ($err);
            }
        } catch (PDOException $e) {
            return ($e);
        }
    }
}

?>
