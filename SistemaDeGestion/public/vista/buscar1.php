<?php 
include "../../config/conexionBD.php";
$correo = $_GET['correo']; 
$sql = "SELECT * FROM telefonos WHERE tel_usu_correo LIKE concat('$correo','%')";; //cambiar la consulta para puede buscar por ocurrencias de letras
$result = $conn->query($sql);
echo " <table> <tr> <th>Cedula</th> <th>Correo</th> <th>Numero de Telefono</th> <th>Tipo de telefono</th> <th>Operadora</th></tr>";
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $correo1="".$row['tel_usu_correo'];
        $numero="".$row['tel_numero'];
        echo "<tr>";
        echo " <td align=center>" . $row['tel_usu_cedula'] . "</td>";
        echo "  <td align=center>" ."<a href=mailto:$correo1>$correo1</a></td>";
        echo "  <td align=center>" ."<a href=tel:$numero>$numero</a></td>";
        echo " <td align=center>" . $row['tel_tipo'] . "</td>";        
        echo " <td align=center>" . $row['tel_operadora'] . "</td>";        
         echo "</tr>";
    }
} else {
    echo "<tr>";
    echo " <td colspan='5'> No existen usuarios registradas en el sistema </td>";
    echo "</tr>";
}
echo "</table>";
 $conn->close();
?>