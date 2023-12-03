<?php
    session_start();

    require 'DBManager.php';

    $db = new DBManager();

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
      if(!isset($_SESSION['csrf_token']) || $_SESSION['csrf_token'] != $_POST['csrf_token']){
          echo "Error en el token";
      }else{
         $db ->login($correo, $contrasena);
          unset($_SESSION['csrf_token']);
      }

    
    

?>