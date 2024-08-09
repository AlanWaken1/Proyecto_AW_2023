<?php
 session_start();
 require_once '../admin/class/Usuario.php';

 $email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
 $password = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;
 $usuario = new Usuario;
 $usuario->setEmail($email);
 $usuario->setPassword($password);
 $entrar=$usuario->logIn();
 if($entrar==true){
 header('Location:../index.php');
 }
 else{
 echo '<script>
 alert("Datos incorrectos");
 window.location.href="../index.php";
 </script>';
 } 
