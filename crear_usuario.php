<?php
session_start();
include("conexion.php");
$codigo_captcha = $_POST['captcha'];
if ($codigo_captcha == $_SESSION['codigo_captcha']) {
  $nombre = $_POST ['nombre']; 
  $clave = $_POST ['clave'];
  $estado = $_POST ['estado']; 
  mysqli_query($conexion_db, "INSERT INTO administradores VALUES (DEFAULT, '$nombre', '$clave', '$estado')");
  header("Location:cargar.php?ok");
  mysqli_close($conexion_db);
}else {
  header("Location:cargar.php?error_codigo"); 
}
?>


