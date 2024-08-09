<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contacto</title>
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

<body>

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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>En esta sección podrás encontrar y enviar información a nuestra empresa para saber contactarnos</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Colonia Centro,</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>adall@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Télefono:</h4>
                <p>+52 417 554 5554</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435.60620470089435!2d-100.7199281243517!3d20.03327523837692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cd7f64455d643%3A0xbdbbc7d5cb34388f!2sLa%20Dos%2096%20Coffee%20House!5e1!3m2!1ses!2sus!4v1687748311980!5m2!1ses!2sus" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



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