<?php

require 'DBManager.php';

try{
    $db = new DBManager();
    $clave = 1;
    $id =htmlspecialchars($_POST["id"],ENT_QUOTES,'UTF-8');
    $archivo =htmlspecialchars($_POST["nombre"],ENT_QUOTES,'UTF-8');
    $ruta = '../archivos/' . $clave . '/' . $archivo;
    
    if (file_exists($ruta)) {
        unlink($ruta);
    } else {
        echo "El archivo no existe o no se pudo eliminar";
    }

    $data = $db->borrarAnalisis($id, $clave);

}catch(Exception $e){
    echo "Error:".$e->getMessage();
}