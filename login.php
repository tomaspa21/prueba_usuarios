<?php include("header_1.php"); ?>

<section class= "contenedor_carga">
        <form action="validar.php" method="post" class= "formulario">
            <input type="text" name="usuario" required placeholder="Usuario">
            <input type="password" name="clave" placeholder="Clave">
            <input type="submit" value=" Ingresar ">
        </form> 
    </section>
    <?php 
    if (isset ($_GET['error'])){
        echo "<h3> Datos incorrectos </h3>";
    }
    ?>