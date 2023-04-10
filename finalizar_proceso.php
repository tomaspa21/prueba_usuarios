<?php include("header_2.php"); 
include("conexion.php");
$query = "SELECT * FROM administradores WHERE estado = 'Usuario Aceptado'";
$result = mysqli_query($conexion_db, $query);
if(mysqli_num_rows($result) > 0)
 {
  $table = '
   <table border=1>
   <tr>
    <th> id </th>
    <th> usuario </th>
    <th> clave </th>
    <th> estado </th>
   </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $table .= '
    <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["usuario"].'</td>
        <td>'.$row["clave"].'</td>
        <td>'.$row["estado"].'</td>
    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }
 ?>