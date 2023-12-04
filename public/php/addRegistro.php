<?php

require 'DBManager.php';

$db = new DBMAnager();
$tipo_insulina = $_POST["tipo_insulina"];
$dosis = $_POST["dosis"];
$tipo_dosis = $_POST["tipo_dosis"];
$tipo_medicion = $_POST["tipo_medicion"];
$agua = $_POST["vasos_agua"];
$dia_atipico = $_POST["dia_atipico"];
$observaciones = $_POST["observaciones"];
$glucosa = $_POST["glucosa"];

$db->addRegistro($tipo_insulina, $dosis, $tipo_dosis, $tipo_medicion , $agua, $dia_atipico ,$observaciones, $glucosa);


?>