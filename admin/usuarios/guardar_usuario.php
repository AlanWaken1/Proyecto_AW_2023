<?php
session_start();
if ($_SESSION['privilegios'] != 1) {
   echo '<script>
alert("Acceso denegado");
location.href="../../index.php";
</script>';
}
?>

<?php

require_once '../class/Usuario.php';

$id_usuario = (isset($_REQUEST['id_usuario'])) ? $_REQUEST['id_usuario'] : null;

if ($id_usuario) {
   $usuario = Usuario::buscarPorId($id_usuario);
} else {
   $usuario = new Usuario();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
   $apellido_p = (isset($_POST['apellido_p'])) ? $_POST['apellido_p'] : null;
   $apellido_m = (isset($_POST['apellido_m'])) ? $_POST['apellido_m'] : null;
   $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : null;
   $ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : null;
   $estado = (isset($_POST['estado'])) ? $_POST['estado'] : null;
   $cp = (isset($_POST['cp'])) ? $_POST['cp'] : null;
   $email = (isset($_POST['email'])) ? $_POST['email'] : null;
   $password = (isset($_POST['password'])) ? $_POST['password'] : null;
   $estatus = (isset($_POST['estatus'])) ? $_POST['estatus'] : null;
   $privilegios = (isset($_POST['privilegios'])) ? $_POST['privilegios'] : null;
   $usuario->setNombre($nombre);
   $usuario->setApellidoP($apellido_p);
   $usuario->setApellidoM($apellido_m);
   $usuario->setDireccion($direccion);
   $usuario->setCiudad($ciudad);
   $usuario->setEstado($estado);
   $usuario->setCp($cp);
   $usuario->setEmail($email);
   $usuario->setPassword($password);
   $usuario->setEstatus($estatus);
   $usuario->setPrivilegios($privilegios);
   $usuario->guardar();
   header('Location: index.php');
} else {
?>



   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Avalanche Admin</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="../assets/img/Avalanche.PNG" rel="icon">
      <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

      <!-- Template Main CSS File -->

      <link href="../assets/css/style.css" rel="stylesheet">
      <link href="../assets/css/style2.css" rel="stylesheet">


   </head>

   <body>

      <!-- ======= Header ======= -->
      <header id="header" class="header bg-black fixed-top d-flex align-items-center">

         <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
               <img src="../assets/img/Avalanche.PNG" alt="">
               <span class="d-none text-light d-lg-block">Avalanche</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
         </div><!-- End Logo -->



         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">







               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                  <li class="dropdown-header">
                     You have 3 new messages
                     <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li class="message-item">
                     <a href="#">
                        <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                        <div>
                           <h4>Maria Hudson</h4>
                           <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                           <p>4 hrs. ago</p>
                        </div>
                     </a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li class="message-item">
                     <a href="#">
                        <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                        <div>
                           <h4>Anna Nelson</h4>
                           <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                           <p>6 hrs. ago</p>
                        </div>
                     </a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li class="message-item">
                     <a href="#">
                        <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                        <div>
                           <h4>David Muldon</h4>
                           <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                           <p>8 hrs. ago</p>
                        </div>
                     </a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li class="dropdown-footer">
                     <a href="#">Show all messages</a>
                  </li>

               </ul><!-- End Messages Dropdown Items -->

               </li><!-- End Messages Nav -->

               <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                     <img src="../assets/img/Avalanche.PNG" alt="Profile" class="rounded-circle">
                     <span class="d-none text-light d-md-block dropdown-toggle ps-2"><?php if ($_SESSION) {
                                                                                          echo $_SESSION['email'];
                                                                                       } else {
                                                                                          echo 'Invitado';
                                                                                       } ?></span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6><?php if ($_SESSION) {
                                 echo $_SESSION['nombre'];
                              } ?></h6>
                        <span>Web Designer</span>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="../admin/usuarios/index.php">
                           <i class="bi bi-person"></i>
                           <span>Mi Perfil</span>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                           <i class="bi bi-gear"></i>
                           <span>Account Settings</span>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>



                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                           <i class="bi bi-box-arrow-right"></i>
                           <span>Sign Out</span>
                        </a>
                     </li>

                  </ul><!-- End Profile Dropdown Items -->
               </li><!-- End Profile Nav -->

            </ul>
         </nav><!-- End Icons Navigation -->

      </header><!-- End Header -->

      <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
               <a class="nav-link bg-dark text-light" href="../index.php">
                  <i class="bi bi-grid"></i>
                  <span>Inicio</span>
               </a>
            </li>

            <li class="nav-item">
               <a class="nav-link bg-danger text-light collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Administrar</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                     <a href="../autos/index.php">
                        <i class="bi bi-car-front"></i><span>Autos</span>
                     </a>
                  </li>
                  <li>
                     <a href="../marca/index.php">
                        <i class="bi bi-box "></i><span>Marca</span>
                     </a>
                  </li>
                  <li>
                     <a href="../usuarios/index.php">
                        <i class="bi bi-person-add "></i><span>Usuarios</span>
                     </a>
                  </li>
                  <li>
                     <a href="../contactos/index.php">
                        <i class="bi bi-phone"></i><span>Contactos</span>
                     </a>
                  </li>
                  <li>
                     <a href="../comentarios/index.php">
                        <i class="bi bi-facebook"></i><span>Comentarios</span>
                     </a>
                  </li>
               </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
               <a class="nav-link collapsed" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>Perfil</span>
               </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
               <a class="nav-link collapsed" href="../index.php">
                  <i class="bi bi-laptop"></i>
                  <span>Cambiar al Lado Cliente</span>
               </a>
            </li>



         </ul>

      </aside><!-- End Sidebar-->

      <main id="main" class="main">

         <div class="pagetitle">
            <h1>Usuarios</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Index</a></li>
                  <li class="breadcrumb-item active">Usuarios</li>
               </ol>
            </nav>
         </div><!-- End Page Title -->

         <section class="section dashboard">
            <div class="row">

               <!-- Left side columns -->
               <div class="col-lg-12">
                  <div class="row">

                     <div id="main-wrapper" class="container">
                        <div class="row justify-content-center">
                           <div class="col-xl-12">
                              <div class="card border-0">
                                 <div class="card-body p-0">
                                    <div class="row no-gutters">
                                       <div class="col-lg-6">
                                          <div class="p-5">
                                             <div class="mb-5">
                                                <h3 class="h4 font-weight-bold text-theme">Guardar Usuarios</h3>
                                             </div>


                                             <p class="text-muted mt-2 mb-5">Guardar o modificar un registro en la tabla de Usuario.</p>
                                             <form method="POST" action="guardar_usuario.php">
                                                <?php if ($usuario->getIdUsuario()) : ?>
                                                   <input type="hidden" name="id_usuario" value="<?php echo $usuario->getIdUsuario() ?>" />
                                                <?php endif; ?>
                                                <label for="nombre"> Nombre </label>
                                                <input type="text" name="nombre" class="form-control" value="<?php echo $usuario->getNombre() ?>" required />
                                                <br>
                                                <label for="apellido_p"> Apellido Paterno </label>
                                                <input type="text" name="apellido_p" class="form-control" value="<?php echo $usuario->getApellidoP() ?>" required />
                                                <br>
                                                <label for="apellido_m"> Apellido Materno </label>
                                                <input type="text" name="apellido_m" class="form-control" value="<?php echo $usuario->getApellidoM() ?>" required />
                                                <br>
                                                <label for="direccion"> Dirección </label>
                                                <input type="text" name="direccion" class="form-control" value="<?php echo $usuario->getDireccion() ?>" required />
                                                <br>
                                                <label for="ciudad"> Ciudad </label>
                                                <input type="text" name="ciudad" class="form-control" value="<?php echo $usuario->getCiudad() ?>" required />
                                                <br>
                                                <label for="estado"> Estado </label>
                                                <input type="text" name="estado" class="form-control" value="<?php echo $usuario->getEstado() ?>" required />
                                                <br>
                                                <label for="cp"> Código Postal </label>
                                                <input type="number" name="cp" class="form-control" value="<?php echo $usuario->getCp() ?>" required />
                                                <br>
                                                <label for="email"> Email </label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $usuario->getEmail() ?>" required />
                                                <br>
                                                <label for="password"> Password </label>
                                                <input type="password" name="password" class="form-control" value="<?php echo $usuario->getPassword() ?>" required />
                                                <br>
                                                <label> Estatus </label>
                                                <input type="text" class="form-control" name="estatus" value="<?php if ($usuario->getIdUsuario()) {
                                                                                                                  echo $usuario->getEstatus();
                                                                                                               } else {
                                                                                                                  echo '1';
                                                                                                               } ?>" required />
                                                <br>
                                                <label>Privilegios</label>
                                                <input type="text" class="form-control" name="privilegios" value="<?php
                                                                                                                  if ($usuario->getIdUsuario()) {
                                                                                                                     echo $usuario->getPrivilegios();
                                                                                                                  } else {
                                                                                                                     echo '1';
                                                                                                                  } ?>" required />
                                                <br>
                                                <button type="submit" value="Guardar" class="btn btn-theme">Guardar</button>
                                                <a href="index.php" class="btn btn-danger"> Cancelar </a>
                                             </form>



                                          </div>
                                       </div>

                                       <div class="col-lg-6 d-none d-lg-inline-block">
                                          <div class="account-blockUs rounded-right">
                                             <div class="overlay4 rounded-right"></div>
                                             <div class="account-testimonial4">
                                                <h4 class="text-white mb-4">"Diseño limpio, diversión fresca: Estamos aquí para demostrar que el minimalismo puede ser emocionante y alegre."</h4>
                                                <p>- Avalanche</p>
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







                  </div>
                  <!-- end col -->
               </div>
               <!-- Row -->
            </div>







            </div>
            </div><!-- End Left side columns -->



            </div>
         </section>

      </main><!-- End #main -->




      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/vendor/chart.js/chart.umd.js"></script>
      <script src="../assets/vendor/echarts/echarts.min.js"></script>
      <script src="../assets/vendor/quill/quill.min.js"></script>
      <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="../assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="../assets/js/main.js"></script>


   </body>

   </html>










<?php
}

?>