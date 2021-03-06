<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Gonzalo R.C" />

    <title>Decotecnic S.L.</title>

    <!--ICONO-->
    <link rel="shortcut icon" href="img/favicon-32x32.png" />
    <!--ESTILOS DE LETRAS, DESCARGADOS, CUIDADO AL TOCAR-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/fd4b82aca8.js"
      crossorigin="anonymous"
    ></script>

    <!--CSS, PREFAB DE BOOTSTRAP EDITADO-->
    <link href="css/bootstrapesqueleto.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <div id="wrapper">
      <!-- BARRA LATERAL -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- BARRA LATERAL - DECOTECNIC -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon">
            <i class="far fa-building"></i>
          </div>
          <div class="sidebar-brand-text mx-3">DECOTECNIC</div>
        </a>

        <hr class="sidebar-divider my-0" />

        <!-- BARRA LATERAL - ELEMENTOS -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Resumen</span></a
          >
        </li>

        <hr class="sidebar-divider" />

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-coins"></i>
            <span>Gastos</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="manodeobra.php">Mano de Obra</a>
              <a class="collapse-item" href="materiales.php">Materiales</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="proyectos.php">
            <i class="fas fa-paint-roller"></i>
            <span>Proyectos</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="empresas.php">
            <i class="fas fa-snowplow"></i>
            <span>Empresas</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informes.html">
            <i class="fas fa-chart-bar"></i>
            <span>Informes</span></a
          >
        </li>

        <!-- BARRA LATERAL, ALTERNAR VISTA -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- FIN DE BARRA LATERAL -->

      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <!-- BARRA DE ARRIBA -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <ul class="navbar-nav ml-auto">
              <!-- BARRA DE ARRIBA - NAV BAR-->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - USUARIO -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600"
                    >JUAN RUIZ</span
                  >
                  <span style="font-size: 22px; color: #f39c12">
                    <i class="fas fa-house-user"></i>
                  </span>
                </a>
                <!-- Dropdown  -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Perfil
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ajustes
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Cerrar sesion
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- FIN BARRA ARRIBA - NAV BAR -->

          <!-- CONTENIDO PAGINA -->
          <div class="container-fluid">
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Resumen</h1>

              <!--BOTON PARA BUSCAR LOS PROYECTOS-->
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton1"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  ELEGIR PROYECTO
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">PROYECTO 1</a></li>
                  <li><a class="dropdown-item" href="#">PROYECTO 2</a></li>
                  <li>
                    <a class="dropdown-item" href="#">PROYECTO 3</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- COLUMNA DE CONTENIDO -->
            <div class="row">
              <!-- 1?? TARJETA -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-black-300 text-uppercase mb-1"
                        >
                          Ganancia Mensual
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          15,000???
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 2?? TARJETA -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-black-300 text-uppercase mb-1"
                        >
                          Ganancia neta
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          215,000???
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 3?? TARJETA -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-black-300 text-uppercase mb-1"
                        >
                          Dinero gastado
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                              20%
                            </div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div
                                class="progress-bar bg-warning"
                                role="progressbar"
                                style="width: 20%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-clipboard-list fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 4?? TARJETA -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-black-300 text-uppercase mb-1"
                        >
                          Gastos anticipados
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          10,000
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- COLUMNA -->

            <div class="row">
              <!-- Area Chart - GRAFICO DE LINEAS -->
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Dropdown - OPCIONES -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-black">
                      Otro grafico pero de linea
                    </h6>
                    <div class="dropdown no-arrow">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i
                          class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                        ></i>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- GRAFICO COMO TAL -->
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pie Chart - GRAFICO QUESO -->
              <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                  <!--  Dropdown -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-black">
                      Un grafico de lo que quieras
                    </h6>
                    <div class="dropdown no-arrow">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i
                          class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                        ></i>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- LEYENDA + GRAFICO JS -->
                  <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- FIN CONTENIDO PRINCIPAL -->
      </div>
      <!-- FIN CONTENIDO -->
    </div>
    <!-- FIN DE PAGINA -->

    <!--PREFAB BOOTSTRAP, SUBIR AL INICIO-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--IMPORTACION BOOTSTRAP JS-->
    <script src="js/PREFAB/prefabboostrap.js"></script>
    <script src="js/PREFAB/prefabbootstrap.bundle.min.js"></script>

    <!-- JQUERY BASIC, FORMULAS-->
    <script src="js/PREFAB/jquery.easing.min.js"></script>

    <!-- UNICO JS A EDITAR, PREFAB DE BOOTSTRAP-->
    <script src="js/EDITAR/bootstrapesqueleto.js"></script>

    <!-- LIBRERIA PARA CREAR CHARTS DE MANERA SENCILLA -->
    <script src="js/PREFAB/Chart.min.js"></script>

    <!-- INFORMACION DE LOS CHART NECESARIO EDITAR JUNTO CON PHP -->
    <script src="js/EDITAR/chart-area-demo.js"></script>
    <script src="js/EDITAR/chart-pie-demo.js"></script>
  </body>
</html>
