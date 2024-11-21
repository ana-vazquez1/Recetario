<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.html');
    exit;
}
$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT nombre, email FROM usuarios WHERE id = :id");
$query->bindParam(':id', $user_id, PDO::PARAM_INT);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Error: Usuario no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookify Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="manifest" href="manifest.json">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="inicio.php">
                    <img src="img/Logo.png" alt="Cookify Logo" width="100" height="auto"
                        class="d-inline-block align-text-top">
                </a>

                <!-- Botón de colapso -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menú -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="favoritos.html">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="populares.html">Populares</a>
                        </li>
                    </ul>

                    <!-- Barra de búsqueda -->
                    <form class="d-flex me-3" role="search" action="buscar.php" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Buscar recetas..."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fi fi-br-search"></i>
                        </button>
                    </form>

                    <!-- Botón de usuario -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle d-flex align-items-center" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/usuario.png" alt="Perfil" class="perfil-imagen me-2" width="30" height="30">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="perfil.php"><i class="fi fi-bs-circle-user"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="subir.html"><i class="fi fi-rr-file-upload"></i>Subir Recetas</a>
                            </li>
                            <li><a class="dropdown-item" href="index.html"><i class="fi fi-br-exit"></i>Cerrar
                                    Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container profile-container d-flex">
        <div class="profile-left col-lg-4 col-md-5 col-sm-12">
            <img src="img/usuario.png" alt="Foto de Perfil" class="img-fluid">
            <h2><?php echo htmlspecialchars($usuario['nombre']); ?></h2>
        </div>

        <div class="profile-right col-lg-8 col-md-7 col-sm-12">
            <h3>Perfil del usuario</h3>
            <div class="mb-3">
                <p><span class="info-label">Correo Electrónico:</span> <?php echo htmlspecialchars($usuario['email']); ?></p>
            </div>
            <div class="mb-3">
                 <p><span class="info-label">Contraseña:</span> **********</p> <!--La contraseña se mostrara con 10 asteriscos -->
            </div>
            <div class="edit-profile">
                <a href="editar.html">Editar Perfil</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>