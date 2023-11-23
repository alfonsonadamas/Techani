<?php

require 'DBManager.php';

$db = new DBMAnager();

    
    $fechaCita = $_POST['Fecha'];
    $horaCita = $_POST['Hora'];
    $tipoCita = $_POST['Tipo_Cita'];
    $lugar = $_POST['Lugar'];
    $observaciones = $_POST['ObservacionesAgregar'];

    

    
    $db->addCitas($fechaCita, $horaCita, $tipoCita, $lugar, $observaciones);

    



?>