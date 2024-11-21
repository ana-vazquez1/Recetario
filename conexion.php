<?php
$host = "localhost";
$dbname = "recetas";
$username = "root";
$port = "3307";
$password = "ana123";

try {
    $conn = new PDO("mysql:host=$host;port=3307;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
