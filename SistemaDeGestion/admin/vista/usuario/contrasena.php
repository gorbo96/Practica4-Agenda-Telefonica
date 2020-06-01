<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="ajax.js"></script>
        <link type="text/css" href="css/estilo1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Perfil De Usuario </title>
    </head>
    <header>
        <img src="imagenes/icono.png" alt="Logo"/>
        <h1>Guia telefonica</h1>
        <img src="imagenes/usuario.png" alt="usuario" class="cabecera"/>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>             
    </header>
    <body>
    <h2>Actualizacion de Contraseña</h2>    
    <section>
<?php

   # session_start();
    include '../../../config/conexionBD.php';
    $codigo=$_GET['codigo'];
    $contrasena=isset($_POST["contraseña"]) ? trim($_POST["contraseña"]):null;
    $contrasena_nueva=isset($_POST["nueva_contraseña"]) ? trim($_POST["nueva_contraseña"]):null;    
    $sql="SELECT * FROM usuario WHERE usu_codigo='$codigo' AND MD5('$contrasena')";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo "<p> Contrasena Cambiada </p>";
        date_default_timezone_set("America/Guayaquil");
        $modificacion=date('Y-m-d',time());
        $sqlCambiar="UPDATE usuario SET usu_password=MD5('$contrasena_nueva'), usu_fecha_modificacion='$modificacion' WHERE usu_codigo='$codigo'";
       $conn->query($sqlCambiar);
    }else{
        echo "<p> La contrasena actual no coincide </p>";
   }   
   echo '<button><a href="micuenta.php">Regresar</a></button>';
   $conn->close();   
?>
</section>
<section class="asociados">
            <h2>Correo Electronico Asociados</h2>
            <img src="imagenes/gmail.png" alt="Gmail" class="Icono"/>
            <img src="imagenes/yahoo.png" alt="Yahoo" class="Icono"/>
            <img src="imagenes/outlook.png" alt="Outlook" class="Icono"/>
            <img src="imagenes/gmx.png" alt="GMX" class="Icono"/>
        </section>
        <section class="asociados">
            <h2>Operadoras Asociadas</h2>
            <img src="imagenes/claro.jfif" alt="Gmail" class="Icono"/>
            <img src="imagenes/movistar.png" alt="Gmail" class="Icono"/>
            <img src="imagenes/cnt.png" alt="Gmail" class="Icono"/>
            <img src="imagenes/tuenti.jfif" alt="Gmail" class="Icono"/>
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