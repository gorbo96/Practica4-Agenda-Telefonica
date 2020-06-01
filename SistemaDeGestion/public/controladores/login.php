<!DOCTYPE html>
<html>
    <head>
        <title>Prueba de rama</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../vista/css/estilo1.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
             <img src="../vista/imagenes/icono.png" alt="Logo"/>
             <h1>Guia telefonica</h1>
             <img src="../vista/imagenes/usuario.png" alt="usuario"/>
             <img src="../vista/imagenes/llamada.png" alt="llamada"/>
             <img src="../vista/imagenes/correo.png" alt="correo"/>
             <img src="../vista/imagenes/editar.png" alt="editar"/>             
        </header>
<section>
    <h2>Ingreso al sistema</h2>
<?php

    session_start();
    include '../../config/conexionBD.php';

    $usuario=isset($_POST["correo"]) ? trim($_POST["correo"]):null;
    $contrasena=isset($_POST["contraseña"]) ? trim($_POST["contraseña"]):null;
    $_SESSION['nickname']=isset($_POST["correo"]) ? trim($_POST["correo"]):null;

 
    $sql="SELECT * FROM usuario WHERE usu_correo='$usuario' and usu_password=MD5('$contrasena')";
 
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {    
        $_SESSION['isLogged']=TRUE;
        while($row=$result->fetch_assoc()){       
        if ($row["usu_tipo"]=='U')
        {
            header("Location: ../../admin/vista/usuario/micuenta.php");
        }
        else
        {
           
            header("Location: ../../admin/vista/Admin/index.php");  
        }
       }
       
   }else{    
    echo "<p>Ingreso al sistema fallido!";
    echo '<button><a href="../vista/login.html">Regresar</a></button>';    
   }
   $conn->close();
?>
</section>
<section class="asociados">
            <h2>Correo Electronico Asociados</h2>
            <img src="../vista/imagenes/gmail.png" alt="Gmail" class="Icono"/>
            <img src="../vista/imagenes/yahoo.png" alt="Yahoo" class="Icono"/>
            <img src="../vista/imagenes/outlook.png" alt="Outlook" class="Icono"/>
            <img src="../vista/imagenes/gmx.png" alt="GMX" class="Icono"/>
        </section>
        <section class="asociados">
            <h2>Operadoras Asociadas</h2>
            <img src="../vista/imagenes/claro.jfif" alt="Gmail" class="Icono"/>
            <img src="../vista/imagenes/movistar.png" alt="Gmail" class="Icono"/>
            <img src="../vista/imagenes/cnt.png" alt="Gmail" class="Icono"/>
            <img src="../vista/imagenes/tuenti.jfif" alt="Gmail" class="Icono"/>
        </section>
        <section class="nosotros">
            <img src="imagenes/icono.png" alt="Logo"/>
            <article>
                <h3>Nosotros</h3>
                <p>Somos una pagina sin animos de lucro. Nuestros servicios son gratuitos para cualquier usuario.</p>
            </article>
            <article>
                <h3>Terminos y Condiciones</h3>
                <p>Nos reservados el derecho a proporcinar a otras instituciones, empresas, o cualquier ente la informacion acerca de la informacion generada por el uso de la pagina</p>
            </article>
        </section>        
    </body>
</html>
