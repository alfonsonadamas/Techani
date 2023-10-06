<?php
    session_start();

    require 'DBManager.php';

    $db = new DBManager();

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $db ->login($correo, $contrasena);
    

?>