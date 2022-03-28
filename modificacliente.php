<?php
	require 'conexion.php';
	
	$id_clientes = $_GET['id_clientes'];
	
	$sql = "SELECT * FROM clientes WHERE id_clientes = '$id_clientes'";
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
			
			<form class="form-horizontal" method="POST" action="updateclientes.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_clientes" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_clientes" class="form-control" id="id_clientes" name="id_clientes" placeholder="Id" value="<?php echo $row['id_clientes'];?>">
					</div>
				</div>
                
                
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="clien_nombre" name="clien_nombre" placeholder="Nombre" value="<?php echo $row['clien_nombre'];?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="appaterno" class="col-sm-2 control-label">Apellido paterno</label>
					<div class="col-sm-10">
						<input type="appaterno" class="form-control" id="clien_ap_paterno" name="clien_ap_paterno" placeholder="Apellido paterno" value="<?php echo $row['clien_ap_paterno'];?>">
					</div>
				</div>

				<div class="form-group">
					<label for="apmaterno" class="col-sm-2 control-label">Apellido materno</label>
					<div class="col-sm-10">
						<input type="apmaterno" class="form-control" id="clien_ap_materno" name="clien_ap_materno" placeholder="Apellido materno" value="<?php echo $row['clien_ap_materno'];?>">
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="telefono" class="form-control" id="clien_telefono" name="clien_telefono" placeholder="Telefono" value="<?php echo $row['clien_telefono'];?>">
					</div>
				</div>
				

			
				
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inclientes.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>