<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
        return $sesion = true;
    }else{
        return $sesion = false;
    }

?>