<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Servicios</title>
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

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>A continuación, te mostraremos algunos de nustros servicios que ofrecemos en la empresa.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Venta de vehículos autónomos</h3>
            <div class="resume-item pb-0">
              <h4>Angel Nuñez Ramos</h4>
              <h5>2023 - Presente</h5>
              <p><em>La venta de vehículos autónomos como servicio ofrece a los usuarios la posibilidad de disfrutar de los beneficios de la conducción autónoma sin tener que ser propietarios de un automóvil. Este modelo de negocio promete mayor comodidad, flexibilidad y eficiencia, y está impulsando la evolución de la industria del transporte hacia un futuro más conectado y sostenible.</em></p>
              <ul>
                <li>San calle, GTO</li>
                <li>+52 417 456-7891</li>
                <li>angel@gmail.com</li>
              </ul>
            </div>


            <h3 class="resume-title">Asesoramiento y orientación al cliente</h3>
            <div class="resume-item">
              <h4>Alan Hernandez</h4>
              <h5>2023 - Presente</h5>

              <p>Este servicio implica una interacción directa entre el cliente y un asesor capacitado o representante de la empresa, quien se encarga de escuchar y comprender las necesidades del cliente, proporcionar información relevante y ofrecer recomendaciones adecuadas. </p>
              <ul>
                <li>El moral</li>
                <li>+52 417 456-7891</li>
                <li>AlanHz@gmail.com</li>
              </ul>
            </div>

          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Servicio de mantenimiento y reparación</h3>
            <div class="resume-item">
              <h4>Luis Daniel Iram Portillo Vargas</h4>
              <h5>2023 - Presente</h5>
              <p><em>El servicio de mantenimiento puede incluir una variedad de tareas regulares, como cambios de aceite, revisión y ajuste de frenos, inspección de neumáticos, alineación de ruedas, revisión de sistemas eléctricos y electrónicos, entre otros. Estas actividades se realizan con el fin de prevenir problemas futuros, mantener el rendimiento óptimo del vehículo y prolongar su vida útil.</em></p>
              <ul>
                <li>Iramuco, GTO</li>
                <li>+52 417 456-7891</li>
                <li>Vietnam@gmail.com</li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->



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