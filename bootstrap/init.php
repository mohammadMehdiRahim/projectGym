<?php
session_start();
include "C:/xampp/htdocs/AirSport/bootstrap/constants.php";
include ROOT_PATH . "bootstrap/config.php";
include ROOT_PATH . "vendor/autoload.php";
include ROOT_PATH . "libs/helpers.php";

try {
    $pdo = new PDO("mysql:dbname=$db;host=$host;charset=utf8mb4", $username, $password);
} catch (PDOException $pe) {
    diePage($pe);    
}

include ROOT_PATH . "libs/lib-auth.php";
include ROOT_PATH . "libs/lib-products.php";
?>