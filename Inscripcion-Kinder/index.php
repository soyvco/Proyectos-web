<!DOCKTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<title>Sistema de registro de alumnos.</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top lobster">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Nombre del kinder</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class='nav navbar-nav navbar-right'>
        		<?php
					$secciones= array("¿Quiénes somos?","Ubicación","Inscripciones");
					$direcciones= array("quienes-somos.php","ubicacion.php","inscripciones.php");
					$contador=count($secciones);
					for ($i=0; $i <$contador; $i++) { 
						echo("<li><a href='".$direcciones[$i]."'>".$secciones[$i]."</a></li>");
					}
				?>
			</ul>
			<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Busqueda...">
          	</form>
        </div>
      </div>
    </nav>
</body>
</html>