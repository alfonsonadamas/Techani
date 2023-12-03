<?php
    

    require_once 'DBManager.php';
    require_once 'open.php';

    $db = new DBManager();

    $token = $db -> generarToken();
?>