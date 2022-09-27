<DOCTYPE html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<?php
		## texto
		/*echo "hola<br>";
		echo "hola";
		$numero=10;
		echo "Esto es : $numero<br>";
		echo "<br>";
		/*Booleana*/
		$bool=true;
		echo "Esto es : $bool";
		echo "<br>";
		##Arreglo-Array
		$colores=array("red","blue","yellow");
		echo "Esto es un color : $colores[0]";

		## Operaciones matematicas
		$num1=10;
		$num2=5;
		$sumnum=$num1+$num2;
		$resnum=$num1-$num2;
		$mulnum=$num1*$num2;
		$divnum=$num1/$num2;
		echo "<br>";
		echo "La suma es : $sumnum<br>";
		echo "La resta es : $resnum<br>";
		echo "La multiplicacion es : $mulnum<br>";
		echo "La division es : $divnum<br>";
		// Condicionales
		// if con alas
		echo "<strong>IF CON ELSE </strong><br>";
		$num1=3;
		if ($num1>$num2)    {
			echo "num1 es el mayor";
		} else {
			echo "num2 es el mayor";
		}
		echo "<br>";
		// if con else if
		echo "<strong>IF CON ELSE IF</strong><br>";
		if ($num1>$num2)    {
			echo "num1 es el mayor";
		}
		 else if ($num1==$num2)  {
		 	echo "los dos numeros son iguales";
		}
		else
		{
			echo "num2 es el mayor";
		}	
		
		//switch
		echo "<br><strong>SWITCH</strong><br>";
		$color="azul";
		echo $color;
		 switch($color) {
		  	case "azul":
		  		 echo "este es el color";
		  		break;
		  	
		  	default:
		  		 echo "no es el color";
		  		break;
		  }
		  // WHITE
		echo "<br>";
		echo "<br><strong>WHILE</strong><br>";
		$num1=1;
		while ($num1<= 10) {
		  	echo "Este es el numero $num1";
		  	$num1++;
		  	echo "<br>";
		  } 
		  // DO WHITE
		  echo "<br><strong>DO WHILE</strong><br>";
		  $num1=1;
		  do {
		  	echo "<br>";
		  	echo "Este es el numero $num1";
		  	$num1++;
		  }
		  while ( $num1<=10);
		  echo "<br><stroFOR</strong><br>";
		  // FOR
		  for ($num1=1; $num1<=10; $num1++) { 
		  	echo "<br>";
		  	echo "Este es el numero $num1";
		  }

		  // funcion sin parametros
		  function bienvenido()
		  {
		  	echo "<br>";
		  	echo "Estamos super con su llegada";
		  }
		  bienvenido();

		  // funcion con parametros
		  function salida($despedir)
		  {
		  	echo "<br>";
		  	echo "Estamos super con su $despedir.<br>";
		  }
		  salida("saludo");

		?>
	</body>
