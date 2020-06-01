<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="ajax.js"></script>
        <link type="text/css" href="css/estilo1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Administracion Numeros </title>
    </head>
    <body>
        <table >
            <tr>
                <th>Numero</th>
                <th>Tipo</th>
                <th>Operadora</th>              

            </tr>    
            <section class="informacion">
                <h2>Datos Encontrados </h2>
    <?php
    $cedula = $_GET['cedula'];
    $correo = $_GET['correo'];    
    include "..\..\..\config\conexionBD.php";
    $sql="SELECT * FROM telefonos WHERE tel_usu_correo LIKE ('%$cedula%')";    
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){            
            echo "<tr>";
            $codigo=$row["usu_codigo"];
            $_SESSION['codigo']=$codigo;
            echo "  <td align=center>" .$row["tel_numero"]."</td>";
            echo "  <td align=center>" .$row["tel_tipo"]."</td>";
            echo "  <td align=center>" .$row["tel_operadora"]."</td>";
            echo "  <td align=center>" ."<a href='modificar.php?codigo=$codigo'>Modificar</a>". "</td>";
            echo "  <td align=center>" ."<a href='eliminar.php?codigo=$codigo'>Eliminar</a>". "</td>";
            echo "</tr>";
           
        }
    }else{
        echo "<tr>";
        echo " <td colspan='3'>No existen usuarios en el sistema </td>";
        echo "</tr>";
    }

    ?>

</body>
</html>
