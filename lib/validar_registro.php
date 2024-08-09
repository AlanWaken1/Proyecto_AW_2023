<?php
require_once('../admin/class/Usuario.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $usuario = new Usuario();
 $nombre = (isset($_REQUEST['nombre'])) ? $_REQUEST['nombre'] : null;
 $apellido_p = (isset($_REQUEST['apellido_p'])) ? $_REQUEST['apellido_p'] : null;
 $apellido_m = (isset($_REQUEST['apellido_m'])) ? $_REQUEST['apellido_m'] : null;
 $direccion = (isset($_REQUEST['direccion'])) ? $_REQUEST['direccion'] : null;
 $ciudad = (isset($_REQUEST['ciudad'])) ? $_REQUEST['ciudad'] : null;
 $estado = (isset($_REQUEST['estado'])) ? $_REQUEST['estado'] : null;
 $cp = (isset($_REQUEST['cp'])) ? $_REQUEST['cp'] : null;
 $email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
 $password = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;
 $estatus = (isset($_REQUEST['estatus'])) ? $_REQUEST['estatus'] : null;
 $privilegios = (isset($_REQUEST['privilegios'])) ? $_REQUEST['privilegios'] : null;
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
 echo '<script>
 alert("Registro realizado con exito");
 window.location.href="../index.php";
 </script>';
}else{
    
 header('Location: ../registro.php');
} 
