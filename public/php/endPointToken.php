<?php
    session_start();

    require_once 'DBManager.php';

    $db = new DBManager();

    $token = $db -> generarToken();
?>