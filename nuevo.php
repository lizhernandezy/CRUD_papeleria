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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_articulo" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_articulo" class="form-control" id="id_articulo" name="id_articulo" placeholder="Id">
					</div>
				</div>
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<input type="marca" class="form-control" id="art_marca" name="art_marca" placeholder="Marca" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="art_nombre" name="art_nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="existencia" class="col-sm-2 control-label">Existencia</label>
					<div class="col-sm-10">
						<input type="existencia" class="form-control" id="art_existencia" name="art_existencia" placeholder="Existencia">
					</div>
				</div>
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="precio" class="form-control" id="art_precio" name="art_precio" placeholder="Precio">
					</div>
				</div>
				<div class="form-group">
					<label for="id_proveedor" class="col-sm-2 control-label">Id proveedor</label>
					<div class="col-sm-10">
						<input type="id_proveedor" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Id proveedor">
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