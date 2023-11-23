<?php
    require("./DBManager.php");
    $db = new DBManager();

    $idRegistro = $_POST["id"];
    $db->eliminarRegistro($idRegistro);

?>