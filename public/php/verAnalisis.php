<?php

require 'DBManager.php';

$db = new DBManager();
$clave = 1;

$data = $db->verAnalisis($clave);
