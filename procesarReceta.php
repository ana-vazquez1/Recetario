<?php
require 'conexion.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $tiempo = $_POST['tiempo'];
        $porciones = $_POST['porciones'];
        $categoria = $_POST['categoria'];
        $ingredientes = $_POST['ingredientes'];
        $preparacion = $_POST['preparacion'];
        $presentacion = $_POST['presentacion'];
        $tips = $_POST['tips'];

        $foto_destino = null;
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
            $foto = $_FILES['foto'];
            $foto_nombre = time() . "_" . basename($foto['name']);
            $foto_tmp = $foto['tmp_name'];
            $foto_destino = 'uploads/' . $foto_nombre;

            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            if (!move_uploaded_file($foto_tmp, $foto_destino)) {
                echo "Error al mover la imagen al destino.";
                exit;
            }
        }

        $sql = "INSERT INTO recetas (titulo, descripcion, tiempo, porciones, categoria, ingredientes, preparacion, presentacion, tips, foto) 
                VALUES (:titulo, :descripcion, :tiempo, :porciones, :categoria, :ingredientes, :preparacion, :presentacion, :tips, :foto)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':tiempo', $tiempo);
        $stmt->bindParam(':porciones', $porciones);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':ingredientes', $ingredientes);
        $stmt->bindParam(':preparacion', $preparacion);
        $stmt->bindParam(':presentacion', $presentacion);
        $stmt->bindParam(':tips', $tips);
        $stmt->bindParam(':foto', $foto_destino);

        if ($stmt->execute()) {
            echo "Receta guardada con éxito.";
        } else {
            echo "Error al guardar la receta.";
        }
    } else {
        echo "No se recibieron datos del formulario.";
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>
