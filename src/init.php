<?php
require_once __DIR__ . '/autoload.php';
require_once __DIR__ . "/../config.php";
// On démarre la session :
session_start();



if (DB_INITIALIZED == FALSE) {
    $db = new src\Models\Database();
    echo $db->initializeDB();
}

