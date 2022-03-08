<?php


class usuariosmodel extends Model{

    function __construct(){

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traerusuarios(){

        try{
            $resultado = $this->db->connect()->query("SELECT * FROM prueba.usuarios");
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

    function Cargarusuarios()
    {

        try {
            $resultado = $this->db->connect()->query("SELECT usuarios_cedula FROM prueba.usuarios");
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

    function guardarusuarios($parametros)
    {
        $cedula = $parametros["cedula"];
        $apellido = $parametros["apellido"];
        $nombre = $parametros["nombre"];
        $telefono = $parametros["telefono"];
        $correo_electronico = $parametros["correo_electronico"];
        $contrasena = $parametros["contrasena"];
        $procedencia = $parametros['procedencia'];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.usuarios
            (usuarios_cedula,apellido,nombre,celular,correo_electronico,contrasena,procedencia)
            values(:cedula,:apellido,:nombre,:telefono,:correo_electronico,:contrasena,:procedencia)");

            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":apellido", $apellido);
            $query->bindParam(":nombre", $nombre);
            $query->bindParam(":telefono", $telefono);
            $query->bindParam(":correo_electronico", $correo_electronico);
            $query->bindParam(":contrasena", $contrasena);
            $query->bindParam(":procedencia", $procedencia);

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


?>
