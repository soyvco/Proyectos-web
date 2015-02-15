<!DOCKTYPE html>
<html>
	<body>
		<?php 
			$operando1 = 8;
			$operando2 = 3;
			$suma = $operando1+$operando2;
			$resta = $operando1-$operando2;
			$producto = $operando1*$operando2;
			$cociente = $operando1/$operando2;
			$modulo = $operando1%$operando2;
			echo("El valor 1: ".$operando1."<br>");
			echo("El valor 2: ".$operando2."<br>");
			echo("Suma: ".$suma."<br>");
			echo("Resta: ".$resta."<br>");
			echo("Producto: ".$producto."<br>");
			echo("Cociente: ".$cociente."<br>");
			echo("Modulo: ".$modulo."<br>");
			echo("Incremento de operando1: ".++$operando1."<br>");
			echo("Decrementeod de operando2: ".--$operando2);
		?>
	</body>
</hmtl>