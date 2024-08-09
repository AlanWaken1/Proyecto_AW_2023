<?php
session_start();
require_once 'lib/carrito_compras.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Productos</title>
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


  <main class="main">


    <section id="portfolio" class="portfolio section-bg">
      <div class="container" style="margin-left: 20%;">

        <div class="section-title">
          <h2>Carrito</h2>
          <p>Te presentamos nuestra amplia variedad de vehículos que vendemos como empresa.</p>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <h1>Carrito </h1>
            <?php
            if (isset($_SESSION['email'])) {

              if (isset($mi_carrito)) {
                $num_producto = 0;

                for ($i = 0; $i < count($mi_carrito); $i++) {
                  if ($mi_carrito[$i] != NULL) {
                    $num_producto = $num_producto + 1;
                  }
                }
                if ($num_producto > 0) {
            ?>
                  <table class="table">
                    <thead>
                      <td>Imagen</td>
                      <td>Modelo </td>
                      <td>Precio</td>
                      <td style="width: 50px;">Cantidad</td>
                      <td> Subtotal</td>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($mi_carrito)) {
                        $total = 0;
                        for ($i = 0; $i < count($mi_carrito); $i++) {
                          if ($mi_carrito[$i] != NULL) {
                            $subtotal = $mi_carrito[$i]['precio'] *
                                  $mi_carrito[$i]['cantidad'];
                                $total = $total + $subtotal;
                      ?>
                            <tr>
                              <td> <img src="admin/autos/<?php echo $mi_carrito[$i]['imagen']; ?>" width="100" height="100"></td>
                              <td> <?php echo $mi_carrito[$i]['modelo']; ?>
                              </td>
                              <td> <?php echo '$ ' . $mi_carrito[$i]['precio']; ?></td>
                              <td>
                                <form action="carrito.php" method="post">
                                  <input type="hidden" name="id2" value="<?php echo $i ?>"> <!-- Campo que almacenará el $id, el indice de la matriz -->
                                  <input type="number" style="width: 60px;" name="cantidad2" min="1" max="<?php echo $mi_carrito[$i]['stock'] ?>" value="<?php echo $mi_carrito[$i]['cantidad'] ?>">
                                  <button type="submit" name="update" class="btn btn-theme align-center">Actualizar</button>

                                  
                                </form>
                              </td>
                              <td>
                                $<?php echo $subtotal;
                                ?>
                              </td>
                              <td>
                                <form action="carrito.php" method="post">
                                  <input type="hidden" name="id3" value="<?php echo $i; ?>">
                                  <button type="submit" name="delete" class="btn btn-theme">Eliminar</button>
                                </form>
                              </td>
                            </tr>
                      <?php
                          }
                        }
                      }
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td> <?php echo '$ ' . $total; ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <form action="proceso_compra.php" method="post">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                    <a href="autos.php" class="btn btn-lg btn-success">Seguir comprando </a>
                    <input type="submit" value="Continuar" class="btn btn-lg btnprimary">
                  </form>
            <?php
                } else {
                  echo '<p>No hay productos en el carrito <a href="autos.php"> comprar
          ahora </a></p>';
                }
              } else {
                echo '<p>No hay productos en el carrito <a href="autos.php"> comprar
          ahora </a></p>';
              }
            } else {
              echo '<p> Para agregar productos al carrito primero debe <a
          href="login.php">iniciar sesion</a></p>';
            }
            ?>
          </div>
        </div>

      </section>

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