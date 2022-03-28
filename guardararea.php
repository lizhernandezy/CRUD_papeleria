<?php
require 'conexion.php';
    $id_area = $_POST['id_area'];
    $area_nombre= $_POST['area_nombre'];
    $area_ubicacion = $_POST['area_ubicacion'];
	$id_articulo = $_POST['id_articulo'];
	$id_empleado = $_POST['id_empleado'];

	$sql = "INSERT INTO areas (id_area, area_nombre, area_ubicacion, id_articulo, id_empleado) VALUES ('$id_area','$area_nombre','$area_ubicacion','$id_articulo','$id_empleado')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
      <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>

<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="inareas.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

