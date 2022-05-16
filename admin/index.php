<?php

session_start();
if ($_POST) {
    if (($_POST['usuario'] == "gerald13") && ($_POST['contrasenia'] == "sistema")) {
        $_SESSION["usuario"] = "ok";
        $_SESSION['nombreUsuario'] = "gerald13";
        header("Location: inicio.php");
    } else {
        $mensaje = "Error: El usuario o contraseña con incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del sitio web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>
                        <form method="POST">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Escribe tu usuario">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
                            </div>

                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </form>


                    </div>

                </div>

            </div>
        </div>

</body>

</html>