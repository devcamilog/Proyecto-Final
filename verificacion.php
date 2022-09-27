<?php
	//Se trae el código ingresado por el usuario en index.html para su futura verificación
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	//Se crea conexión a la base de datos.
 	$conexion=mysqli_connect("localhost", "root", "", "colegio");
 	//Se determina tabla y campos a consultar de la base de datos
 	$consulta="SELECT * FROM sesion WHERE usuario='$usuario' AND pass='$pass'";
 	//Se realiza la consulta en la base de datos
 	$resultado=mysqli_query($conexion, $consulta);
 	//Se determina si existe algún registro que coincida con la contraseña
 	$filas=mysqli_num_rows($resultado);
 	//De coincidir algún registro, se permite el acceso a la plataforma para el usuario
 	if ($filas>0)
 		{
 			echo("bienvenido");
 		}
 	else
 		{
 			echo "es incorrecto";
 		}