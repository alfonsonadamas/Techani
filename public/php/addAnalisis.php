<?php

require 'DBManager.php';

$db = new DBMAnager();
//Datos
$fecha = $_POST["fecha"];
$tipo_estudio = $_POST["tipo_estudio"];
$observaciones = $_POST["observaciones"];

//Archivo
$archivo = $_FILES['archivo_pdf']['name'];
$temporal = $_FILES['archivo_pdf']['tmp_name'];
$error = $_FILES['archivo_pdf']['error'];
$tamaño = $_FILES['archivo_pdf']['size']; //bytes
$tipo_archivo = $_FILES['archivo_pdf']['type'];
$limite = 50000; //50000KB = 50MB
$clave = 1;


if ($tipo_archivo == "application/pdf" && $tamaño <= $limite * 1024) {
    $ruta = '../archivos/' . $clave . '/' . $archivo;
    if (!file_exists('../archivos/' . $clave)) {
        mkdir('../archivos/' . $clave);
    }
    if (!file_exists($ruta)) {
        $resultado = move_uploaded_file($temporal, $ruta);
        if ($resultado) {
            $db->addAnalisis($fecha, $tipo_estudio, $observaciones, $archivo, $clave);
        } else {
            echo "Error al subir el archivo: " . $error;
        }
    }
} else {
    echo "ERROR: Archivo pesado o no permitido: " . $tamaño . " KB";
}

// $imagen = $_POST["imagen"];