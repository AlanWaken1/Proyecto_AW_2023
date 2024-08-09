<?php
session_start();
require_once '../admin/class/Comentarios.php';

$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
$mensaje = (isset($_REQUEST['mensaje'])) ? $_REQUEST['mensaje'] : null;
$fecha = (isset($_REQUEST['fecha'])) ? $_REQUEST['fecha'] : null;
$estatus = (isset($_REQUEST['estatus'])) ? $_REQUEST['estatus'] : null;

$usuario = new Comentarios;
$usuario->setEstatus($estatus);
$usuario->setEmail($email);
$usuario->setMensaje($mensaje);
$usuario->setFecha($fecha);
$entrar = $usuario->guardar();
if ($entrar == true) {
   header('Location:../faq.php');
} else {
   echo '<script>
      alert("Gracias por su opiniòn");
      window.location.href="../faq.php";
      </script>';
}
