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
        $numero = $_GET['numero'];
        echo "<form id='formulario1' method='POST' action='actualizarT.php?numero=$numero'>";
        echo "<label for='numeroC'>Numero de telefono</label>";
        echo "<input  type='text' id='numeroC' name='numeroC' required/>";
        echo "<label for='tipo'>Tipo de telefono</label>";
        echo "<select id='tipo' name='tipo'>";
        echo "<option value='F'>Fijo</option>";
        echo "<option value='C'>Celular</option>";
        echo "</select>";
        echo  " <label for='operadora'>Operadora</label>";
            echo "  <select id='operadora' name='operadora'>";
            echo "  <option value='CLARO'>Claro</option>";
            echo "  <option value='MOVISTAR'>Movistar</option>";
            echo "  <option value='CNT'>CNT</option>";
            echo "  <option value='TUENTI'>Tuenti</option>";
            echo "</select>";
            echo" <button type='submit' id='crear' name='crear'>Modificar</button>";
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
