<?php

require 'conexion.php';


$consulta = "SELECT * FROM registrados";


$resultado = mysqli_query($conexion, $consulta);


if (mysqli_num_rows($resultado) > 0) {
    
    echo "<table>";
    echo "<tr><th>Nombres</th><th>Apellidos</th><th>Género</th><th>Fecha de nacimiento</th><th>Usuario</th><th>Correo</th><th>Código postal</th><th>Dirección</th><th>Teléfono</th></tr>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['nombres'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['genero'] . "</td>";
        echo "<td>" . $fila['nacimiento'] . "</td>";
        echo "<td>" . $fila['usuario'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['codigo'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Liberar memoria y cerrar la conexión
mysqli_free_result($resultado);
mysqli_close($conexion);



?>