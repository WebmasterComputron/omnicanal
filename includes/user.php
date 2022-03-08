<?php
require_once 'libs/database.php';

//include_once 'models/usuario.php';
class User extends Model
{

    public $nombre;
    public $username;


    function uss($user, $contra)
    {

        $query = $this->db->connect()->prepare("SELECT * from prueba.usuarios
        where correo_electronico = '" . $user . "'");

        if ($query->execute()) {
            $result = $query->fetchAll();
            foreach ($result as $row) {
                $nombre   = $row['nombre'];
                $pass   = $row['contrasena'];
                $rol = $row['roles'];
                $nivel = $row['nivel'];
                $estado = $row['estado'];
            }

            if ($pass == $contra) {

                if ($estado == 1) {
                    $_SESSION['SessionInit'] = true;
                    $_SESSION['userAcces'] = $nivel;
                    $_SESSION['userName'] = $user;
                    $_SESSION['userRol'] = $rol;

                    return "ok";
                } else {
                    return "est0";
                }
            } else {
                return "Err";
            }
        } else {
            $err = $query->errorInfo();
            return $err;
        }
    }

    function userExist($user, $pass)
    {

        //$items = [];
        $correo = $user;


        try {
            $usu = "";
            $tipo = "";
            $Nivel = "";
            $query = $this->db->connect()->prepare("select * from inv_users");
            $query->execute();
            $result = $query->fetchAll();
            if ($query->rowCount()) {
                try {
                    foreach ($result as $row) {
                        $usu   = $row['Usuario'];
                        $tipo = $row['Tipo'];
                        $nivel = $row['nivel'];
                        $ID = $row['usuarioID'];
                    }
                    // echo ($usu);
                    //echo ($estado);
                    if ($usu == "ERROR" or $usu == null or $nivel == "ERROR") {
                        return  false;
                    } else {
                        $_SESSION['iniciosesion'] = true;
                        $_SESSION['Usuario'] = $usu;
                        $_SESSION['Email'] = $user;
                        $_SESSION['Tipo'] = $tipo;
                        $_SESSION['usuarioID'] = $ID;
                        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
                        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
                        $_SESSION['Nivel'] = $nivel;



                        return true;
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                echo "error";
                return false;
                //exit();
            }
        } catch (PDOException $e) {
            // echo $e->getMessage();
        }
    }



    public function Intentos()
    {
        try {
            $usuarioId = "";
            $query = $this->db->connect()->prepare("{ CALL CSD_Login_user (?,?)}");
            $query->bindParam(1, $usuarioId, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
        }
    }



    function closeSession()
    {

        echo "adsdawdawd";
    }
}
