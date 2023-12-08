<?php

require 'DBManager.php';

try{
    $db = new DBMAnager();
    //Datos
    $fecha = htmlspecialchars($_POST["fecha"],ENT_QUOTES,'UTF-8');
    $tipo_estudio = htmlspecialchars($_POST["tipo_estudio"],ENT_QUOTES,'UTF-8');
    $observaciones = htmlspecialchars($_POST["observaciones"],ENT_QUOTES,'UTF-8');
    
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
        if (!file_exists("../archivos/")) {
            mkdir('../archivos/');
        }
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
}catch(Exception $e){
    echo "Error:".$e->getMessage();
}


// $imagen = $_POST["imagen"];
