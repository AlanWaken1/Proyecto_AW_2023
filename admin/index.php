<?php
session_start();
if($_SESSION['privilegios'] != 1){
echo'<script>
alert("Acceso denegado");
location.href="../../Proyecto_AW_2023/index.php";
</script>';
}
?>
<?php

require_once('class/Usuario.php');
$usuario = Usuario::recuperarTodos();
require_once('class/Autos.php');
require_once('class/Marca.php');
$auto = Autos::recuperarTodos();
require_once ('class/Conexion.php');
$conexion = new Conexion();
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
  <link href="assets/img/Avalanche.PNG" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="gh.css" rel="stylesheet">



</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header bg-black fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Avalanche.PNG" alt="">
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
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
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
            <img src="assets/img/Avalanche.PNG" alt="Profile" class="rounded-circle">
            <span class="d-none text-light d-md-block dropdown-toggle ps-2"><?php if($_SESSION){ echo $_SESSION['email']; }else{ echo 'Invitado'; } ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
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
        <a class="nav-link bg-dark text-light" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Inicio</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link bg-danger text-light collapsed"  data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Administrar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="autos/index.php">
              <i class="bi bi-car-front"></i><span>Autos</span>
            </a>
          </li>
          <li>
            <a href="marca/index.php">
              <i class="bi bi-box "></i><span>Marca</span>
            </a>
          </li>
          <li>
            <a href="usuarios/index.php">
              <i class="bi bi-person-add "></i><span>Usuarios</span>
            </a>
          </li>
          <li>
            <a href="contactos/index.php">
              <i class="bi bi-phone"></i><span>Contactos</span>
            </a>
          </li>
          <li>
            <a href="comentarios/index.php">
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8" style="float: left;">
          <div class="row">

            <!-- Ventas Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card Ventas-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ventas <span>| Hoy</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Ventas Card -->

            <!-- Subscribciones Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Subscribciones <span>| Este Mes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">+ 8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Subscribciones Card -->

            <!-- Reports -->
            <div class="col-12" >
              <div class="card" style="background-color: #232323">
              
                                    <table class="ccontainer">
                      <thead>
                        <tr>
                          <th><h1>Sites</h1></th>
                          <th><h1>Views</h1></th>
                          <th><h1>Clicks</h1></th>
                          <th><h1>Average</h1></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Google</td>
                          <td>9518</td>
                          <td>6369</td>
                          <td>01:32:50</td>
                        </tr>
                        <tr>
                          <td>Twitter</td>
                          <td>7326</td>
                          <td>10437</td>
                          <td>00:51:22</td>
                        </tr>
                        <tr>
                          <td>Amazon</td>
                          <td>4162</td>
                          <td>5327</td>
                          <td>00:24:34</td>
                        </tr>
                        <tr>
                          <td>LinkedIn</td>
                          <td>3654</td>
                          <td>2961</td>
                          <td>00:12:10</td>
                        </tr>
                        <tr>
                          <td>CodePen</td>
                          <td>2002</td>
                          <td>4135</td>
                          <td>00:46:19</td>
                        </tr>
                        <tr>
                          <td>GitHub</td>
                          <td>4623</td>
                          <td>3486</td>
                          <td>00:31:52</td>
                        </tr>
                      </tbody>
                    </table>

                </div>

              </div>
            </div><!-- End Reports -->

            <!--  Ventas -->
            <div class="col-12">
              <div class="card recent-Ventas overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title"> Ventas <span>| Hoy</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Tipo</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                if (count($auto) > 0): ?>
                 <?php foreach ($auto as $item): ?>
                      <tr>
                        <th scope="row"><a href="#">#<?php echo $item['id_Auto']; ?></a></th>
                        <td><?php echo $item['modelo']; ?> </td>
                        <td><a href="#" class="text-primary"> <?php echo $item['stock']; ?> </a></td>
                        <td>$ <?php echo $item['precio']; ?> </td>
                        <td><span class="badge bg-success"> <?php echo $item['tipo']; ?> </span></td>
                      </tr>
                      <?php endforeach; ?>
                </table>
                <?php else: ?>
                <p> No hay producto agregados </p>
                <?php endif; ?>
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Ventas -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Mas Vendido <span>| Hoy</span></h5>

                  <table class="table table-borderless">
                    <thead>
                    
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Precios</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php  
                    if (count($auto) > 0): ?>
                 <?php foreach ($auto as $item): ?>
                      <tr>
                        <th scope="row"><a href="#"><img src="<?php echo $item['imagen']; ?>" alt=""></a></th>
                        <td><a href="../autos.php" class="text-primary fw-bold">U<?php echo $item['modelo']; ?></a></td>
                        <td><?php echo $item['id_Marca'] ?></td>
                        <td class="fw-bold"><?php echo $item['tipo']; ?></td>
                        <td>$<?php echo $item['precio']; ?></td>
                      </tr>
                      <?php endforeach; ?>
                      <?php else: ?>
                <p> No hay producto agregados </p>
                <?php endif; ?>
                                          </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4" style="float: right;  margin-top: -109%;">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filto</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoy</a></li>
                <li><a class="dropdown-item" href="#">Este Mes</a></li>
                <li><a class="dropdown-item" href="#">Este Año</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Actividad Reciente <span>| Hoy</span></h5>
              <?php if (count($usuario) > 0): ?>
              <?php foreach ($usuario as $item): ?>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label"><?php echo $item['nombre']; ?></div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                 
                </div><!-- End activity item-->
                <?php endforeach; ?>
                </table>
                <?php else: ?>
                <p> No hay usuarios agregados </p>
                <?php endif; ?>


                </div>

                </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoy</a></li>
                <li><a class="dropdown-item" href="#">Este Mes</a></li>
                <li><a class="dropdown-item" href="#">Este Año</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| Este Mes</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Ventas',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoy</a></li>
                <li><a class="dropdown-item" href="#">Este Mes</a></li>
                <li><a class="dropdown-item" href="#">Este Año</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Hoy</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

        
            
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Avalanche</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>