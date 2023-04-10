<?php
include ("conexion.php");
$id_componente =$_GET ['id'];
mysqli_query($conexion_db, "DELETE FROM administradores WHERE id=$id_componente");
header("Location: ver.php");
?>