<?php
require 'DBManager.php';// Reemplaza con la ubicación y nombre correctos de tu archivo que contiene la clase y la función

class EliminarCitas{

function EliminarCitaEndPoint($id){

echo("Entro");

$tuObjeto = new DBManager(); // Reemplaza con el nombre de tu clase

// Llamar a la función editarCitas con los datos recibidos
$resultado = $tuObjeto->elimiarCitas($id);

header('Location: ../citas.php');
}

}


?>