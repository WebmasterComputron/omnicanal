<?php

$username = $_SESSION['userName'];
$nivel = $_SESSION['userAcces'];

?>

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
    <link href="<?php echo constant('URL') ?>public/lib/morris.js/morris.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/app-assets/vendors/css/extensions/jstree.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/app-assets/css/plugins/extensions/ext-component-tree.min.css">

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/azia.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/custom.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
</head>

<body class="az-body az-body-sidebar">


    <?php require 'views/sidebar.php'; ?>


    <div class="az-content az-content-dashboard-two">
        <div class="az-header">
            <div class="container-fluid">
                <div class="az-header-left">
                    <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
                </div><!-- az-header-left -->
                <div class="az-header-center">
                </div><!-- az-header-center -->
                <div class="az-header-right">
                   
         
                    <div class="dropdown az-profile-menu">
                        <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
                        <div class="dropdown-menu">
                            <div class="az-dropdown-header d-sm-none">
                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <div class="az-header-profile">
                                <div class="az-img-user">
                                    <img src="https://via.placeholder.com/500x500" alt="">
                                </div><!-- az-img-user -->
                                <h6><?php echo $username ?></h6>
                                <span><?php echo $nivel ?></span>
                            </div><!-- az-header-profile -->

                        
                            <a href="<?php echo constant('URL') ?>includes/logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                        </div><!-- dropdown-menu -->
                    </div>
                </div><!-- az-header-right -->
            </div><!-- container -->
        </div><!-- az-header -->
        <div class="az-content-body">

            <!-- az-content-header -->