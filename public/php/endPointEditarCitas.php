<?php
require 'DBManager.php';// Reemplaza con la ubicación y nombre correctos de tu archivo que contiene la clase y la función

// Obtener los datos del formulario o solicitud
$id = $_POST['idCitas'];
$fechaCita = $_POST['Fecha'];
$horaCita = $_POST['Hora'];
$tipoCita = $_POST['Tipo_Cita'];
$lugar = $_POST['Lugar'];
$observaciones = $_POST['Observaciones'];

// Instanciar la clase que contiene la función editarCitas
$tuObjeto = new DBManager(); // Reemplaza con el nombre de tu clase

// Llamar a la función editarCitas con los datos recibidos
$resultado = $tuObjeto->editarCitas($id, $fechaCita, $horaCita, $tipoCita, $lugar, $observaciones);

if ($resultado) {
    // La actualización fue exitosa
    echo json_encode(array("mensaje" => "Actualización exitosa"));
} else {
    // Hubo un error en la actualización
    echo json_encode(array("mensaje" => "Error al actualizar"));
}

header('Location: ../citas.php');

?>
