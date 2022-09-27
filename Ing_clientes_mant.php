<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
	
	<link rel="stylesheet" href="estilo.css" type="text/css" media="all" />
</head>
<body>

	<h1> Formulario Ingreso Cliente ... </h1>
	<form action="agregar.php" method="post"  >
		<div>
	        <label for="cedula">Cédula:</label>
	        <input type="number" id="cedula"  placeholder="Ingresa tu Cédula" name="cedula" autofocus="autofocus" required/>
    	</div>
    	<div>
	        <label for="direccion">Dirección:</label>
	        <input type="text" id="direccion"  placeholder="Ingresa su Dirección" name="direccion"/>
    	</div>
    	<div>
	        <label for="telefono">Teléfono:</label>
	        <input type="text" id="telefono"  placeholder="Ingresa su número de Teléfono" name="telefono"/>
    	</div>
    	<div>
	        <label for="ciudad">Ciudad:</label>
	        <input type="text" id="ciudad"  placeholder="Ingresa su ciudad" name="ciudad"/>
    	</div>
	    <div>
	        <label for="email">E-mail:</label>
	        <input type="email" id="email"  placeholder="Ingresa tu Correo ej:yoyo@hotmail.com" name="email"/>
	    </div>
	    <br>
	    <center>
		<div class="button">
	        	    
	    	<button type="submit" onclick="mensaje('Se ha enviado el formulario')">Envie su formulario</button> <!-- Aquí defino una función llamada mensaje y dentro de ella coloco el mensaje que deseo salga -->

			<script>
			  function mensaje(textoenv)
			   { // Aqui llamo la funcion con el texto ya definido.
			    alert(textoenv);  // Aqui uso alert y llamo a textoenv
			  }
			</script>
		</div>
		</center>
	</form>


</body>
</html>