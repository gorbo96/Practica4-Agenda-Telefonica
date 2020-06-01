<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
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
    <h2>Creacion de Usuario</h2>
    <?php
        include '../../config/conexionBD.php';
        $cedula=isset($_POST["cedula"]) ? trim($_POST["cedula"]):null;
        $nombres=isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]),"UTF-8"):null;
        $apellidos=isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]),"UTF-8"):null;
        $direccion=isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]),"UTF-8"):null;        
        $fechaNacimiento=isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]):null;
        $correo=isset($_POST["correo"]) ? trim($_POST["correo"]):null;
        $contraseña=isset($_POST["contraseña"]) ? trim($_POST["contraseña"]):null;

        $sql="INSERT INTO usuario VALUES(0,'$cedula','$nombres','$apellidos','$direccion','$correo',MD5('$contraseña'),'$fechaNacimiento','N','U',null,null)";       
        
        if($conn->query($sql)===TRUE){
            echo "<p>Se ha creado los datos personales correctamente</p>";
        }else{
            if($conn->errno ==1062){
                echo "<p class='error'>La persona ya esta registrada en el sistemas </p>";
                
            }else{
                echo"<p class='error' Error: ".mysql_error($conn). "</p>";
            }
        }        
        $conn->close();
        echo "<button><a href='../vista/login.html'>Iniciar Sesion</a></button> "

    ?>
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
            <img src="../vista/imagenes/icono.png" alt="Logo"/>
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
