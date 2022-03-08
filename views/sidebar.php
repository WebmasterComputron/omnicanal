<?php

$username = $_SESSION['userName'];
$nivel = $_SESSION['userAcces'];

?>


<div class="az-sidebar">
    <div class="az-sidebar-header">
        <a href="<?php echo constant('URL'); ?>" class="az-logo text-primary" style="">Compu<span style="color: orange;">tron</span></a>
    </div><!-- az-sidebar-header -->
    <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
        <div class="media-body">
            <h6><?php echo $username ?></h6>
            <span><?php echo $nivel ?></span>
        </div><!-- media-body -->
    </div><!-- az-sidebar-loggedin -->


    <div class="az-sidebar-body">
        <ul class="nav nav-hover">
            <li class="nav-label">Main Menu</li>

            <?php

            if($_SESSION['userAcces'] == "3"){
                ?>
                
                <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>buscador" class="nav-link"><i class="typcn typcn-clipboard"></i>CRUD</a>
                </li><!-- nav-item -->
         

            <?php
            }else if($_SESSION['userAcces'] == "2"){

            ?> 
            <li class="nav-item ">    
            <a href="<?php echo constant('URL'); ?>buscador" class="nav-link"><i class="typcn typcn-clipboard"></i>CRUD</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
            <a href="<?php echo constant('URL'); ?>campana" class="nav-link"><i class="typcn typcn-clipboard"></i>Campañas</a>
            </li><!-- nav-item -->
            
            <?php 
            }else if($_SESSION['userAcces'] == "1"){
            ?>

            <li class="nav-item ">
            <a href="<?php echo constant('URL'); ?>buscador" class="nav-link"><i class="typcn typcn-clipboard"></i>CRUD</a>
            </li><!-- nav-item -->

            <!--<li class="nav-item ">
            <a href="<?php echo constant('URL'); ?>" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            </li> nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>agendar" class="nav-link"><i class="typcn typcn-clipboard"></i>Agendar</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>interacciones" class="nav-link"><i class="typcn typcn-clipboard"></i>Interacciones</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>usuarios" class="nav-link"><i class="typcn typcn-clipboard"></i>Usuarios</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>cliente" class="nav-link"><i class="typcn typcn-clipboard"></i>Cliente</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>campana" class="nav-link"><i class="typcn typcn-clipboard"></i>Campañas</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>tipificacion" class="nav-link"><i class="typcn typcn-clipboard"></i>Tipificaciones</a>
            </li><!-- nav-item -->

            <li class="nav-item ">
                <a href="<?php echo constant('URL'); ?>plantilla" class="nav-link"><i class="typcn typcn-clipboard"></i>Plantilla</a>
            </li><!-- nav-item -->              

            <li class="nav-item ">
            <a href="<?php echo constant('URL'); ?>Campana/Agendar" class="nav-link"><i class="typcn typcn-group-outline"></i>Agendar Campaña</a>
            </li><!-- nav-item -->          

            <?php 
            }
            ?>

        </ul><!-- nav -->
    </div><!-- az-sidebar-body -->
</div><!-- az-sidebar -->
