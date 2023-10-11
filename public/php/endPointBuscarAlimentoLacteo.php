<?php

    

    include 'DBManager.php';
    $db = new DBManager();
    $dataProte = $db->buscarAlimentosLacteo();
    $alimentos = array();
    
    while ($row = $dataProte->fetch_assoc()) {
        $alimentos[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($alimentos);
    

?>