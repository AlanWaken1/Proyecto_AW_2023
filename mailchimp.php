<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta name="title" content="Adall Company">
  <meta name="description" content="Página que se dedica a la venta de autos ">
  <meta name="keywords" content="Autos, Venta">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Spanish">


  <!-- Favicons -->
  <link href="assets/img/ADALL Logo2.png" rel="icon">
  <link href="assets/img/ADALL Logo2.png" rel="apple-touch-icon">>

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


  <i class="bi bi-list mobile-nav-toggle d-xxl-none"></i>

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
        <div class="col-xl-6">
          <div class="card border-0">
            <div class="card-body p-0">
              <div class="row no-gutters">
                <div class="col-lg-5">
                  <div class="p-2">
                    <div id="mc_embed_shell">
                      <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
                      <style type="text/css">
                        #mc_embed_signup {
                          background: #fff;
                          false;
                          clear: left;
                          font: 14px Helvetica, Arial, sans-serif;
                          width: 600px;
                        }

                        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                      </style>
                      <div id="mc_embed_signup">
                        <form class="mailchimp" action="https://adallcomp.us21.list-manage.com/subscribe/post?u=1102dc383895a3bb3951993de&amp;id=83ad24be09&amp;f_id=00d65de1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                          <div id="mc_embed_signup_scroll">
                            <h2>¡Suscríbete a nuestro boletín! </h2>
                            <div class="indicates-required"><span class="asterisk">*</span> Campos requeridos</div>
                            <div class="mc-field-group"><label for="mce-EMAIL">Correo Electrónico <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span></div>
                            <div class="mc-field-group"><label for="mce-FNAME">Nombre </label><input type="text" name="FNAME" class=" text" id="mce-FNAME" value=""></div>
                            <div class="mc-field-group"><label for="mce-LNAME">Apellidos </label><input type="text" name="LNAME" class=" text" id="mce-LNAME" value=""></div>
                            <div class="mc-field-group"><label for="mce-PHONE">Número de teléfono </label><input type="text" name="PHONE" class="REQ_CSS" id="mce-PHONE" value=""></div>
                            <div class="mc-field-group size1of2"><label for="mce-BIRTHDAY-month">Fecha de Nacimiento </label>
                              <div class="datefield"><span class="subfield monthfield"><input class="birthday REQ_CSS" type="text" pattern="[0-9]*" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month" value=""></span> /<span class="subfield dayfield"><input class="birthday REQ_CSS" type="text" pattern="[0-9]*" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day" value=""></span><span class="small-meta nowrap">( Mes / Día )</span></div>
                            </div>
                            <div id="mce-responses" class="clear foot">
                              <div class="response" id="mce-error-response" style="display: none;"></div>
                              <div class="response" id="mce-success-response" style="display: none;"></div>
                            </div>
                            <div aria-hidden="true" style="position: absolute; left: -5000px;">
                              /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                              <input type="text" name="b_1102dc383895a3bb3951993de_83ad24be09" tabindex="-1" value="">
                            </div>
                            <div class="optionalParent">
                              <div class="clear foot">
                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
                                <p style="margin: 0px auto;"><a href="http://eepurl.com/ixFm_Q" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p>
                              </div>
                            </div>
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