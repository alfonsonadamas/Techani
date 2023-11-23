<?php

    require 'DBManager.php';

    $db = new DBMAnager();
    $nombre_paciente = $_POST["nombre_paciente"];
    $nombre_padre_tutor = $_POST["nombre_padre_tutor"];
    $correo = $_POST["correo"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $lugar_nacimiento = $_POST["lugar_nacimiento"];
    $estado_nacimiento = $_POST["estado_nacimiento"];
    $estado_residencia = $_POST["estado_residencia"];
    if (!empty($_POST['sexo'])) {
        $sexo = $_POST['sexo'];
    }

    $db->expedienteDp($nombre_paciente, $nombre_padre_tutor, $correo, $fecha_nacimiento, $lugar_nacimiento , $estado_nacimiento, $estado_residencia ,$sexo);


?>