<?php


class interaccionesmodel extends Model
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traerinteracciones($data)
    {
        $cedula = $data["cedula"];
        $usu = $_SESSION['userName'];
        try {
            $items = [];
            $query = $this->db->connect()->prepare("SELECT * FROM omnicanal.interacciones Where usuarios = :usu AND cedulacontacto = :cedula");

            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":usu", $usu);

            if ($query->execute()) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            print_r($query->errorInfo());
        }
        /*try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.interacciones Where usuarios = '".$usu."'");
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
        }*/
    }


    function CargarCedulas()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT registro_cedula FROM omnicanal.registro");
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
    function Cargarcampana()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT nombre_campana FROM omnicanal.campana");
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
    function Cargartipificaciones()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT tipificacion FROM omnicanal.tipificaciones");
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

    function Guardarinteracciones($parametros)
    {
        $fecha = $parametros["fecha"];
        $procedencias = $parametros["procedencias"];
        $observacion = $parametros["observaciones"];
        $campana = $parametros["campana"];
        $tipificaciones = $parametros["tipificaciones"];
        $telefonocontacto = $parametros["telefonocontacto"];
        $cedula = $parametros["cedula"];
        $usuario = $_SESSION['userName'];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO omnicanal.interacciones 
            (usuarios,fechahora,cedulacontacto,observacion,nombre_campana,tipificacion,telefonocontacto,procedencia)
            values(:usuario,:fecha,:cedula,:observaciones,:campana,:tipificaciones,:telefonocontacto,:procedencias)");

            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":observaciones", $observacion);
            $query->bindParam(":campana", $campana);
            $query->bindParam(":tipificaciones", $tipificaciones);
            $query->bindParam(":telefonocontacto", $telefonocontacto);
            $query->bindParam(":procedencias", $procedencias);

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
}
