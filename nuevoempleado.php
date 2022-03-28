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
			
			<form class="form-horizontal" method="POST" action="guardarempleado.php" autocomplete="off">
				
				<div class="form-group">
					<label for="id_empleado" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_empleado" class="form-control" id="id_empleado" name="id_empleado" placeholder="Id empleado">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="emp_nombre" name="emp_nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="appat" class="col-sm-2 control-label">Apellido paterno</label>
					<div class="col-sm-10">
						<input type="appat" class="form-control" id="emp_ap_paterno" name="emp_ap_paterno" placeholder="Apellido paterno" required>
					</div>
				</div>

				<div class="form-group">
					<label for="apmat" class="col-sm-2 control-label">Apellido materno</label>
					<div class="col-sm-10">
						<input type="apmat" class="form-control" id="emp_ap_materno" name="emp_ap_materno" placeholder="Apellido materno" required>
					</div>
				</div>

				<div class="form-group">
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="edad" class="form-control" id="emp_edad" name="emp_edad" placeholder="Edad">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="emp_telefono" class="form-control" id="emp_telefono" name="emp_telefono" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="genero" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<input type="genero" class="form-control" id="emp_genero" name="emp_genero" placeholder="Genero">
					</div>
				</div>			
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inempleados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>