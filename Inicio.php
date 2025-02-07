<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: IniciarSesion.php");
    exit();
}

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "institucion");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Publicar un anuncio
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $usuario = $_SESSION['usuario'];
    
    $sql = "INSERT INTO anuncios (titulo, descripcion, usuario) VALUES ('$titulo', '$descripcion', '$usuario')";
    $conexion->query($sql);
}

// Obtener anuncios
$resultado = $conexion->query("SELECT * FROM anuncios ORDER BY fecha DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablón de Anuncios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Institución Educativa Miguel de Cervantes</h1>
    </header>
    
    <div class="container mt-5">
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> | <a href="logout.php">Cerrar sesión</a></h1>
        <h2>Tablón de Anuncios</h2>
        
        <form method="POST" class="mb-3">
            <input type="text" name="titulo" placeholder="Título" class="form-control mb-2" required>
            <textarea name="descripcion" placeholder="Descripción" class="form-control mb-2" required></textarea>
            <button type="submit" class="btn btn-primary">Publicar Anuncio</button>
        </form>

        <div class="mt-4">
            <h3>Anuncios Recientes</h3>
            <?php while ($anuncio = $resultado->fetch_assoc()) { ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($anuncio['titulo']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($anuncio['descripcion']); ?></p>
                        <small class="text-muted">Publicado por <?php echo htmlspecialchars($anuncio['usuario']); ?> el <?php echo $anuncio['fecha']; ?></small>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
