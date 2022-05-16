<?php include("template/header.php"); ?>

<? include("admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros   = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach ($listaLibros as $libro) { ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="https://static2.abc.es/media/play/2020/09/29/avatar-kE4H--1024x512@abc.jpeg" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
            </div>
        </div>

    </div>

<?php } ?>

<?php include("template/footer.php"); ?>