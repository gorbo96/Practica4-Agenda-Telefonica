<?php
    session_start();
            if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] ===FALSE)
            {                        
                        header("Location: /SistemaDeGestion/public/vista/login.html");
            }
    
    
            if ($_SESSION['nickname'])
            {
                        $grabado=$_SESSION['nickname']; //Si existe un nickname generamos el mensaje
            }
            
            else
            {
	                    $grabado="No se Guardo"; //Mensaje que no existe nada Grabado
            }
?>
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
        <img src="imagenes/icono.png" alt="Logo" class="cabecera"/>
        <h1>Guia telefonica</h1>
        <a href='buscar.php'><img src="imagenes/usuario.png" alt="usuario"/></a>
        <img src="imagenes/llamada.png" alt="llamada" class="cabecera"/>
        <img src="imagenes/correo.png" alt="correo" class="cabecera"/>
        <img src="imagenes/editar.png" alt="editar" class="cabecera"/>             
    </header>
    <body>
        <section>
            <table>
                <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>                    
                    <th>Correo</th>
                    <th>Fecha Nacimiento </th>
                    <th> Fecha Modificacion </th>
                    <th>Modificar </th>
                    <th> Cambiar Contrasena</th>
                </tr>
                <?php                    
                    include "../../../config/conexionBD.php";
                    $sql ="SELECT * FROM usuario  WHERE usu_correo = '$grabado'";                    
                    $result=$conn->query($sql);                    
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){                        
                            $correoD="".$row["usu_correo"];                            
                            $envCorreo=$row["usu_correo"];
                            $envCedula=$row["usu_cedula"];
                            echo "<tr>";
                            $codigo=$row["usu_codigo"];
                            $_SESSION['codigo']=$codigo;
                            echo "  <td align=center>" .$row["usu_cedula"]."</td>";
                            echo "  <td align=center>" .$row["usu_nombres"]."</td>";
                            echo "  <td align=center>" .$row["usu_apellidos"]."</td>";
                            echo "  <td align=center>" .$row["usu_direccion"]."</td>";                            
                            echo "  <td align=center>" ."<a href=mailto:$correoD>$correoD</a></td>";
                            echo "  <td align=center>" .$row["usu_fecha_nacimiento"]."</td>";
                            echo "  <td align=center>" .$row["usu_fecha_modificacion"]."</td>";
                            echo "  <td align=center>" ."<a href='modificar.php?codigo=$codigo'>Modificar</a>". "</td>";
                            echo "  <td align=center>" ."<a href='cambiar.php?codigo=$codigo'>Cambiar Contrasena</a>". "</td>";
                            echo "</tr>";                       
                        }
                    }else{
                        echo "<tr>";
                        echo " <td colspan='7'>No existen usuarios en el sistema </td>";
                        echo "</tr>";
                    }
                    echo "<button><a href='agregar.php?cedula=$envCedula&correo=$envCorreo'>Agregar Numero</a></button>";
                    echo "<button><a href='buscar.php?cedula=$envCedula&correo=$envCorreo'>Modificar Numeros</a></button>";                  
                    $conn->close();
                ?>                
            </table>
            <button><a href='cerrar_sesion.php'>Cerrar Sesion</a></button>            
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