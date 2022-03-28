<?php
	require 'conexion.php';
	
	$id_papeleria = $_GET['id_papeleria'];
	
	$sql = "SELECT * FROM papeleria WHERE id_papeleria = '$id_papeleria'";
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
			
			<form class="form-horizontal" method="POST" action="updatepape.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_papeleria" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_papeleria" class="form-control" id="id_papeleria" name="id_papeleria" placeholder="Id" value="<?php echo $row['id_papeleria'];?>">
					</div>
				</div>
                
                
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="pape_nombre" name="pape_nombre" placeholder="Marca" value="<?php echo $row['pape_nombre'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="permiso" class="col-sm-2 control-label">Permiso</label>
					<div class="col-sm-10">
						<input type="permiso" class="form-control" id="pape_permiso" name="pape_permiso" placeholder="Permiso" value="<?php echo $row['pape_permiso'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
						<input type="direccion" class="form-control" id="pape_direccion" name="pape_direccion" placeholder="Direccion" value="<?php echo $row['pape_direccion'];?>">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="telefono" class="form-control" id="pape_telefono" name="pape_telefono" placeholder="Telefono" value="<?php echo $row['pape_telefono'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="id_area" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_area" class="form-control" id="id_area" name="id_area" placeholder="Id" value="<?php echo $row['id_area'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="id_empleado" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_empleado" class="form-control" id="id_empleado" name="id_empleado" placeholder="Id" value="<?php echo $row['id_empleado'];?>">
					</div>
				</div>
			


			
				
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inpape.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>