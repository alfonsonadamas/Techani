<?php

    require 'DBManager.php';

    $db = new DBManager();

    $idComida = $_POST['comida'];
    $idRegistro = $_POST['registro'];

    $cadena = "INSERT INTO `registrodiario_alimentos` (`Registro_diario_idRegistro_diario`, `Catalogo_alimentos_Clave_alimento`) VALUES";

    for ($i=0; $i < count($idComida); $i++) { 
        $cadena .= "('".$idRegistro."','".$idComida[$i]."'),"; 
    }

    $cadenaFinal = substr($cadena, 0, -1);
    $cadenaFinal .= ";";

    $db->addRegistrAlimentoo($cadenaFinal);

    header('Location: public/citas.php');
?>