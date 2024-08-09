<?php

 require_once '../class/Contacto.php';

 $id_Contacto = (isset($_REQUEST['id_Contacto'])) ? $_REQUEST['id_Contacto'] : null;

 if($id_Contacto){
 $contacto = Contacto::buscarPorId($id_Contacto);
 $contacto->eliminar();
 header('Location: index.php');

 }

?>