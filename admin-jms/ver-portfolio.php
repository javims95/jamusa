<?php
session_start();
include "../php/conexion.php";

if (!isset($_SESSION['datos_login'])) {
    header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];

$portfolio = $conexion->query("SELECT * FROM portfolio ORDER BY id DESC") or die($conexion->error);


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
                            <h1 class="m-0">Blog</h1>
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
                                <th>Enlace</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Fecha</th>
                                <th>Descripción (alt)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($fila = mysqli_fetch_array($portfolio)) {
                            ?>
                                <tr>
                                    <td>#<?php echo $fila['id']; ?></td>
                                    <td><img src="../img/portfolio/<?php echo $fila['imagen']; ?>" width="100px" height="70px" alt=""></td>
                                    <td><a href="<?php echo $fila['enlace']; ?>"><?php echo $fila['enlace']; ?></a></td>
                                    <td><?php echo $fila['titulo']; ?></td>
                                    <td><?php echo $fila['categoria']; ?></td>
                                    <td><?php echo $fila['fecha']; ?></td>
                                    <td><?php echo $fila['alt']; ?></td>
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