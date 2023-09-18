<?php

$db_host = "localhost";
$db_name = "todo";
$db_user = "root";
$db_password = "root";

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection error: {$e->getMessage()}");
}
