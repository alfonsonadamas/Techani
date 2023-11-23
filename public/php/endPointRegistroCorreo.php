<?php

    require 'DBManager.php';

    $db = new DBManager();

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contrasenia'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];

    $usuario = trim($usuario);
    $correo = trim($correo);
    $contraseña = trim($contraseña);


    $db->registrarCorreo($nombre, $apellidoP, $apellidoM, $usuario, $contraseña, $telefono, $correo);


    
?>