<!DOCKTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<title>Sistema de registro de alumnos.</title>
</head>
<body>
	<div class='col-md-12 center-block quitar-float text-center'>
		<h1 class='lobster Rojo Grande espacio-arriba centrar'>Nombre del kinder</h1>
	</div>
	<div class='col-md-3'>
		<ul class='nav nav-sider lobster mediano'>
			<?php
				$secciones= array("Inicio","¿Quiénes somos?","Ubicación","Inscripciones");
				$direcciones= array("index.php","quienes-somos.php","ubicacion.php","inscripciones.php");
				$contador=count($secciones);
				for ($i=0; $i <$contador; $i++) { 
					echo("<li><a href='".$direcciones[$i]."'>".$secciones[$i]."</a></li>");
				}
			?>
		</ul>
	</div>
</body>
</html>