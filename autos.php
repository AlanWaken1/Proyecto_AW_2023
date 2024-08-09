<?php  
session_start();
?>
<?php
require_once('admin/class/Autos.php');
require_once('admin/class/Marca.php');
$auto = Autos::recuperarTodos();
?>
  
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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
  <link href="assets/css/estilo.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

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


  <main id="main" style="background-color:  rgba(96, 101, 102, 0.452);">

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio section-bg" style="background-color:  rgba(96, 101, 102, 0.452);">
        <div class="container" style="width: 100%;">
  
          <div class="section-title">
            <h2>Autos</h2>
            <p>Te presentamos nuestra amplia variedad de vehículos que vendemos como empresa.</p>
          </div>
  
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                <li data-filter=".filter-app">Eléctricos</li>
                <li data-filter=".filter-card">Gasolina</li>
                
              </ul>
            </div>
          </div>
         
              
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
          <?php
                if (count($auto) > 0): ?>
                <?php foreach ($auto as $item): ?> 
                     <?php
                if (($item['tipo']) == 'Electrico' ): ?>
          <div>
          <div >
              <div style="float: left;">
          <div class="container portfolio-item filter-app"  style=" width: 360px; float: left;">
                <div class="wrapper" >
                <div  style="border-radius: 12px; border: 1px solid rgba(255,255,255, 0.255)" class="portfolio-wrap"><img src="admin/autos/<?php echo $item['imagen']; ?>"  class="img-fluid" ></div>
                  <div class="portfolio-links">
                  <a href="admin/autos/<?php echo $item['imagen']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $item['modelo'];?>"><i class="bx bx-plus"></i></a>
                  
                </div>
                  <h1><?php echo $item['modelo'];?></h1>
                  <p>$<?php echo $item['precio'] ?></p>
                  <input type="hidden" name="cantidad" value="1">
                  </div>
                  <div class="button-wrapper"> 
                  <form action="carrito.php" method="post">
                <input type="hidden" name="id_Auto" value="<?php echo $item['id_Auto'] ?>">
                <input type="hidden" name="imagen" value="<?php echo $item['imagen'] ?>">
                <input type="hidden" name="modelo" value="<?php echo $item['modelo'] ?>">
                <input type="hidden" name="precio" value="<?php echo $item['precio'] ?>">
                <input type="hidden" name="stock" value="<?php echo $item['stock'] ?>">
                <input type="hidden" name="cantidad" value="1">
                <input type="submit" value="Agregar al carrito" class="btn fill center-block">
                </form>
                  </div>
                    </div>
                </div>
                <?php else: ?>
                  <div>
          <div >
              <div style="float: left;">
          <div class="container portfolio-item filter-card"  style=" width: 360px; float: left;">
                <div class="wrapper" >
                <div  style="border-radius: 12px; border: 1px solid rgba(255,255,255, 0.255)" class="portfolio-wrap"><img src="admin/autos/<?php echo $item['imagen']; ?>"  class="img-fluid" ></div>
                  <div class="portfolio-links">
                  <a href="admin/autos/<?php echo $item['imagen']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $item['modelo'];?>"><i class="bx bx-plus"></i></a>
                  
                </div>
                  <h1><?php echo $item['modelo'];?></h1>
                  <p>$<?php echo $item['precio'] ?></p>
                  <input type="hidden" name="cantidad" value="1">
                  </div>
                  <div class="button-wrapper"> 
                  <form action="carrito.php" method="post">
                <input type="hidden" name="id_Auto" value="<?php echo $item['id_Auto'] ?>">
                <input type="hidden" name="imagen" value="<?php echo $item['imagen'] ?>">
                <input type="hidden" name="modelo" value="<?php echo $item['modelo'] ?>">
                <input type="hidden" name="precio" value="<?php echo $item['precio'] ?>">
                <input type="hidden" name="stock" value="<?php echo $item['stock'] ?>">
                <input type="hidden" name="cantidad" value="1">
                <input type="submit" value="Agregar al carrito" class="btn fill center-block">
                </form>
                  </div>
                    </div>
                </div>
                  
            <?php endif; ?>

<?php endforeach; ?>
<?php else: ?>
                <p> No hay producto agregados </p>
            <?php endif; ?>


         
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->


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