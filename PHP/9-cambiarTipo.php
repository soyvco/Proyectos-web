<!DOCKTYPE html>
<html>
	<body>
		<?php 
			$variable_1= 23456577.34645646646464;
			echo("La variable_1 vale: ".$variable_1." y su tipo es: ".gettype($variable_1)."<br>");
			settype($variable_1, "integer");
			echo("Ahora la variable_1 vale: ".$variable_1." y su nuevo tipo es: ".gettype($variable_1)."<br>")
		?>
	</body>
</hmtl>