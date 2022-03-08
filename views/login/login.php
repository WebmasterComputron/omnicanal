<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computron</title>

    <!-- vendor css -->
    <link href="<?php echo constant('URL') ?>public/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo text-primary">Compu<span style="color: orange;">tron</span></h1>

        <div class="az-signin-header">

          <h2 class="text-dark">Bienvenido!</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label>Correo electronico</label>
              <input name="UserClg" type="text" class="form-control" placeholder="ingresa tu correo registrado" value="">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Contraseña</label>
              <input name="passClg" type="password" class="form-control" placeholder="Ingresa tu contraseña" value="">
            </div><!-- form-group -->
            <button class="btn btn-primary btn-block">Ingreso</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
        <?php
                            if (isset($errorlogin)) {
                                echo '<div class="alert alert-danger">';
                                echo $errorlogin . "<br>";
                                echo ' </div>';
                            }
                            ?>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="<?php echo constant('URL') ?>public/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/lib/ionicons/ionicons.js"></script>

    <script src="<?php echo constant('URL') ?>public/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
