<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Sobre nosotros</h2>
        <p>En esta sección hablaremos acerca de los desarrolladores y colaboradores que están detrás de este gran proyecto.</p>
      </div>

          <div class="row">
          <div class="col-xs-12">
          
          <iframe src="assets/DisenoCosas/BannerCortinas/BannerCortinas.html" height="100%" width="100%" ></iframe>

    </div>


      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/alan.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX Diseñador , Desarrollador Web, Ingeniero en Informática.</h3>
          <p class="fst-italic">
            <strong>Alan Emmanuel Ambriz Calderón</strong>  
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong> <span>26 Sep 2003</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>www.adallcompany.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span>+52 417 106 6082</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Acámbaro, GTO</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>19</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Puesto:</strong> <span>Jefe del área tecnológica</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>alanxcl2309@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Estudios:</strong> <span>Universidad Tecnológica de León </span></li>
              </ul>
            </div>
          </div>
          <p>
            En resumen, Alan Emmanuel Ambriz Calderón es el motor que impulsa nuestra estrategia tecnológica. Su liderazgo visionario y su experiencia técnica nos permiten enfrentar los desafíos más exigentes con confianza y entusiasmo. Gracias a su dedicación incansable y su búsqueda constante de la excelencia, estamos posicionados para seguir innovando y creciendo en un mundo cada vez más impulsado por la tecnología.
          </p>
          <br>
        </div>
      </div>

      <br>
      <div style="margin-top:6px">
      <iframe src="assets/DisenoCosas/BannerLoop/BannerLoop.html" height="100%" width="100%"></iframe>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/AlanDollar.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX Diseñador , Ingeniero en Informática.</h3>
          <p class="fst-italic">
            <strong>Alan Hernandez</strong>  
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong> <span>21 Feb 2004</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>www.adallcompany.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span>+52 417 112 6312</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Acámbaro, GTO</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>19</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Puesto:</strong> <span>Diseñador de páginas</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>ahdez878@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Estudios:</strong> <span>Universidad Tecnológica de León </span></li>
              </ul>
            </div>
          </div>
          <p>
          Alan Hernández es un talentoso diseñador de páginas web con una pasión por crear experiencias digitales excepcionales. Con una mente creativa y habilidades técnicas sólidas, Alan combina la estética visual con la funcionalidad práctica en sus diseños. Siempre en busca de las últimas tendencias y mejores prácticas, se esfuerza por brindar sitios web estéticamente atractivos, intuitivos y receptivos que cautivan a los usuarios y cumplen con los objetivos del cliente. Su atención al detalle y enfoque en la usabilidad hacen de Alan un profesional confiable para traducir ideas en impresionantes sitios web funcionales.
          </p>
          <br>
        </div>
      </div>

      <div>
      <iframe src="assets/DisenoCosas/galeriadeimagenes/galeriadeimagenes.html" style="margin-top:6px" height="250px" width="950px" scrolling="no"></iframe>
      </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/iram.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Backend Developer , Ingeniero en Informática.</h3>
            <p class="fst-italic">
              <strong>Luis Daniel Iram Portillo Vargas</strong>  
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong> <span>3 Dic 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>www.adallcompany.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span>+52 417 947 8312</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Acámbaro, GTO</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Puesto:</strong> <span>Backend Developer de páginas</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>iramfutboll@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Estudios:</strong> <span>Universidad Tecnológica de León </span></li>
                </ul>
              </div>
            </div>
            <p>
            Luis Daniel Iram Portillo Vargas es un hábil desarrollador backend de páginas web. Con sólidos conocimientos técnicos, se especializa en crear la infraestructura que permite que los sitios web funcionen sin problemas. Colabora estrechamente con diseñadores y desarrolladores frontend para garantizar experiencias de usuario eficientes y seguras. Su enfoque en la optimización y el rendimiento lo convierte en un valioso activo para proyectos web de alta calidad.
            </p>
            <br>
          </div>
        </div>

      <div style="width:150px; height:300px; margin-left:33%">
      <img class="imagefluid " style="width:150px; height:300px"  src="assets/DisenoCosas/ezgif.com-gif-maker.gif" alt="">
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/angel.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Fullstack Developer , Ingeniero en Informática.</h3>
          <p class="fst-italic">
            <strong>Angel Nuñez Ramos</strong>  
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong> <span>27 Oct 2003</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>www.adallcompany.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span>+52 417 321 1123</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Acámbaro, GTO</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>18</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Puesto:</strong> <span>Fullstack Developer de páginas</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>angelnun231@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Estudios:</strong> <span>Universidad Tecnológica de León </span></li>
              </ul>
            </div>
          </div>
          <p>
          Ángel Núñez Ramos es un apasionado desarrollador fullstack de páginas web con un enfoque equilibrado en el front-end y el back-end. Con una habilidad innata para resolver problemas y una mente analítica, Ángel crea soluciones digitales completas y robustas. Ya sea dando vida a diseños atractivos en la interfaz de usuario o implementando funcionalidades complejas en el lado del servidor, su versatilidad le permite abordar cada desafío con determinación. Con amplios conocimientos en tecnologías web y una sed constante de aprendizaje, Ángel está siempre actualizado en las últimas herramientas y enfoques, lo que lo convierte en un recurso confiable para llevar a cabo proyectos web exitosos y de alta calidad.
          </p>
          <br>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->




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