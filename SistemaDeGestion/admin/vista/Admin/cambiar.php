<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Modificar Usuario</title>
    <link type="text/css" href="css/estilo1.css" rel="stylesheet">    
    <script type="text/javascript" src="ajax.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<header>
        <img src="imagenes/icono.png" alt="Logo"/>
        <h1>Guia telefonica</h1>
        <img src="imagenes/usuario.png" alt="usuario" class="cabecera"/>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>
</header>
<body >

    <section>
    <?php
    include "../../../config/conexionBD.php";
    $codigo=$_GET['codigo'];
    $sql ="SELECT * FROM usuario WHERE usu_codigo=$codigo";
    $result=$conn->query($sql);
    #echo "<p> $codigo </p>";
    # echo "<p>$codigo</p>";
    
        echo "<form id='formulario2' method='POST' action='contrasena.php?codigo=$codigo'>";

        echo "<label for='contraseña'>Contrasena Anterior</label>";
        echo "<input  type='password' id='contraseña' name='contraseña' value='' required/>";
        

        echo  " <label for='contraseña'>Nueva Contrasena </label>";
        echo "  <input type='password' id='nueva_contraseña' name='nueva_contraseña' value=''  required/>";
        echo" <button type='submit' id='crear' name='crear'>Cambiar</button>";                
        echo "</form>";
        
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