<?php

require 'DBManager.php';

$db = new DBManager();
$clave = 1;
$id = $_POST["id"];
$archivo = $_POST["nombre"];
$ruta = '../archivos/' . $clave . '/' . $archivo;
if (file_exists($ruta)) {
    unlink($ruta);
} else {
    echo "El archivo no existe o no se pudo eliminar";
}

$data = $db->borrarAnalisis($id, $clave);
