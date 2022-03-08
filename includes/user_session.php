<?php
include_once 'libs/database.php';

class User_Session 
{
    private $nombre;
    private $username;
    function __construct()
    {
        session_start();
        session_regenerate_id();
       
    }
    public function closeSession()
    {
        session_start();
        session_unset();
        session_destroy();
        session_regenerate_id(true);
        header("Location: ../");
        die();
    }

    function cc()
    {
        $eventID = "Sesout001";
        $eventDescription = "TERMINO SESION";
    }


}
