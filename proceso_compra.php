<?php
session_start();




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registro</title>
    <meta name="title" content="Adall Company">
    <meta name="description" content="Página que se dedica a la venta de autos ">
    <meta name="keywords" content="Autos, Venta">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">


    <!-- Favicons -->
    <link href="assets/img/ADALL Logo2.png" rel="icon">
    <link href="assets/img/ADALL Logo2.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-secondary">


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/ADALL_LOGO.png" alt="" class="img-fluid">
          
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/ADALL_CO" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100095344544735&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/adall.co/" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
        <img src="">
        <h6 class="text-light text-center">Usuario:</h6>    
        <h6 class="text-light text-center"><?php if ($_SESSION) { echo $_SESSION['email']; } else { echo 'Invitado'; } ?></h6>
      </div>

      <nav id="navbar" class="nav-menu navbar ">
        <ul>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="aboutUs.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>¿Quiénes Somos?</span></a></li>
          <li><a href="servicios.php" class="nav-link scrollto"><i class="bx bx-archive-in"></i> <span>Servicios</span></a></li>
          <li><a href="autos.php" class="nav-link scrollto"><i class="bx bx-car"></i> <span>Autos</span></a></li>
          <li><a href="carrito.php" class="nav-link scrollto"><i class="bx bx-cart-add"></i> <span>Carrito</span></a></li>
          <li><a href="mailchimp.php" class="nav-link scrollto"><i class="bx bx-git-pull-request"></i> <span>Suscribirse</span></a></li>
          <li><a href="contact.php" class="nav-link scrollto"><i class="bx bxs-contact"></i> <span>Contacto</span></a></li>
          <li><a href="faq.php" class="nav-link scrollto"><i class="bx bx-question-mark"></i> <span>FAQ´s</span></a></li>

          

          <?php if (!isset($_SESSION['email'])) { ?>
            <li>--------------------------------------------------------------</li>
            <li><a class="text-light"><span>¿Tienes Cuenta?</span></a></li>
            <li><a href="login.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Login</span></a></li>
            <li>-------------------------------</li>
            <li><a class="text-light"><span>¿No tienes Cuenta aún?</span></a></li>
            <li><a href="registro.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Registro</span></a></li>
          <?php } else { ?>
            <?php if ($_SESSION['privilegios'] == 1) { ?>
              <li class>--------------------------------------------------------------</li>
              <li><a href="../Proyecto_AW_2023/admin/index.php" class="nav-link scrollto"><i class="bx bxs-user-account"></i> <span>Modo Administrador</span></a></li>
              <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-log-out"></i> <span>Salir</span></a></li>
            <?php } else { ?>
              <li>--------------------------------------------------------------</li>
              <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-log-out"></i> <span>Salir</span></a></li>
              <?php } ?>
            
          <?php } ?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->



    <main id="main">
        <br>
        <br>

        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-center text-theme">Datos del envío</h3>
                                        </div>


                                        <p class="text-muted mt-2 mb-5">Ingresa tus datos personales para poder los autos que hayas encargado.</p>

                                        <form action="ticket.php" method="post">
                                            <div class="form-group">
                                                <label for="nombre">Nombre completo</label>
                                                <input type="text" class="form-control" name="nombreP" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pais">País</label>
                                                <input type="text" class="form-control" name="paisP" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ciudad">Ciudad</label>
                                                <input type="text" class="form-control" name="ciudadP" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estado">Estado/Provincia</label>
                                                <input type="text" class="form-control" name="estadoP" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cp">Código Postal</label>
                                                <input type="number" class="form-control" name="cp1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Teléfono</label>
                                                <input type="tel" class="form-control" name="telefonoP" required>
                                            </div>


                                            <br>
                                            <br>
                                            <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-center text-theme">Método de pago</h3>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Nombre del titular de la tarjeta</label>
                                                <input type="text" class="form-control" name="noT" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="no">Número de tarjeta</label>
                                                <input type="number" class="form-control" name="numberT" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cvv">Ingresa el CVV</label>
                                                <input type="text" class="form-control" name="cvv" minlength="3" maxlength="3" required>
                                            </div>


                                            <button type="submit" class="btn btn-theme">Pagar</button>
                                            <br>
                                            <a href="carrito.php" class="btn btn-danger">Cancelar</a>


                                    
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-blockTi rounded-right">
                                        <div class="overlay6 rounded-right"></div>
                                        <div class="account-testimonial6">
                                            <h4 class="text-white mb-4">¡Ya casi es tuyo! Estás a un solo paso de poder disfrutar de estos maravillosos autos.</h4>
                                        </div>
                                    </div>
                                </div>


                            </div>
 

                            
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->



                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>






    </main>




    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>

</html>