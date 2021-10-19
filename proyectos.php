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

    <!--CSS, PREFAB DE BOOTSTRAP, CUIDADO AL EDITAR-->
    <link href="css/bootstrapesqueleto.min.css" rel="stylesheet" />
    
  </head>

  <body id="page-top">

    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >

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


        <li class="nav-item">
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


        <li class="nav-item active">
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

        <!-- BOTON ALTERNAR -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- FIN Sidebar -->

      <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
          <!-- Topbar -->
          <nav
            class="
              navbar navbar-expand navbar-light
              bg-white
              topbar
              mb-4
              static-top
              shadow
            "
          >
           
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - User Information -->
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

                <div
                  class="
                    dropdown-menu dropdown-menu-right
                    shadow
                    animated--grow-in
                  "
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
          <!-- FIN Topbar -->


          <div class="container-fluid">
            <!-- TITULO -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Proyectos</h1>

              <form
              class="
                d-none d-sm-inline-block
                form-inline
                mr-auto
                ml-md-3
                my-2 my-md-0
                mw-100
                navbar-search
              "
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-1"
                  placeholder="Buscar gastos"
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" 
                  type="button"
                  
                  >
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
            <!--BOTON AÑADIR-->

            <button type="button" class="btn btn-primary modalButton" style="margin-right:50px ;" data-toggle="modal" data-target="#Modalañadir">
              <i class="fas fa-plus"></i></button>
            <!--EL BOTON DEBE LLAMAR A UN MODAL CON UN FORMULARIO QUE SE DEBE AÑADIR A LA BBDD-->

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
        </div>
            <!-- TABLA -->
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col" ></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Fecha Inicio</th>
                  <th scope="col">Fecha Finalizacion</th>
                  <th scope="col">Presupuesto</th>
                  <th scope="col">Gastos netos</th>
                  <th scope="col">Beneficio neto</th>
                  <th scope="col">Empresas</th>
                </tr>
              </thead>
              <tbody>

              <?php 
				// require("conexion.php");
				
				$contador = 1;
				$conexion = mysqli_connect("localhost", "root", "", "decotecnic") or
				die("Problemas con la conexión");
				
				$sql=("SELECT * FROM proyectos");
  				// $query=mysqli_query($mysqli,$sql);
				$query=mysqli_query($conexion,$sql);
				
				while ($row=mysqli_fetch_row ($query)){
		    	
          $contador=row[0];
		    	$nombre=$row[1];
		    	$fechaInicio=$row[2];
		    	$fechaFinal=$row[3];
		    	$presupuesto=$row[4];
		    	$gastosNetos=$row[5];
		    	$beneficioNeto=$row[6];
          $empresas=$row[7];
				
				?>
		   
			  
                <tr data-toggle="modal" data-target="#Modalinfo">
                  <th scope="row" ><?php echo $contador ?></th>
                  <td><?php echo $nombre ?></td>
                  <td><?php echo $fechaInicio ?></td>
                  <td><?php echo $fechaFinal ?></td>
                  <td><?php echo $presupuesto ?></td>
                  <td><?php echo $gastosNetos ?></td>
                  <td><?php echo $beneficioNeto ?></td>
                  <td><?php echo $empresas ?></td>
                </tr>
				
				<?php 
				}
				?>

              <!--
                <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <th scope="row" >1</th>
                  <td>Tienda colonia</td>
                  <td>22/07/2021</td>
                  <td>28/10/2021</td>
                  <td>160000€</td>
                  <td>120000€</td>
                  <td>40000€</td>
                </tr>
                <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <th scope="row">2</th>
                  <td>valcotos</td>
                  <td>22/07/2021</td>
                  <td>28/10/2021</td>
                  <td>160000€</td>
                  <td>120000€</td>
                  <td>40000€</td>
                </tr>
                <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <th scope="row">3</th>
                  <td>Tienda salsa</td>
                  <td>22/07/2021</td>
                  <td>28/10/2021</td>
                  <td>160000€</td>
                  <td>120000€</td>
                  <td>40000€</td>
                </tr>

                  -->


              </tbody>
            </table>
          </div>

          <!-- MODAL DE SELECT, SACAR INFO DE BBDD -->
          <div class="modal fade" id="Modalinfo" role="dialog">
            <div class="modal-dialog modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">aqui poner el nombre del gasto, mediante PHP</h5>
                  <button type="button" class="btn btn-outline-warning btn-lg ">EDITAR</button>
                  <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped table-hover">
                    
                    <tbody>
                      <tr>
                        <th scope="row" >Nombre</th>
                        <td>Paco del paro</td>
                      </tr>
                      <tr>
                        <th scope="row">Descripcion</th>
                        <td>Obra en algun lado del mundo </td>
                      </tr>
                      <tr>
                        <th scope="row">Empresas</th>
                        <td>Decotecnic</td>  
                      </tr>
                      <tr>
                        <th scope="row">Presupuesto</th>
                        <td>10.000€</td>  
                      </tr>
                      <tr>
                        <th scope="row">Filas n</th>
                        <td>hacer todas las filas necesarias</td>  
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                </div>
              </div>
            </div>
          </div>
          







          <!-- MODAL PARA AÑADIR, INSERT-->
          <div class="modal fade" id="Modalañadir" role="dialog">
            <div class="modal-dialog modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="margin-left:15px;">AÑADIR UN GASTO</h5>
                  <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="margin-right:40px;"></i></button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped table-hover">

                    <div class="form">
                      <!-- LLAMADA A PHP MAS ADELANTE PARA HACER LA CONEXION A LA BASE DE DATOS Y INSERT -->
                      <form action="" method="POST">
                        
                        <!-- NOMBRE PRINCIPAL -->
                        <div class="form__nombre">
                          <div class="form__nombre__label">NOMBRE:</div>

                          <div class="form__nombre__imput">
                            <input
                              type="text"
                              name="nombre"
                              id="nombre"
                              placeholder="NOMBRE PROYECTO"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>


                         <!-- PROYECTO ASOCIADO -->
                        <div class="form__nombre">
                          <div class="form__nombre__label">FECHA DE INICIO:</div>

                          <div class="form__nombre__imput">
                            <input
                              type="date"
                              name="fecha-inicio"
                              id="fecha-inicio"
                              placeholder="FECHA DE INICIO"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>


                         <!-- SECCION PARA LUEGO FILTRAR -->
                         <div class="form__nombre">
                          <div class="form__nombre__label">CERTIFICACIONES:</div>

                          <div class="form__nombre__imput">
                            <input
                              type="text"
                              name="certificaciones"
                              id="certificaciones"
                              placeholder="IMPORTE DEL CERTIFICADO"
                              class="form-control"
                              
                            />
                          </div>
                        </div>

                        <!-- IMPORTANTE -->
                        <!-- LOS BENEFICIOS Y GASTOS TIENEN QUE SER AUTOCALCULADO MEDIANTE -->
                        <!-- LA BASE DE DATOS EN UNA VARIABLE AL PRINCIPIO DE LA PAGINA -->
                        <!-- IMPORTANTE -->

                        <div class="form__submit">
                          <div class="d-grid col-6 mx-auto">
                            <input
                              type="submit"
                              value="AÑADIR"
                              class="boton btn btn-warning btn-lg"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!--FIN MODAL PARA AÑADIR, INSERT-->


        </div>
        <!-- FIN Main Content -->
      </div>
      <!-- FIN CONTENEDOR -->
    </div>
    <!-- FIN PAGINA -->

    <!--PREFAB BOOTSTRAP, SUBIR AL INICIO-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--IMPORTACION BOOTSTRAP JS-->
    <script src="js/PREFAB/prefabboostrap.js"></script>
    <script src="js/PREFAB/prefabbootstrap.bundle.min.js"></script>
    <script src="js/PREFAB/bootstrap.min.js"></script>

    <!-- JQUERY BASIC, FORMULAS-->
    <script src="js/PREFAB/jquery.easing.min.js"></script>

    <!-- UNICO JS A EDITAR, PREFAB DE BOOTSTRAP-->
    <script src="js/EDITAR/bootstrapesqueleto.js"></script>
  </body>
</html>
