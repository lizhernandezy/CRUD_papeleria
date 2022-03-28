<?php
	require 'conexion.php';
	
	$id_articulo = $_GET['id_articulo'];
	
	$sql = "SELECT * FROM articulos WHERE id_articulo = '$id_articulo'";
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
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_articulo" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_articulo" class="form-control" id="id_articulo" name="id_articulo" placeholder="Id" value="<?php echo $row['id_articulo'];?>">
					</div>
				</div>
                
                
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<input type="marca" class="form-control" id="art_marca" name="art_marca" placeholder="Marca" value="<?php echo $row['art_marca'];?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="art_nombre" name="art_nombre" placeholder="Nombre" value="<?php echo $row['art_nombre'];?>"required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="existencia" class="col-sm-2 control-label">Existencia</label>
					<div class="col-sm-10">
						<input type="existencia" class="form-control" id="art_existencia" name="art_existencia" placeholder="Existencia" value="<?php echo $row['art_existencia'];?>">
					</div>
				</div>
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="precio" class="form-control" id="art_precio" name="art_precio" placeholder="Precio" value="<?php echo $row['art_precio'];?>">
					</div>
				</div>
				<div class="form-group">
					<label for="id_proveedor" class="col-sm-2 control-label">Id proveedor</label>
					<div class="col-sm-10">
						<input type="id_proveedor" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Id proveedor"value="<?php echo $row['id_proveedor'];?>">
					</div>
				</div>


			
				
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inart.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>