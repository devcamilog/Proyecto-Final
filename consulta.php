<?php
	// Crear la variable $conn y asignar a la cadena de conexión
	$conn = mysqli_connect('localhost','root','',
	'cliente') or die('Error al conectar al servidor MySQL.');
?>	
<html>
<head><center><h1> Consulta </h1></center></head>
<body>
	<!-- Creando encabezado de la Tabla -->
	<center><h3>Trayendo Datos de la Base de Datos<h3></center>
	<center><table border="3" ></center>
		<tr>
			<td>cedula</td>
			<td>direccion</td>
			<td>telefono</td>
			<td>ciudad</td>
			<td>email</td>	
		</tr>
		<?php
			// Búsqueda en la Base de Datos
			$query = "SELECT * FROM datoscli";
			mysqli_query($conn, $query) or die('Error al buscar en la  base de datos.');
			//Etapa3. Mostrar datos
			$resultado = mysqli_query($conn, $query);
			//$mostrar = mysqli_fetch_array($resultado);
			while ($mostrar = mysqli_fetch_array($resultado)) 
			{
					

				echo"<tr>";
					echo"<td>".$mostrar['cedula']."</td>";
					echo"<td>".$mostrar['direccion']."</td>";
					echo"<td>".$mostrar['telefono']."</td>";
					echo"<td>".$mostrar['ciudad']."</td>";
					echo"<td>".$mostrar['email']."</td>";
				echo"</tr>";
		 
		 	} 

		?>
	</table>
</body>
</html>