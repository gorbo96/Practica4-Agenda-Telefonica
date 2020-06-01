<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="ajax.js"></script>
        <link type="text/css" href="css/estilo1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Administrar Numeros </title>
    </head>   
    <body>
    <header>
        <img src="imagenes/icono.png" alt="Logo" class="cabecera"/>
        <h1>Guia telefonica</h1>
        <a href='buscar.php'><img src="imagenes/usuario.png" alt="usuario"/></a>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>             
    </header>
    <section>
    <h2>Datos Encontrados </h2>    
    <table >
            <tr>
                <th>Numero</th>
                <th>Tipo</th>
                <th>Operadora</th>
                <th>Modificar</th>
                <th>Eliminar</th>              

            </tr>        
        
    <?php
    $cedula = $_GET['cedula'];
    $correo = $_GET['correo'];    
    include "..\..\..\config\conexionBD.php";
    $sql="SELECT * FROM telefonos WHERE tel_usu_cedula LIKE ('%$cedula%')";    
    $result = $conn->query($sql);
    if($result->num_rows>0){        
        while($row=$result->fetch_assoc()){            
            $numero=$row["tel_numero"];
            echo "<tr>";            
            echo "  <td align=center>" .$row["tel_numero"]."</td>";
            echo "  <td align=center>" .$row["tel_tipo"]."</td>";
            echo "  <td align=center>" .$row["tel_operadora"]."</td>";
            echo "  <td align=center>" ."<a href='modificarT.php?numero=$numero'>Modificar</a>". "</td>";
            echo "  <td align=center>" ."<a href='eliminar.php?numero=$numero'>Eliminar</a>". "</td>";
            echo "</tr>";
           
        }
    }else{
        echo "<tr>";
        echo " <td colspan='5'>No existen telefonos </td>";
        echo "</tr>";
    }
    echo "<button><a href='micuenta.php'>Regresar</a></button> "
    ?>
    </table>        
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
