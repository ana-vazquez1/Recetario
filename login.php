<?php
require 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre'];

            header("Location: inicio.php");
            exit();
        } else {
            echo "Correo o contraseña incorrectos.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
