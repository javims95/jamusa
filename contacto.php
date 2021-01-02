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

    <style>
        .ico-circle {
            height: 80px;
            width: 80px;
        }

        i.ion-ios-speedometer {
            font-size: 3rem;
        }
    </style>

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
                    <h2 class="intro-title mt-5">Algunas de nuestras páginas <br>web económicas en España </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <section class="contact">
        <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="contact-box mb-4">
                    <i class="ion-ios-location contact-ico"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
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