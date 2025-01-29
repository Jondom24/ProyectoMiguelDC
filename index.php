<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    </style>
</head>
    <header>
        Institucion Educativa Miguel de Cervantes
    </header>
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="IniciarSesion.php" method="POST">
        <h1>INICIAR SESION</h1> 
        <hr>
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>

            </p>
            <?php
            }
            ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de Usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Usuario</label>
        <input type="text" name="Clave" placeholder="Clave">
        <hr>
        <div class="contenedor">
        <button>Iniciar Sesion</button>
        </div>
    </form
</body>
</html>