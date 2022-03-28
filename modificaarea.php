<?php
	require 'conexion.php';
	
	$id_area = $_GET['id_area'];
	
	$sql = "SELECT * FROM areas WHERE id_area = '$id_area'";
	$resultado = $mysqli->query($sql);
	//$row = $resultado->fetch_array(MYSQLI_ASSOC);
	$row = $resultado-> fetch_assoc();
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3,1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updatearea.php" autocomplete="off">


				
				<div class="form-group">
					<label for="id_area" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_area" class="form-control" id="id_area" name="id_area" placeholder="Id" value="<?php echo $row['id_area'];?>">
					</div>
				</div>
								
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="area_nombre" name="area_nombre" placeholder="Nombre" value="<?php echo $row['area_nombre'];?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="ubicacion" class="col-sm-2 control-label">Ubicación</label>
					<div class="col-sm-10">
						<input type="ubicacion" class="form-control" id="area_ubicacion" name="area_ubicacion" placeholder="Ubicación" value="<?php echo $row['area_ubicacion'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="id_articulo" class="col-sm-2 control-label">Id articulo</label>
					<div class="col-sm-10">
						<input type="id_articulo" class="form-control" id="id_articulo" name="id_articulo" placeholder="Id articulo" value="<?php echo $row['id_articulo'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="id_empleado" class="col-sm-2 control-label">Id empleado</label>
					<div class="col-sm-10">
						<input type="id_empleado" class="form-control" id="id_empleado" name="id_empleado" placeholder="Id empleado" value="<?php echo $row['id_empleado'];?>">
					</div>
				</div>



			
				
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inareas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>