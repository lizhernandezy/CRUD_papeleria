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
			
			<form class="form-horizontal" method="POST" action="guardarprov.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_proveedor" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_proveedor" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Id">
					</div>
				</div>
                
                
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="prov_nombre" name="prov_nombre" placeholder="Nombre">
					</div>
				</div>
				
				<div class="form-group">
					<label for="appat" class="col-sm-2 control-label">Apellido paterno</label>
					<div class="col-sm-10">
						<input type="appat" class="form-control" id="prov_ap_paterno" name="prov_ap_paterno" placeholder="Apellido paterno">
					</div>
				</div>
				<div class="form-group">
					<label for="apmat" class="col-sm-2 control-label">Apellido materno</label>
					<div class="col-sm-10">
						<input type="apmat" class="form-control" id="prov_ap_materno" name="prov_ap_materno" placeholder="Apellido materno">
					</div>
				</div>
				
				<div class="form-group">
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="edad" class="form-control" id="prov_edad" name="prov_edad" placeholder="Edad">
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="telefono" class="form-control" id="prov_telefono" name="prov_telefono" placeholder="Telefono">
					</div>
				</div>
				<div class="form-group">
					<label for="genero" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<input type="genero" class="form-control" id="prov_genero" name="prov_genero" placeholder="Genero">
					</div>
				</div>

			
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inproveedores.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>