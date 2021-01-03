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
    <link href="lib/fancybox/css/jquery.fancybox.min.css" rel="stylesheet">

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
                    <h2 class="intro-title mt-5">Contacta con Nosotros</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-box mb-4">
                        <i class="ion-ios-location contact-ico"></i>
                        <h3>Dirección</h3>
                        <p>Calle Lope de Rueda 79, Málaga, 29190</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="contact-box mb-4">
                        <i class="ion-email contact-ico"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@jamusa.es">info@jamusa.es</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="contact-box  mb-4">
                        <i class="ion-android-call contact-ico"></i>
                        <h3>Llámanos</h3>
                        <p>633 822 820</p>
                    </div>
                </div>

            </div>

            <div class="row mb-5">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12789.197774355809!2d-4.4816892!3d36.7393829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xf98f74a3657ea518!2sWebs Económicas - Jamusa!5e0!3m2!1ses!2ses!4v1609664276893!5m2!1ses!2ses" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                <form action="" method="post" role="form" class="mt-4">
                  <div class="form-group mb-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" id="mail" placeholder="Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" id="asunto" placeholder="Asunto" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                  </div>
                  <div class="form-check mt-1">
                    <input type="checkbox" class="form-check-input" id="privacidad" required>
                    <label class="form-check-label" for="exampleCheck1">He leido y acepto la <a href="#">política de privacidad</a></label>
                  </div>
                  <div class="col-md-12 mt-3">
                    <button type="submit" class="button btn btn-primary btn-lg">Enviar mensaje</button>
                  </div>
                </form>
                </div>

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
    <script src="lib/fancybox/js/jquery.fancybox.min.js"></script>
    <!-- Galería de fotos (se puede eliminar) -->
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Texto que se escribe solo  -->
    <script src="lib/typed/typed.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('a.fancybox').fancybox();

        });
    </script>


</body>

</html>