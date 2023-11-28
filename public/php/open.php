<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    if(isset($_SESSION['usuario'])){
        return $sesion = true;
    }else{
        return $sesion = false;
    }

?>