<?php

require 'DBManager.php';

$db = new DBMAnager();

    
$fechaCita = htmlspecialchars($_POST['Fecha'], ENT_QUOTES, 'UTF-8');
$horaCita = htmlspecialchars($_POST['Hora'], ENT_QUOTES, 'UTF-8');
$tipoCita = htmlspecialchars($_POST['Tipo_Cita'], ENT_QUOTES, 'UTF-8');
$lugar = htmlspecialchars($_POST['Lugar'], ENT_QUOTES, 'UTF-8');
$observaciones = htmlspecialchars($_POST['ObservacionesAgregar'], ENT_QUOTES, 'UTF-8');

    
$db->addCitas($fechaCita, $horaCita, $tipoCita, $lugar, $observaciones);

    



?>