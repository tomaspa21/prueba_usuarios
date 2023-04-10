<?php

session_start();
    include("header.php"); 
    $nro1 = rand(0, 9);
    $nro2 = rand(0, 9);
    $nro3 = rand(0, 9);
    $letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k', 'x');
    $simbolo = array('%', '$', '/', '@', '#');
    $mezcla_letra = rand(0, 6);
    $mezcla_simbolo = rand(0, 4);
    $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;
    ?>
    <section class= "contenedor_carga">
            <form action="crear_usuario.php" method="post" class= "formulario">
               <input type="text" name="nombre" placeholder="Nombre" required>
               <input type="password" name="clave" placeholder="Clave" required>               
               <select name="estado" id="">
               <option value="Pendiente"> Pendiente </option>
               </select>                        
               <img src="captcha.php" alt="captcha">
               <input type="text" name="captcha" placeholder="Ingresa Captcha">
               <input type="submit" value="Crear Usuario">
            </form>    
    </section>
    <?php 
    if (isset ($_GET['error_codigo'])){
            echo "<h3> Codigo de Verificacion Incorrecto </h3>";
    } 
    if (isset ($_GET['ok'])){
        echo "<h3> Usuario Creado con Exito </h3>";
    } 

?>
</body>
</html>
