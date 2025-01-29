<?php

    $host = "localhost";
    $User = "root";
    $pass = "";

    $db = "colegiomigueldecervantes";

    $conexion = mysqli_connect($host, $User , $pass, $db);

    if (!$con) {
     echo "Conexion fallida";
    }