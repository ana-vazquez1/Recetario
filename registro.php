<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $mensaje = '<div class="alert alert-danger" role="alert">El correo ya está registrado. Intenta con otro.</div>';
    } else {
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $mensaje = '<div class="alert alert-success" role="alert">¡Registro exitoso! Ahora puedes iniciar sesión.</div>';
        } else {
            $mensaje = '<div class="alert alert-danger" role="alert">Hubo un error al registrar los datos. Intenta de nuevo.</div>';
        }
    }
}
?>
