<?php

 require_once '../class/Usuario.php';

 $id_usuario = (isset($_REQUEST['id_usuario'])) ? $_REQUEST['id_usuario'] : null;

 if($id_usuario){
 $usuario = Usuario::buscarPorId($id_usuario);
 $usuario->eliminar();
 header('Location: index.php');

 }

?>