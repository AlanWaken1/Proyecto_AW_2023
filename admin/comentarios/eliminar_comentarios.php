<?php

 require_once '../class/Comentarios.php';

 $id_Comentario = (isset($_REQUEST['id_Comentario'])) ? $_REQUEST['id_Comentario'] : null;

 if($id_Comentario){
 $comentario = Comentarios::buscarPorId($id_Comentario);
 $comentario->eliminar();
 header('Location: index.php');

 }

?>