<?php

require 'DBManager.php';

$db = new DBMAnager();
$fecha = $_POST["fecha"];
$tipo_estudio = $_POST["tipo_estudio"];
$archivo = $_FILES['archivo_pdf']['name'];
$resultado = move_uploaded_file($_FILES['archivo_pdf']['tmp_name'], '../archivos/' . $archivo);
$observaciones = $_POST["observaciones"];
if ($resultado) {
    $db->addAnalisis($fecha, $tipo_estudio, $observaciones, $archivo);
} else {
    echo "Error al subir el archivo: " . $_FILES['archivo_pdf']['error'];
}
// $imagen = $_POST["imagen"];