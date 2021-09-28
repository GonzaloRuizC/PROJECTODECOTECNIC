<?php
  session_start();
   
  // DATOS DEL FORMULARIO DE INICIO DE SESION
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
   
  // DATOS PARA CONECTARSE A LA BASE DE DATOS
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "decotecnic";
  
  // CONEXION A LA BASE DE DATOS
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // VALIDACION
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
    echo 'vuelva a intenarlo.<br/>';
  }
   
  // CONSULTA PARA VER SI EXISTE DICHO USUARIO
  $sql = sprintf("SELECT * FROM usuarios WHERE username='$usuario' AND password = '$password'");
  $resultado = $conn->query($sql);
   
  // VERIFICACION
  if($resultado){
    // SE GUARDA LA SESION ABIERTA
    $_SESSION['usuario'] = $usuario;
     
    // REDIRECCION AL INDEX
    header("Location: http://localhost/TFG/index.html"); 
  }else{
    echo 'El email o password es incorrecto, vuelva a intenarlo.<br/>';
  }


/*

CONTROLACION DE SI EL USUARIO ESTA LOGUEADO NECESARIO EN TODAS LAS PAGINAS, APLICAR LUEGO

<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['usuario'])){
    
  }else{
    header("Location: login.html"); 
  }
?>


PARA EL BOTON CERRAR SESION, HAY QUE COMPROBAR QUE SI NO ESTA LOGUEADO
LO QUE ES GUARDADO EL USUARIO EN LA SESION TE PROHIBA ENTRAR

<?php
  session_start();
   
  unset($_SESSION['usuario']); 
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("Location: login.html");
?>

*/
 
?>

