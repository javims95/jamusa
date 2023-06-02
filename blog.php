<?php include "./php/conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Jamusa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" media="screen" href="css/style.css">

    <!-- =======================================================
    Theme Name: Jamusa
    Theme URL: https://jamusa.es
    Author: Javier Muñoz
  ======================================================= -->
</head>

<body id="page-top">

    <?php include './layouts/header.php' ?>


    <!-- Cabecera  -->
    <div class="intro intro-single route mb-4">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mt-5">Blog </h2>
                    <p class="intro-subtitle fw-600">Aquí encontrarás <span class="text-slider-items">trucos, tutoriales, consejos, solución de problemas, y mucho mas !!</span><strong class="text-slider"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">

                <?php
                $portfolio = $conexion->query("SELECT * FROM blog ORDER BY id DESC") or die($conexion->error);

                // Generar el HTML dinámicamente
                if ($portfolio->num_rows > 0) {
                    while ($row = $portfolio->fetch_assoc()) {
                ?>
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-img">
                                    <a href="/blog-single.php?slug=<?php echo $row['slug'];?>"><img src="./img/blog/<?php echo $row['imagen']; ?>" alt="" class="img-fluid"></a>
                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">
                                        <div class="card-category">
                                            <h6 class="category"><?php echo $row['categoria']; ?></h6>
                                        </div>
                                    </div>
                                    <h3 class="card-title"><a href="/blog-single.php"><?php echo $row['titulo']; ?></a></h3>
                                    <p class="card-description">
                                        <?php echo $row['resumen']; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="post-author">
                                        <a href="#">
                                            <img src="img/testimonial-2.jpg" alt="Imagen del usuario que redactó el post" class="avatar rounded-circle">
                                            <span class="author">Javier Muñoz</span>
                                        </a>
                                    </div>
                                    <div class="post-date">
                                        <span class="ion-ios-clock-outline"></span> <?php echo $row['fecha']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>




    <?php include './layouts/footer.php' ?>


    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/counterup/jquery.counterup.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Texto que se escribe solo  -->
    <script src="lib/typed/typed.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>


</body>

</html>