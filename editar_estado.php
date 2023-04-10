<?php

include("conexion.php");

$id = $_GET ['id'];

mysqli_query($conexion_db, "UPDATE administradores SET estado = 'Usuario Aceptado' WHERE id = $id");
header("Location: ver.php");

?>