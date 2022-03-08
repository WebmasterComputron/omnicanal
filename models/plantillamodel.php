<?php


class PlantillaModel extends Model
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function consultarNunPlantilla()
    {
        try {
            $items = [];
            $query = $this->db->connect()->prepare("select max(id_plantilla) as n from prueba.plantilla");
            if ($query->execute()) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                $result = $result[0]["n"];
                if ($result == null) {
                    $result = 1;
                } else {
                    $result = $result + 1;
                }
                $nunOrden = 0;
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
    }

    function GuardarPlantillaCab($parametros)
    {
        $nombre = $parametros["nombre"];
        $descripcion = $parametros["descripcion"];


        $bandera = false;
        try {
            $query = $this->db->connect()->prepare("INSERT INTO prueba.plantilla
            (nombre,descripcion) 
            values(:nombre,:descripcion)");
            $query->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $query->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);

            if ($query->execute()) {
                $bandera = true;
                echo json_encode($bandera);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
            //return $parametros;
        } catch (PDOException $err) {
            echo json_encode($err);
            exit();
        }
    }

    function GuardarPlantillaDet($parametros)
    {
        $id_plantilla = $parametros["id_plantilla"];
        $campo = $parametros["campo"];
        $tipo = $parametros["tipo"];


        $bandera = false;
        try {
            $query = $this->db->connect()->prepare("INSERT INTO prueba.detalle_plantilla
            (id_plantilla,campo,tipo) 
            values(:id_plantilla,:campo,:tipo)");
            $query->bindParam(":id_plantilla", $id_plantilla, PDO::PARAM_STR);
            $query->bindParam(":campo", $campo, PDO::PARAM_STR);
            $query->bindParam(":tipo", $tipo, PDO::PARAM_STR);

            if ($query->execute()) {
                $bandera = true;
                echo json_encode($bandera);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
            //return $parametros;
        } catch (PDOException $err) {
            echo json_encode($err);
            exit();
        }
    }
}
