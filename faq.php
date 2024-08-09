<?php
session_start();
?>

<?php
require_once('admin/class/Comentarios.php');
$comentario = Comentarios::recuperarTodos();
require_once('admin/class/Usuario.php');
$usuario = Usuario::recuperarTodos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FAQ</title>
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


  <main id="main"> 

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas Frecuentes</h2>
          <p>A continuación, encontrarás una sección de preguntas frecuentes para una página web de venta de autos eléctricos:</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  1. ¿Qué es un auto eléctrico?
                  Un auto eléctrico es un vehículo que funciona utilizando energía eléctrica almacenada en baterías recargables en lugar de combustibles fósiles. Estos autos no emiten emisiones de escape y se consideran más amigables con el medio ambiente que los vehículos de combustión interna.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  2. ¿Cuánta distancia puedo recorrer con un auto eléctrico?
                  La autonomía de un auto eléctrico varía según el modelo y la capacidad de su batería. En general, los autos eléctricos modernos pueden recorrer entre 150 y 400 kilómetros con una carga completa. Algunos modelos de gama alta pueden alcanzar más de 500 kilómetros.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  3. ¿Cuánto tiempo se tarda en cargar un auto eléctrico?
                  El tiempo de carga depende del tipo de cargador utilizado y de la capacidad de la batería del automóvil. Los tiempos de carga pueden variar desde 30 minutos con un cargador de carga rápida hasta varias horas con un cargador doméstico estándar. Algunos autos eléctricos también admiten la carga rápida, lo que permite obtener una carga parcial en pocos minutos.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  4. ¿Cuál es el costo de carga en comparación con la gasolina?
                  El costo de carga de un auto eléctrico es generalmente más bajo en comparación con el combustible de gasolina. El costo exacto depende de la tarifa eléctrica de tu área y la eficiencia del automóvil. En general, los autos eléctricos cuestan menos por kilómetro recorrido en comparación con los vehículos de combustión interna.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  5. ¿Es seguro conducir un auto eléctrico?
                  Sí, los autos eléctricos son seguros para conducir. Están diseñados y fabricados cumpliendo con los estándares de seguridad establecidos. Además, los autos eléctricos tienen características de seguridad adicionales debido a la falta de componentes inflamables, como el combustible. Como con cualquier automóvil, es importante seguir las recomendaciones de seguridad y mantener el vehículo adecuadamente.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->







    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Comentarios</h2>
          <p>Tu opinión es importante, déjanos saber lo que opinas:</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            if (count($comentario) > 0) : ?>
              <?php foreach ($comentario as $item) : ?>
                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" style="width: 330px; margin-left: 20px;">
                    <p>
                      <i class="bi bi-caret-left-fill"></i>
                      <strong><?php echo $item['email']; ?></strong> <i class="bi bi-caret-right-fill"></i>
                      <br>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php echo $item['mensaje']; ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              <?php endforeach; ?>
              </table>
            <?php else : ?>
              <p> No hay comentarios agregados </p>
            <?php endif; ?>


            </div>
              <div class="swiper-pagination"></div>
          </div>

        </div>
    </section><!-- End Testimonials Section -->
  

  <!-- Contenedor Principal -->




  <?php


  $id_Comentario = (isset($_REQUEST['id_Comentario'])) ? $_REQUEST['id_Comentario'] : null;

  if ($id_Comentario) {
    $comentario = Comentarios::buscarPorId($id_Comentario);
  } else {
    $comentario = new Comentarios();
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = (isset($_POST['email'])) ? $_POST['email'] : null;
    $mensaje = (isset($_POST['mensaje'])) ? $_POST['mensaje'] : null;
    $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : null;
    $estatus = (isset($_POST['estatus'])) ? $_POST['estatus'] : null;
    $comentario->setEmail($email);
    $comentario->setMensaje($mensaje);
    $comentario->setFecha($fecha);
    $comentario->setEstatus($estatus);
    $comentario->guardar();
    header('Location: faq.php');
  } else {
  ?>
    <br><br>

    




      <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="card border-0">
              <div class="card-body p-0">
                <div class="row no-gutters">
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="mb-5">
                        <h3 class="h4 font-weight-bold text-theme">Registra tu comentarios</h3>
                      </div>

                      <p class="text-muted mt-2 mb-5">Ingresa tu Comentario para continuar.</p>

                        <div class="form-group">
                          <h2> Agregar un Comentario </h2>
                          <form method="POST" action="lib/val_com.php">
                            <?php if ($comentario->getIdComentario()) : ?>
                              <input type="hidden" name="id_Comentario" value="<?php echo $comentario->getIdComentario() ?>" />
                            <?php endif; ?>
                            <div class="form-control">
                              <label for="email"> Email </label>
                              <input type="text" class="form-control" name="email" value="<?php echo $comentario->getEmail() ?>" required />
                            </div>
                            <br>
                            <div class="form-control">
                              <label for="fecha"> Fecha </label>
                              <input type="date" class="form-control" name="fecha" value="<?php echo $comentario->getFecha() ?>" required />
                            </div>
                            <br>
                            <div class="form-control">
                              <label for="estatus"> Estatus </label>
                              <input type="text" class="form-control" name="estatus" value="<?php echo $comentario->getEstatus() ?>" required />
                            </div>
                            <br>
                            <div class="form-control">
                              <label for="mensaje"> Mensaje </label>
                              <textarea cols="30" rows="2" type="text" name="mensaje" value="<?php echo $comentario->getMensaje() ?>" required></textarea>
                            </div>
                            <br>
                            <div>
                              <button type="submit" value="Guardar" class="btn btn-theme">Guardar</button>
                            </div>


                          </form>
                    </div>
                    </div>  
                  </div>

                  <div class="col-lg-6 d-none d-lg-inline-block">
                    <div class="account-blockCo rounded-right">
                      <div class="overlay5 rounded-right"></div>
                      <div class="account-testimonial5">
                        <h4 class="text-white mb-4">"¡Comparte tu experiencia y déjanos saber cómo hemos llevado tu viaje sobre ruedas al siguiente nivel! Tu opinión es nuestro motor de mejora constante."</h4>
                        <p>- ADALL Company</p>
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


      

      <?php
    }



      ?>
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