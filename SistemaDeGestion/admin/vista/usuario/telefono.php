<!DOCTYPE html>
<html>
    <head>    
    <link type="text/css" href="css/estilo1.css" rel="stylesheet">
    <meta charset="UTF-8">
    <script type="text/javascript" src="ajax.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">       
    <title>Agregar Numero</title>
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
        <section>      
        <?php
        include '../../../config/conexionBD.php';
        $cedula=isset($_POST["cedula"]) ? trim($_POST["cedula"]):null;
        $correo=isset($_POST["correo"]) ? trim($_POST["correo"]):null;
        $numero=isset($_POST["numero"]) ? trim($_POST["numero"]):null;
        $tipo=isset($_POST["tipo"]) ? trim($_POST["tipo"]):null;
        $operadora=isset($_POST["operadora"]) ? trim($_POST["operadora"]):null;
        $sql="INSERT INTO telefonos VALUES('$correo','$cedula','$numero','$tipo','$operadora')";
        if($conn->query($sql)===TRUE){
            echo "<p>Se ha creado los datos personales correctamente</p>";
        }else{
            if($conn->errno ==1062){
                echo "<p class='error'>El numero ya esta registrado en el sistema </p>";
                
            }else{
                echo"<p class='error' Error: ".mysql_error($conn). "</p>";
            }
        }        
        $conn->close();
        echo "<button><a href='micuenta.php'>Cuenta</a></button>"
        ?>
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