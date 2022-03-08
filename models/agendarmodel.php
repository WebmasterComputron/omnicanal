<?php


class agendarmodel extends Model
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traeragendar()
    {
        $usu = $_SESSION['userName'];

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.agendar where usuarios = '".$usu."'");
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


    function CargarCedulas()
    {
        try {
            $resultado = $this->db->connect()->query("SELECT registro_cedula FROM prueba.registro ");
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

    function GuardarAgenda($parametros)
    {
        $fecha = $parametros["fecha"];
        $cedula = $parametros["cedula"];
        $observacion = $parametros["observaciones"];
        $usuario = $_SESSION['userName'];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.agendar 
            (usuarios,fecha_hora_agendar,cedula_registro,observaciones_agendar)
            values(:usuario,:fecha,:cedula,:observaciones)");

            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":observaciones", $observacion);

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

    function Actualizaragendar($parametros)
    {
        $id_agendar = $parametros["id_agendar"];
        $bandera = false;

        try {
            $items = [];
            $estado = 1;
            $query = $this->db->connect()->prepare("UPDATE prueba.agendar SET llamarCliente =:estado WHERE id_agendar=:id_agendar");

            $query->bindParam(":id_agendar", $id_agendar);
            $query->bindParam(":estado", $estado);

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
