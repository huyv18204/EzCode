<?php

$host = 'localhost';
$port = '80';
$username = 'root';
$dbname = 'ezcode';
$password = '';

try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $PDOException) {
    echo "Kết nối thất bại" . $PDOException->getMessage();
    die();
}
