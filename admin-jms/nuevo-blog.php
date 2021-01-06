<?php
session_start();
include "../php/conexion.php";

if (!isset($_SESSION['datos_login'])) {
    header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo post para el Blog</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("./layouts/header.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Nuevo post en el blog</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="../php/insertar-blog.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body" style="background-color: #F1F1F1;">
                                        <div class="row">
                                            <!-- Columna grande izquierda -->
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Título</label>
                                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Configurar la url de seguimiento de GLS o ASM en Prestashop" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="summernote" name="editordata"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <textarea hidden="hidden" id="content" name="content"></textarea>
                                                </div>
                                                <br>
                                                <h1 class="h3 text-center">SEO</h1>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="meta_titulo">Título SEO</label>
                                                    <input id="meta_titulo" name="meta_titulo" type="text" class="form-control" maxlength="70" placeholder="Jamusa - ¡El desarrollador de tu página web barata!">
                                                </div>
                                                <div class="form-group">
                                                    <label for="meta_descripcion">Meta descripción</label>
                                                    <textarea id="meta_descripcion" name="meta_descripcion" type="text" class="form-control" maxlength="155" placeholder="¿Estás intentado Configurar la URL de seguimiento de GLS o ASM en Prestashop? Nuestro equipo de profesionales lo hará por ti. Tenemos una tarifa muy económica, y quedaría configurado y terminado en cuestión de una hora."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keywords">Keywords</label>
                                                    <input id="keywords" name="keywords" type="text" class="form-control" placeholder="Wordpress, Prestashop, Página web económica">
                                                </div>
                                            </div>
                                            <!-- Columna pequeña derecha -->
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label>Fecha y hora</label>
                                                    <input class="form-control" type="datetime-local" id="fecha" name="fecha">
                                                </div>
                                                <div class="form-group">
                                                    <label>Categoría</label>
                                                    <select id="categoria" name="categoria[]" multiple class="form-control" required>
                                                        <option>Wordpress</option>
                                                        <option>Prestashop</option>
                                                        <option>CSS</option>
                                                        <option>PHP</option>
                                                        <option>Javascript</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="imagen">Imagen</label>
                                                    <input name="imagen" type="file" class="form-control-file" id="imagen">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nombre_img">Nombre de la imagen</label>
                                                    <input name="nombre_img" type="text" class="form-control" id="nombre_img" placeholder="Imagen.jpg">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button id="get_code" type="submit" class="btn btn-info btn-block">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="plugins/moment/moment.min.js"></script>
            <script src="plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus DatePicker  -->
            <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="dist/js/pages/dashboard.js"></script>

            <script>
                $('#summernote').summernote({
                    placeholder: 'Hello Bootstrap 4',
                    tabsize: 2,
                    height: 300,
                });
                $('#summernote').summernote('fontName', 'Montserrat');



                $("#get_code").click(function() {
                    var code = $('#summernote').summernote('code');
                    $("#content").val(code);
                });
            </script>

</body>

</html>