<?php

require 'DBManager.php';

$db = new DBMAnager();

    
    $fechaCita = $_POST['fecha_cita'];
    $horaCita = $_POST['hora_cita'];
    $tipoCita = $_POST['tipo_cita'];
    $lugar = $_POST['lugar'];
    $observaciones = $_POST['observaciones'];

    

    
    $db->addCitas($fechaCita, $horaCita, $tipoCita, $lugar, $observaciones);

    



?>