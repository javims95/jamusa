<?php
session_start();
include "../php/conexion.php";

if (!isset($_SESSION['datos_login'])) {
    header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];

$blog = $conexion->query("SELECT * FROM blog ORDER BY id DESC") or die($conexion->error);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("./layouts/header.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Blogs publicados</h1>
                        </div><!-- /.col -->                        
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <table class="table tablaAlinear">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Título</th>
                                <th>Resumen</th>
                                <th>Fecha</th>
                                <th>Categoría</th>
                                <th>Meta título</th>
                                <th>Meta descripción</th>
                                <th>Keywords</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($fila = mysqli_fetch_array($blog)) {
                            ?>
                                <tr>
                                    <td>#<?php echo $fila['id']; ?></td>
                                    <td><img src="../img/blog/<?php echo $fila['imagen']; ?>" width="100px" height="70px" alt=""></td>
                                    <td><?php echo $fila['titulo']; ?></td>
                                    <td><?php echo $fila['resumen']; ?></td>
                                    <td><?php echo $fila['fecha']; ?></td>
                                    <td><?php echo $fila['categoria']; ?></td>
                                    <td><?php echo $fila['meta_titulo']; ?></td>
                                    <td><?php echo $fila['meta_descripcion']; ?></td>
                                    <td><?php echo $fila['keywords']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /.container-fluid -->
            </section>

            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.js"></script>

</body>

</html>