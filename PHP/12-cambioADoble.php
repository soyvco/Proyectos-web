<!DOCKTYPE html>
<html>
	<body>
		<?php 
			$variable_1 = "0345";
			echo("La variable_1 vale: ".$variable_1." y su tipo es: ".gettype($variable_1)."<br>");
			settype($variable_1, "double");
			echo("Ahora variable_1 vale: ".$variable_1." y su nuevo tipo es: ".gettype($variable_1));
		?>
	</body>
</hmtl>