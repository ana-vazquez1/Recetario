<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
$user_name = htmlspecialchars($_SESSION['user_name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookify Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/inicio.css">
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
                    <form class="d-flex me-3" role="search" action="#" method="GET">
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

    <section class="categories-section container py-5">
        <p id="saludo" class="saludo-text"></p>
        <div class="categories-container">
            <div class="category-item">
                <a href="#">
                    <div class="category-img">
                        <img src="img/categorias/pollo.png" alt="Pollo">
                    </div>
                    <h3>Pollo</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="molida.php">
                    <div class="category-img">
                        <img src="img/categorias/molida.png" alt="Carne molida">
                    </div>
                    <h3>Carne molida</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="postres.php">
                    <div class="category-img">
                        <img src="img/categorias/postres.png" alt="Postres">
                    </div>
                    <h3>Postres</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="atun.php">
                    <div class="category-img">
                        <img src="img/categorias/atun.png" alt="Atún">
                    </div>
                    <h3>Atún</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="pastas.php">
                    <div class="category-img">
                        <img src="img/categorias/pastas.png" alt="Pastas">
                    </div>
                    <h3>Pastas</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="desayunos.php">
                    <div class="category-img">
                        <img src="img/categorias/desayunos.png" alt="Desayunos">
                    </div>
                    <h3>Desayunos</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="comidas.php">
                    <div class="category-img">
                        <img src="img/categorias/comidas.png" alt="Comidas">
                    </div>
                    <h3>Comidas</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="cenas.php">
                    <div class="category-img">
                        <img src="img/categorias/cenas.png" alt="Cenas">
                    </div>
                    <h3>Cenas</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="verano.php">
                    <div class="category-img">
                        <img src="img/categorias/verano.png" alt="Verano">
                    </div>
                    <h3>Verano</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="navidad.php">
                    <div class="category-img">
                        <img src="img/categorias/navidad.png" alt="navidad">
                    </div>
                    <h3>Navidad</h3>
                </a>
            </div>

            <div class="category-item">
                <a href="clases.png">
                    <div class="category-img">
                        <img src="img/categorias/clases.png" alt="clases">
                    </div>
                    <h3>Regreso a clases</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Carrusel -->

    <div class="carousel-container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/populares/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/populares/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/populares/4.jpg" class="d-block w-100" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Contenido -->
    <div class="contenido-recetas">
        <p class="text-body-secondary"> Recetas para ti.</p>

        <div class="contenedor-recetas">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/categorias/atun.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tinga de Atún</h5>
                            <p class="card-text">2 Cucharadas de Aceite de maíz
                                1 Cebolla, fileteada
                                3 Jitomates, cortados en cuartos
                                2 Chiles chipotle, adobados
                                1 Cubo de Concentrado de Tomate con Pollo CONSOMATE®
                                2 Latas de atún en agua, escurrido (140 g c/u)
                                3 paquetes de tostadas de maíz azul horneadas (18 g c/u)
                                3 Hojas de lechuga italiana desinfectada y fileteada
                                1 Envase de Media Crema NESTLÉ® (190 g), refrigerada
                                1/2 Paquete de queso panela, rallado</p>
                            <a href="preparación.html" class="text-decoration-none">Ver preparación <i class="fi fi-rr-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/anima.js"></script>
</body>

</html>

