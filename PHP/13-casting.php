<!DOCKTYPE html>
<html>
	<body>
		<?php 
			$variable_1 = 43402.34;
			echo("La variable_1 vale: ".$variable_1." y su tipo es: ".gettype($variable_1)."<br>");
			$numero= (int)($variable_1);
			echo("Ahora variable_1 vale: ".$numero." y su nuevo tipo es: ".gettype($numero));
		?>
	</body>
</hmtl>