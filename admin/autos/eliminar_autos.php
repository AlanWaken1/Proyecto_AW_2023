<?php
 require_once '../class/Autos.php';
 $id_Auto = (isset($_REQUEST['id_Auto'])) ? $_REQUEST['id_Auto'] : null;
 /* echo $id_Auto;
 exit; */


 if($id_Auto){
 $autos = Autos::buscarPorId($id_Auto);
/* var_dump($autos);
exit; */
 $autos->eliminar();
  //Obtiene la ruta de la imagen y la elimina de la carpeta header('Location: index.php');
  unlink($autos->getImagen());
 header('Location: index.php');

 }
?>