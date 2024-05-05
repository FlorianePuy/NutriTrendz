<?php
try {
    $pdo = new PDO("mysql:dbname=".DB_NAME.";host=".DB_SERVER_NAME.";charset=utf8mb4",DB_USER,DB_PASSWORD);
}catch (Exception $exception){
    die('Erreur : '. $exception->getMessage());
}