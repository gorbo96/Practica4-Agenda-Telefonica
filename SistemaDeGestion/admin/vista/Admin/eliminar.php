<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <script type="text/javascript" src="ajax.js"></script>
        <link type="text/css" href="css/estilo1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Eliminar Telefono</title>
</head>
<body>
<header>
        <img src="imagenes/icono.png" alt="Logo" class="cabecera"/>
        <h1>Guia telefonica</h1>
        <img src="imagenes/usuario.png" alt="usuario"/>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>             
    </header>
    <section>
    <?php
        include '../../../config/conexionBD.php';        
        $numero=$_GET['numero'];        
        $sql="DELETE FROM telefonos WHERE tel_numero='$numero'";
        if($conn->query($sql)===TRUE){
            echo "<p> Se ha eliminado el registro </p>";

        }else{
            if($conn->errno ==1062){
                echo "<p class='error'></p>";
                
            }else{
                echo"<p class='error' Error: ".mysql_error($conn). "</p>";
            }
        }
        $conn->close();
        echo "<button><a href='micuenta.php'>Regresar</a></button> "

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

</body>
</html>