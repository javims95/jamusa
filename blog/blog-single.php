<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>**meta-titulo**</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="**meta-keywords**">
    <meta name="description" content="**meta-descripcion**">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" media="screen" href="../css/style.css">

    <!-- =======================================================
    Theme Name: Jamusa
    Theme URL: https://jamusa.es
    Author: Javier Muñoz
  ======================================================= -->
</head>

<body id="page-top">

    <?php include '../layouts/header2.php' ?>


    <!-- Cabecera  -->
    <div class="intro intro-single route mb-4 bg-image" style="background: url(../img/blog/cabecera-blog.svg); background-size: 100% 100%;">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!-- <h3 class="intro-title ff-rubik mb-4">Blog-Single</h3> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cabecera -->


    <!--/ Section Blog-Single Star /-->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="img/post-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title">**titulo**</h1>
                            <ul>
                                <li>
                                    <span class="ion-ios-person"></span>
                                    <a href="#">**fecha**</a>
                                </li>
                                <li>
                                    <span class="ion-pricetag"></span>
                                    <a href="#">**categoría**</a>
                                </li>
                                <li>
                                    <span class="ion-chatbox"></span>
                                    <a href="#">**comentarios**</a>
                                </li>
                            </ul>
                        </div>
                        <div id="success"></div>
                        <div class="article-content">
                            **Contenido**
                        </div>
                    </div>

                    <?php
                    include '../php/conexion.php';
                    include '../php/functions.php';

                    $cant_coments = $conexion->query('SELECT COUNT(*) FROM comentarios') or die($conexion->error);
                    $total_coments = mysqli_fetch_row($cant_coments);

                    $comentarios = $conexion->query("SELECT * FROM comentarios ORDER BY id DESC") or die($conexion->error);
                    ?>
                    <div class="box-comments">
                        <div class="title-box-2 mb-4">
                            <h4 class="title-comments title-left">Comentarios (<?php echo $total_coments[0] ?>)</h4>
                        </div>
                        <ul class="list-comments">
                            <?php
                            while ($com = mysqli_fetch_array($comentarios)) {
                                
                                $fecha = $com['fecha'];
                            ?>
                                <li>
                                    <div class="comment-avatar">
                                        <span class="ion-android-contact fsz-4 color-primary"></span>
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="comment-author"><?php echo $com['nombre']; ?></h4>
                                        <span><?php echo fechaEsp($fecha);  ?></span>
                                        <p><?php echo $com['comentario']; ?></p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="form-comments">
                        <div class="title-box-2 mb-4">
                            <h3 class="title-left">
                                Escribe un comentario
                            </h3>
                        </div>
                        <form action="../php/insertar-comentario.php" method="POST" class="form-mf">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input id="nombre" name="nombre" type="text" class="form-control input-mf" placeholder="Nombre *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input id="email" name="email" type="email" class="form-control input-mf" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea id="comentario" name="comentario" class="form-control input-mf" placeholder="Comentario *" cols="45" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="button btn btn-primary btn-lg">Publicar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-sidebar sidebar-search">
                        <h5 class="sidebar-title">Buscar</h5>
                        <div class="sidebar-content">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary btn-search" type="button">
                                            <span class="ion-android-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-sidebar">
                        <h5 class="sidebar-title">Post recientes</h5>
                        <div class="sidebar-content">
                            <ul class="list-sidebar">
                                <li>
                                    <a href="#">Atque placeat maiores.</a>
                                </li>
                                <li>
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                </li>
                                <li>
                                    <a href="#">Nam quo autem exercitationem.</a>
                                </li>
                                <li>
                                    <a href="#">Atque placeat maiores nam quo autem</a>
                                </li>
                                <li>
                                    <a href="#">Nam quo autem exercitationem.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-sidebar widget-tags">
                        <h5 class="sidebar-title">Etiquetas</h5>
                        <div class="sidebar-content">
                            <ul>
                                <li>
                                    <a href="#">Web.</a>
                                </li>
                                <li>
                                    <a href="#">Design.</a>
                                </li>
                                <li>
                                    <a href="#">Travel.</a>
                                </li>
                                <li>
                                    <a href="#">Photoshop</a>
                                </li>
                                <li>
                                    <a href="#">Corel Draw</a>
                                </li>
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Blog-Single End /-->


    <?php include '../layouts/footer.php' ?>


    <!-- JavaScript Libraries -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/counterup/jquery.waypoints.min.js"></script>
    <script src="../lib/counterup/jquery.counterup.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <!-- Texto que se escribe solo  -->
    <script src="../lib/typed/typed.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="../js/main.js"></script>


</body>

</html>