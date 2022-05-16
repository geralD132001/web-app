<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
} else {
    if ($_SESSION["usuario"] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php

    $url = "http://" . $_SERVER['HTTP_HOST'] . "/web-app"
    ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php">inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/seccion/productos.php">Libros</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/seccion/cerrar.php">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="row">