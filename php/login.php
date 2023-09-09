<?php

require 'conexion.php';


$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];


$insertar = "SELECT * FROM usuarios WHERE nombre_user = '$usuario' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$insertar);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		
		echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
	} else {
		
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}

?>
