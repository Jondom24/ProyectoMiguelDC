<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        header {
            background-color:rgba(0, 64, 128, 0.87); 
            color: white;
            text-align: center;
            padding: 22px;
            font-size: 22px;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px; 
            box-shadow: 0px 7px 8px rgba(0, 0, 0, 0.3); 
        }
        .error {
            color: red;
            font-weight: bold;
        }
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        }
        .contenedor {
            text-align: center;
        }
        button {
            padding: 10px 15px;
            background: rgba(0, 64, 128, 0.87);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: rgba(0, 50, 100, 0.87);
        }
    </style>
</head>
<body>
    <header>
        Institución Educativa Miguel de Cervantes
    </header>

    <form action="IniciarSesion.php" method="POST">
        <h1>INICIAR SESIÓN</h1> 
        <hr>
        <?php if (isset($_GET['error'])): ?>
            <p class="error"><?= htmlspecialchars($_GET['error']) ?></p>
        <?php endif; ?>
        <hr>
        
        <label><i class="fa-solid fa-user"></i> Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de Usuario" required>

        <label><i class="fa-solid fa-unlock"></i> Clave</label>
        <input type="password" name="Clave" placeholder="Clave" required>

        <hr>
        <div class="contenedor">
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</body>
</html>
