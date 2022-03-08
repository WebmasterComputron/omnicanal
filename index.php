<?php
require_once "libs/database.php";
require_once "libs/controller.php";
require_once "libs/view.php";
require_once "libs/model.php";
require_once "libs/app.php";
require_once "config/config.php";
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$database = new Database;
$user = new User();
$userSession = new User_Session();


if ($database->connect()) {


    if (isset($_SESSION['SessionInit'])) {

        $app = new App();
    } else if (isset($_POST['UserClg']) && isset($_POST['passClg'])) {
        // 
        $usuario = $_POST['UserClg'];
        $passForm = $_POST['passClg'];
        $res = $user->uss($usuario, $passForm);

        //var_dump($res);

        if ($res == "ok") {
            $app = new App();
        } else if ($res == "Err") {
            $errorlogin = "Verifique Sus credenciales";
            include_once 'views/login/login.php';
        } else if ($res == "est0") {
            $errorlogin = "Usuario desabilitado";
            include_once 'views/login/login.php';
        } else {
            include_once 'views/login/login.php';
        }
        //exit();
    } else {
        include_once 'views/login/login.php';
    }
} else {
}
