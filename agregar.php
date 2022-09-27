<?php
	$servername = "localhost";
	$database = "cliente";
	$username = "root";
	$password = "";
	// Creando conexión
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Chequeando la  conexión
	if (!$conn) {
	      die("Conexión Falló: " . mysqli_connect_error());
	}
	 
	echo "<h1><center>Conectado Satisfactoriamente</h1></center>";

 
	 // Tomando datos del formulario para luego ser enviados a la base de datos

		$cedula=$_POST['cedula'];
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$email=$_POST['email'];
	// enviando datos a la Base de Datos (Mantenimiento) a la Tabla Clientes
		
	$sql = "INSERT INTO datoscli (cedula, direccion, telefono, ciudad, email) VALUES ('$cedula', '$direccion', '$telefono', '$ciudad','$email')";
	if (mysqli_query($conn, $sql)) {
	      echo "<h1><center>Registro Grabado Perfectamente<center></h1>";
	} else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	//Permite que se envie la información y regrese al formulario de Ingreso de Clientes
	echo "<meta http-equiv='refresh' content='3; url=Ing_clientes_mant.php'>" // content es el tiempo de espera
?>