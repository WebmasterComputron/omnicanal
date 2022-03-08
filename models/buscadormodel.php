<?php


class buscadormodel extends Model{

    function __construct(){

        parent::__construct();
        //$this->view->render('principal/index');
        //echo "nuevo controlaodr";
    }

    function traerbuscador(){

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

    function Cargarbuscador(){

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

    function buscador($parametros){
        $cedula = $parametros["cedula"];

        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("SELECT * FROM prueba.registro WHERE registro_cedula=$cedula");

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
            print_r($query->errorInfo());
        }
    }

    function traeragendar(){

        try {
            $resultadoage = $this->db->connect()->query("SELECT * FROM prueba.agendar");
            if ($resultadoage->execute()) {
                $resultage = $resultadoage->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($resultage);
                exit();
            } else {
                $err = $resultadoage->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            echo json_encode($e);
            exit();
        }
    }

    function GuardarAgenda($parametros){
        $fecha = $parametros["fecha"];
        $cedula = $parametros["cedula"];
        $observacion = $parametros["observaciones"];
        $usuario = $_SESSION['userName'];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.agendar 
            (usuarios,fecha_hora_agendar,cedula_registro,observaciones_agendar)
            values(:usuario,:fecha,:cedula,:observaciones)");

            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":observaciones", $observacion);

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

    function CargarCedulas(){

        try {
            $resultado = $this->db->connect()->query("SELECT registro_cedula FROM prueba.registro");
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

    function traerinteracciones()
    {

        try {
            $resultado1 = $this->db->connect()->query("SELECT * FROM prueba.interacciones");
            if ($resultado1->execute()) {
                $result1 = $resultado1->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result1);
                exit();
            } else {
                $err = $resultado1->errorInfo();
                echo json_encode($err);
                exit();
            }
        } catch (PDOException $e) {
            echo json_encode($e);
            exit();
        }
    }

    function Cargarcampana()
    {

        try {
            $resultadocam = $this->db->connect()->query("SELECT * FROM prueba.campana");
            if ($resultadocam->execute()) {
                $resultcam = $resultadocam->fetchAll(PDO::FETCH_ASSOC);
                return ($resultcam);
            } else {
                $err = $resultadocam->errorInfo();
                return ($err);
            }
        } catch (PDOException $e) {
            return ($e);
        }
    }
    
    function Cargartipificaciones($parametros)
    {
        $id = $parametros["id"];
        try {
            $resultadotip = $this->db->connect()->query("SELECT * FROM prueba.tipificaciones WHERE id_campana ='".$id."'");
            if ($resultadotip->execute()) {
                $resulttip = $resultadotip->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($resulttip);
                exit();
            } else {
                $err = $resultadotip->errorInfo();
                return ($err);
            }
        } catch (PDOException $e) {
            return ($e);
        }
    }

    function Guardarinteracciones($parametros)
    {
        $fecha = $parametros["fecha"];
        $procedencias = $parametros["procedencias"];
        $observacion = $parametros["observaciones"];
        $campana = $parametros["campana"];
        $tipificaciones = $parametros["tipificaciones"];
        $telefonocontacto = $parametros["telefonocontacto"];
        $cedula = $parametros["cedula"];
        $usuario = $_SESSION['userName'];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("INSERT INTO prueba.interacciones 
            (usuarios,fechahora,cedulacontacto,observacion,nombre_campana,tipificacion,telefonocontacto,procedencia)
            values(:usuario,:fecha,:cedula,:observaciones,:campana,:tipificaciones,:telefonocontacto,:procedencias)");

            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":fecha", $fecha);
            $query->bindParam(":cedula", $cedula);
            $query->bindParam(":observaciones", $observacion);
            $query->bindParam(":campana", $campana);
            $query->bindParam(":tipificaciones", $tipificaciones);
            $query->bindParam(":telefonocontacto", $telefonocontacto);
            $query->bindParam(":procedencias", $procedencias);

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

    function Actualizarcliente($parametros)
    {
        
        $registro_cedula = $parametros["cedula2"];
        $registro_apellido_paterno = $parametros["Apellido_paterno2"];
        $registro_apellido_materno = $parametros["Apellido_materno2"];
        $registro_nombre = $parametros["Nombre2"];
        $registro_fecha_nacimiento = $parametros["Fecha_nacimiento2"];
        $registro_edad = $parametros["Edad2"];
        $registro_sexo = $parametros["Sexo2"];
        $registro_estado_civil = $parametros["Estado_civil2"];
        $registro_correo_electronico = $parametros["Correo_electronico2"];

        $registro_telefono = $parametros["Telefono2"];
        $registro_celular = $parametros["Celular2"];
        $registro_pais = $parametros["Pais2"];
        $registro_tipo_cedula = $parametros["Tipo_cedula2"];
        $registro_numero_hijos = $parametros["Numero_hijos2"];
        $registro_nivel_educacion = $parametros["Nivel_educacion2"];
        $registro_situacion_laboral = $parametros["Situacion_laboral2"];
        $registro_antiguedad_laboral = $parametros["Antiguedad_laboral2"];
        $registro_tipo_contrato = $parametros["Tipo_contrato2"];
        $registro_tipo_afiliacion = $parametros["Tipo_afiliacion2"];

        $registro_dia_pago = $parametros["Dia_pago2"];
        $registro_envio_correspondencia = $parametros["Envio_correspondencia2"];
        $registro_tipo_vehiculo = $parametros["Tipo_vehiculo2"];
        $registro_total_ingresos = $parametros["Total_ingresos2"];
        $registro_total_egresos = $parametros["Total_egresos2"];
        $registro_otros_ingresos = $parametros["Otros_ingresos2"];
        $registro_origen_otros_ingresos = $parametros["Origen_otros_ingresos2"];
        $registro_ciudad = $parametros["Ciudad2"];
        $registro_barrio_domicilio = $parametros["Barrio_domicilio2"];
        $registro_calle_principal_domicilio = $parametros["Calle_principal_domicilio2"];

        $registro_numero_casa_domicilio = $parametros["Numero_casa_domicilio2"];
        $registro_bloq_domicilio = $parametros["Bloque_domicilio2"];
        $registro_dpto_domicilio = $parametros["Departamento_domicilio2"];
        $registro_interseccion_domicilio = $parametros["Interseccion_domicilio2"];
        $registro_mz_domicilio = $parametros["Manzana_domicilio2"];
        $registro_solar_villa_domicilio = $parametros["Solar_domicilio2"];
        $registro_tipo_vivienda = $parametros["Tipo_vivienda2"];
        $registro_antiguedad_residencia = $parametros["Antiguedad_residencia2"];
        $laboral_telefono = $parametros["Telefono_laboral2"];
        $laboral_celular = $parametros["Celular_laboral2"];

        $laboral_ciudad = $parametros["Ciudad_labora2"];
        $laboral_nombre_empresa = $parametros["Nombre_empresa2"];
        $laboral_ocupacion = $parametros["Ocupacion_laboral2"];
        $laboral_tipo_actividad = $parametros["Tipo_actividad2"];
        $laboral_barrio_ciudadela = $parametros["Barrio_labora2"];
        $laboral_calle_principal = $parametros["Calle_principal_labora2"];
        $laboral_numero_casa = $parametros["Numero_casa_donde_labora2"];
        $laboral_interseccion = $parametros["Interseccion_donde_labora2"];
        $laboral_mz = $parametros["Manzana_laboral2"];
        $laboral_solar_villa = $parametros["Solar_villa_donde_labora2"];

        $conyuge_cedula = $parametros["Cedula_conyuge2"];
        $conyuge_apellido_paterno = $parametros["Apellido_paterno_conyuge2"];
        $conyuge_apellido_materno = $parametros["Apellido_materno_conyuge2"];
        $conyuge_nombre = $parametros["Nombre_conyuge2"];

        $referencias_apellido_paterno = $parametros["Apellido_paterno_referencia2"];
        $referencias_apellido_materno = $parametros["Apellido_materno_referencia2"];
        $referencias_nombre = $parametros["Nombre_referencia2"];
        $referencias_telefono = $parametros["Telefono_referencia2"];
        $referencias_celular = $parametros["Celular_referencia2"];
        $referencias_ciudad = $parametros["Ciudad_referencia2"];
        $referencias_parentesco = $parametros["Parentesco_referencia2"];
        $bandera = false;

        try {
            $items = [];
            $query = $this->db->connect()->prepare("UPDATE prueba.registro SET registro_cedula=:cedula2,
            registro_apellido_paterno=:Apellido_paterno2,registro_apellido_materno=:Apellido_materno2,
            registro_nombre=:Nombre2,registro_fecha_nacimiento=:Fecha_nacimiento2,registro_edad=:Edad2,
            registro_sexo=:Sexo2,registro_estado_civil=:Estado_civil2,registro_correo_electronico=:Correo_electronico2,
            registro_telefono=:registro_telefono,registro_celular=:registro_celular,registro_pais=:registro_pais,
            registro_tipo_cedula=:registro_tipo_cedula,registro_numero_hijos=:registro_numero_hijos,registro_nivel_educacion=:registro_nivel_educacion,
            registro_situacion_laboral=:registro_situacion_laboral,registro_antiguedad_laboral=:registro_antiguedad_laboral,
            registro_tipo_contrato=:registro_tipo_contrato,registro_tipo_afiliacion=:registro_tipo_afiliacion,
            registro_dia_pago=:registro_dia_pago,registro_envio_correspondencia=:registro_envio_correspondencia,
            registro_tipo_vehiculo=:registro_tipo_vehiculo,registro_total_ingresos=:registro_total_ingresos,
            registro_total_egresos=:registro_total_egresos,registro_otros_ingresos=:registro_otros_ingresos,
            registro_origen_otros_ingresos=:registro_origen_otros_ingresos,registro_ciudad=:registro_ciudad,
            registro_barrio_domicilio=:registro_barrio_domicilio,registro_calle_principal_domicilio=:registro_calle_principal_domicilio,
            registro_numero_casa_domicilio=:registro_numero_casa_domicilio,registro_bloq_domicilio=:registro_bloq_domicilio,
            registro_dpto_domicilio=:registro_dpto_domicilio,registro_interseccion_domicilio=:registro_interseccion_domicilio,
            registro_mz_domicilio=:registro_mz_domicilio,registro_solar_villa_domicilio=:registro_solar_villa_domicilio,
            registro_tipo_vivienda=:registro_tipo_vivienda,registro_antiguedad_residencia=:registro_antiguedad_residencia,
            laboral_telefono=:laboral_telefono,laboral_celular=:laboral_celular,laboral_ciudad=:laboral_ciudad,
            laboral_nombre_empresa=:laboral_nombre_empresa,laboral_ocupacion=:laboral_ocupacion,
            laboral_tipo_actividad=:laboral_tipo_actividad,laboral_barrio_ciudadela=:laboral_barrio_ciudadela,
            laboral_calle_principal=:laboral_calle_principal,laboral_numero_casa=:laboral_numero_casa,
            laboral_interseccion=:laboral_interseccion,laboral_mz=:laboral_mz,laboral_solar_villa=:laboral_solar_villa,
            conyuge_cedula=:conyuge_cedula,conyuge_apellido_paterno=conyuge_apellido_paterno,
            conyuge_apellido_materno=:conyuge_apellido_materno,conyuge_nombre=:conyuge_nombre,
            referencias_apellido_paterno=:referencias_apellido_paterno,referencias_apellido_materno=:referencias_apellido_materno,
            referencias_nombre=:referencias_nombre,referencias_telefono=:referencias_telefono,
            referencias_celular=:referencias_celular,referencias_ciudad=:referencias_ciudad,
            referencias_parentesco=:referencias_parentesco WHERE registro_id=:registro_id");

            
            $query->bindParam(":cedula2", $registro_cedula);
            $query->bindParam(":Apellido_paterno2", $registro_apellido_paterno);
            $query->bindParam(":Apellido_materno2", $registro_apellido_materno);
            $query->bindParam(":Nombre2", $registro_nombre);
            $query->bindParam(":Fecha_nacimiento2", $registro_fecha_nacimiento);
            $query->bindParam(":Edad2", $registro_edad);
            $query->bindParam(":Sexo2", $registro_sexo);
            $query->bindParam(":registro_estado_civil", $registro_estado_civil);
            $query->bindParam(":Correo_electronico2", $registro_correo_electronico);

            $query->bindParam(":registro_telefono", $registro_telefono);
            $query->bindParam(":registro_celular", $registro_celular);
            $query->bindParam(":registro_pais", $registro_pais);
            $query->bindParam(":registro_tipo_cedula", $registro_tipo_cedula);
            $query->bindParam(":registro_numero_hijos", $registro_numero_hijos);
            $query->bindParam(":registro_nivel_educacion", $registro_nivel_educacion);
            $query->bindParam(":registro_situacion_laboral", $registro_situacion_laboral);
            $query->bindParam(":registro_antiguedad_laboral", $registro_antiguedad_laboral);
            $query->bindParam(":registro_tipo_contrato", $registro_tipo_contrato);
            $query->bindParam(":registro_tipo_afiliacion", $registro_tipo_afiliacion);

            $query->bindParam(":registro_dia_pago", $registro_dia_pago);
            $query->bindParam(":registro_envio_correspondencia", $registro_envio_correspondencia);
            $query->bindParam(":registro_tipo_vehiculo", $registro_tipo_vehiculo);
            $query->bindParam(":registro_total_ingresos", $registro_total_ingresos);
            $query->bindParam(":registro_total_egresos", $registro_total_egresos);
            $query->bindParam(":registro_otros_ingresos", $registro_otros_ingresos);
            $query->bindParam(":registro_origen_otros_ingresos", $registro_origen_otros_ingresos);
            $query->bindParam(":registro_ciudad", $registro_ciudad);
            $query->bindParam(":registro_barrio_domicilio", $registro_barrio_domicilio);
            $query->bindParam(":registro_calle_principal_domicilio", $registro_calle_principal_domicilio);

            $query->bindParam(":registro_numero_casa_domicilio", $registro_numero_casa_domicilio);
            $query->bindParam(":registro_bloq_domicilio", $registro_bloq_domicilio);
            $query->bindParam(":registro_dpto_domicilio", $registro_dpto_domicilio);
            $query->bindParam(":registro_interseccion_domicilio", $registro_interseccion_domicilio);
            $query->bindParam(":registro_mz_domicilio", $registro_mz_domicilio);
            $query->bindParam(":registro_solar_villa_domicilio", $registro_solar_villa_domicilio);
            $query->bindParam(":registro_tipo_vivienda", $registro_tipo_vivienda);
            $query->bindParam(":registro_antiguedad_residencia", $registro_antiguedad_residencia);
            $query->bindParam(":laboral_telefono", $laboral_telefono);
            $query->bindParam(":laboral_celular", $laboral_celular);

            $query->bindParam(":laboral_ciudad", $laboral_ciudad);
            $query->bindParam(":laboral_nombre_empresa", $laboral_nombre_empresa);
            $query->bindParam(":laboral_ocupacion", $laboral_ocupacion);
            $query->bindParam(":laboral_tipo_actividad", $laboral_tipo_actividad);
            $query->bindParam(":laboral_barrio_ciudadela", $laboral_barrio_ciudadela);
            $query->bindParam(":laboral_calle_principal", $laboral_calle_principal);
            $query->bindParam(":laboral_numero_casa", $laboral_numero_casa);
            $query->bindParam(":laboral_interseccion", $laboral_interseccion);
            $query->bindParam(":laboral_mz", $laboral_mz);
            $query->bindParam(":laboral_solar_villa", $laboral_solar_villa);

            $query->bindParam(":conyuge_cedula", $conyuge_cedula);
            $query->bindParam(":conyuge_apellido_paterno", $conyuge_apellido_paterno);
            $query->bindParam(":conyuge_apellido_materno", $conyuge_apellido_materno);
            $query->bindParam(":conyuge_nombre", $conyuge_nombre);
            $query->bindParam(":referencias_apellido_paterno", $referencias_apellido_paterno);
            $query->bindParam(":referencias_apellido_materno", $referencias_apellido_materno);
            $query->bindParam(":referencias_nombre", $referencias_nombre);
            $query->bindParam(":referencias_telefono", $referencias_telefono);
            $query->bindParam(":referencias_celular", $referencias_celular);
            $query->bindParam(":referencias_ciudad", $referencias_ciudad);
            $query->bindParam(":referencias_parentesco", $referencias_parentesco);

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
