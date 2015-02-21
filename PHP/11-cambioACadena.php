<!DOCKTYPE html>
<html>
	<body>
		<?php 
			$variable_1 = 48769389383989383912493593345434543456.345643456765434565;
			echo("La variable_1 vale: ".$variable_1." y su tipo es: ".gettype($variable_1)."<br>");
			settype($variable_1, "string");
			echo("Ahora variable_1 vale: ".$variable_1." y su nuevo tipo es: ".gettype($variable_1));
		?>
	</body>
</hmtl>