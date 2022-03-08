<?php

if(isset($_POST['consultaagendar'])){
  include("conexionPDO.php");
  $con = new Database();
  $resultado = $con->connect()->prepare("SELECT * FROM prueba.agendar");
  $resultado->execute();
  $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

  $result=json_encode($result);
  echo $result;
}

if(isset($_POST['consultacampana'])){
  include("conexionPDO.php");
  $con = new Database();
  $resultado = $con->connect()->prepare("SELECT * FROM prueba.campana");
  $resultado->execute();
  $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

  $result=json_encode($result);
  echo $result;
}

if(isset($_POST['consultainteracciones'])){
  include("conexionPDO.php");
  $con = new Database();
  $resultado = $con->connect()->prepare("SELECT * FROM prueba.interacciones");
  $resultado->execute();
  $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

  $result=json_encode($result);
  echo $result;
}

if(isset($_POST['consultaregistro'])){
  include("conexionPDO.php");
  $con = new Database();
  $resultado = $con->connect()->prepare("SELECT * FROM prueba.registro");
  $resultado->execute();
  $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

  $result=json_encode($result);
  echo $result;
}

if(isset($_POST['consultatipificaciones'])){
  include("conexionPDO.php");
  $con = new Database();
  $resultado = $con->connect()->prepare("SELECT * FROM prueba.tipificaciones");
  $resultado->execute();
  $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

  $result=json_encode($result);
  echo $result;
}

  if(isset($_POST['consultarusuarios'])){
    include("conexionPDO.php");
    $con = new Database();
    $resultado = $con->connect()->prepare("SELECT * FROM prueba.usuarios");
    $resultado->execute();
    $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

    $result=json_encode($result);
    echo $result;
  }
  
 ?>
