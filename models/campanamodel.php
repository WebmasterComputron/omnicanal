<?php

class campanamodel extends Model
{

    function __construct()
    {

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traercampana()
    {
        //$id_campana = $parametros["id_campana"];

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.campana");
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
    function traercampanaPorId($parametros)
    {
        $id_campana = $parametros["id_campana"];

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.campana WHERE id_campana = '" . $id_campana . "'");
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
    function traercampanaCb()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.campana");
            if ($resultado->execute()) {
                $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } else {
                $err = $resultado->errorInfo();
                return $err;
            }
        } catch (PDOException $err) {
            return $err;
        }
    }
    function TraercampanaDet($parametros)
    {
        $id_campana = $parametros["id_campana"];
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM prueba.campana_detalle
            Where id_campana = '" . $id_campana . "'");
            //$query->bindParam(":id_campana", $id_campana);
            $c = 0;
            if ($query->execute()) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);

                /*foreach ($result as $item) {
                    $arr[$item["campo"]] = $item["valor"];
                    $r = array(
                        $item["campo"] => $item["valor"]
                    );
                    $items[$c] = $arr;

                   // array_push($items,$r);
                    $c++;
                }*/


                echo json_encode($result);
                exit();
            } else {
                $err = $query->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            echo json_encode($e);
            exit();
        }
    }


    function traerPlantillasNombres()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.plantilla");
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
            $resultado = $this->db->connect()->query("SELECT nombre_campana FROM prueba.campana");
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

    function Guardarcampana($parametros)
    {
        $campana = $parametros["campana"];
        $id_plantilla = $parametros["id_plantilla"];

        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.campana 
            (nombre_campana,id_plantilla)
            values(:campana,:id_plantilla)");

            $query->bindParam(":campana", $campana);
            $query->bindParam(":id_plantilla", $id_plantilla);


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
    function GuardarCampanaDet($parametros)
    {
        $id_campana = $parametros["id_campana"];
        $campo = $parametros["campo"];
        $valor = $parametros["valor"];
        $ident = $parametros["ident"];



        $bandera = false;
        try {
            $query = $this->db->connect()->prepare("INSERT INTO prueba.campana_detalle
            (id_campana,campo,valor,ident) 
            values(:id_campana,:campo,:valor,:ident)");
            $query->bindParam(":id_campana", $id_campana);
            $query->bindParam(":campo", $campo);
            $query->bindParam(":valor", $valor);
            $query->bindParam(":ident", $ident);


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

    function Actualizarcampana($parametros)
    {
        $id_campana = $parametros["id_campana"];
        $nombre_campana = $parametros["nombre_campana"];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("UPDATE prueba.campana SET nombre_campana =:campana WHERE id_campana=:id_campana");


            $query->bindParam(":campana", $nombre_campana);
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

    function consultarNunCampana()
    {
        try {
            $items = [];
            $query = $this->db->connect()->prepare("select max(id_campana) as n from prueba.campana");
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

    function consultarNunIdent()
    {
        try {
            $items = [];
            $query = $this->db->connect()->prepare("SELECT max(ident) as n from prueba.campana_detalle");
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


    function CargarPlantilla($parametros)
    {
        $id_plantilla = $parametros["id_plantilla"];

        try {
            $query = $this->db->connect()->query("SELECT * FROM prueba.detalle_plantilla
            Where id_plantilla = '" . $id_plantilla . "'");
            //$query->bindParam(":id_plantilla", $id_plantilla, PDO::PARAM_STR);

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
            echo json_encode($e);
            exit();
        }
    }
}
