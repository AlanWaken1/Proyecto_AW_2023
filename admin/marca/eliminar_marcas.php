<?php

 require_once '../class/Marca.php';

 $id_Marca = (isset($_REQUEST['id_Marca'])) ? $_REQUEST['id_Marca'] : null;

 if($id_Marca){
 $marca = Marca::buscarPorId($id_Marca);
 $marca->eliminar();
 header('Location: index.php');

 }

?>