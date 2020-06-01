<?php
    include "../../../config/conexionBD.php"; $cedula = $_GET['cedula'];
    $sql = "SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
    $result = $conn->query($sql);
    echo " <table>
            <tr>
             <th>Cedula</th>
             <th>Nombres</th>
             <th>Apellidos</th>
             <th>Dirección</th>             
             <th>Correo</th>
             <th>Fecha Nacimiento</th>
             <th>Eliminado</th>
             <th>Tipo</th>
             <th>Fecha Creacion</th>
             </tr>";
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo " <td>" . $row['usu_cedula'] . "</td>";
            echo " <td>" . $row['usu_nombres'] ."</td>";
            echo " <td>" . $row['usu_apellidos'] . "</td>";
            echo " <td>" . $row['usu_direccion'] . "</td>";            
            echo " <td>" . $row['usu_correo'] . "</td>";
            echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
            echo " <td>" . $row['usu_eliminado'] . "</td>";
            echo " <td>" . $row['usu_tipo'] . "</td>";
            echo " <td>" . $row['usu_fecha_creacion'] . "</td>";
            echo " <td>" . $row['usu_fecha_modificacion'] . "</td>";
            echo "</tr>"; 
        }
    } else {
        echo "<tr>";
        echo " <td colspan='9'> No existen usuarios registradas en el sistema </td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn->close();
?>