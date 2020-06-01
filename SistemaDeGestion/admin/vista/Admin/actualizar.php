<!DOCTYPE html>
<html>
<head>
    <title>Modificar Usuario</title>
    <link type="text/css" href="css/estilo1.css" rel="stylesheet">
    <meta charset="UTF-8">
    <script type="text/javascript" src="ajax.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<header>
        <img src="imagenes/icono.png" alt="Logo" class="cabecera"/>
        <h1>Guia telefonica</h1>
        <img src="imagenes/usuario.png" alt="usuario" class="cabecera"/>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>             
    </header>
<body>
    <h2>Actualizacion de Datos</h2>
    <section>        
    <?php
        include '../../../config/conexionBD.php';        

        $cedula=isset($_POST["cedula"]) ? trim($_POST["cedula"]):null;
        $nombre=isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]),"UTF-8"):null;
        $apellido=isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]),"UTF-8"):null;
        $direccion=isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]),"UTF-8"):null;
        $telefono=isset($_POST["telefono"]) ? trim($_POST["telefono"]):null;
        $fechaNacimiento=isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]):null;
        $codigo=isset($_POST["codigo"]) ? trim($_POST["codigo"]):null;

        date_default_timezone_set("America/Guayaquil");
        $modificacion=date('Y-m-d',time());

        $sql="UPDATE usuario SET usu_nombres='$nombre', usu_apellidos='$apellido', usu_cedula='$cedula', usu_direccion='$direccion',
                usu_fecha_nacimiento='$fechaNacimiento', usu_fecha_modificacion='$modificacion' WHERE usu_codigo='$codigo'";
        #echo "<p> $codigo  <p>";
        if($conn->query($sql)===TRUE){
            echo "<p> Actualizado</p>";

        }else{
            if($conn->errno ==1062){
                echo "<p class='error'>La persona ya esta registrada en el sistema </p>";
                
            }else{
                echo"<p class='error' Error: ".mysql_error($conn). "</p>";
            }
        }

        $conn->close();
        echo "<button><a href='index.php'>Regresar</a></button>"

    ?>
    <section>
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
</body>
</html>