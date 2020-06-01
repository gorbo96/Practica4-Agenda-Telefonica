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
        include "../../../config/conexionBD.php";
        $codigo=$_GET['codigo'];
        $sql ="SELECT * FROM usuario WHERE usu_codigo=$codigo";
        $result=$conn->query($sql);        
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $nombre=$row["usu_nombres"];
                $apellido=$row["usu_apellidos"];
                $direccion=$row["usu_direccion"];                
                $fecha=$row["usu_fecha_nacimiento"];
                $cedula=$row["usu_cedula"]; 
                echo "<form id='formulario1' method='POST' action='actualizar.php'>";
                echo "<label for='codigo'>Codigo</label>";
                echo "<input  type='text' readonly='readonly' id='codigo' name='codigo' value='$codigo' required/>";                
                echo " <label for='cedula'>Cedula </label>";
                echo "  <input type='text' id='cedula' name='cedula' value='$cedula'  required/>";                
                echo "   <label for='nombres'>Nombres </label>";
                echo "  <input type='text' id='nombres' name='nombres' value='$nombre'  required/>";
                echo "   <label for='apellidos'>Apellido </label>";
                echo "  <input type='text' id='apellidos' name='apellidos' value='$apellido'  required/>";    
                echo "  <label for='direccion'>Direccion </label>";
                echo "<input type='text' id='direccion' name='direccion' value='$direccion' required/>";                    
                echo "<label for='fecha'>Fecha Nacimiento </label>";
                echo " <input type='date' id='fechaNacimiento' name='fechaNacimiento' value='$fecha' required/>";
                echo" <button type='submit' id='crear' name='crear'/>Modificar</button> ";                
                echo '<button><a href="index.php">Regresar</a></button>';
                echo "</form>";
            }
        }else{
            echo "<tr>";
            echo " <td colspan='7'>No existen usuarios en el sistema </td>";
            echo "</tr>";
        }        
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