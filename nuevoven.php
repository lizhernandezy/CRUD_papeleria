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
			
			<form class="form-horizontal" method="POST" action="guardarven.php" autocomplete="off">

				<div class="form-group">
					<label for="id_ventas" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
						<input type="id_ventas" class="form-control" id="id_ventas" name="id_ventas" placeholder="Id">
					</div>
				</div>
            
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="fecha" class="form-control" id="ven_fecha" name="ven_fecha" placeholder="Fecha">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="id_empleado" class="col-sm-2 control-label">Id empleado</label>
					<div class="col-sm-10">
						<input type="id_empleado" class="form-control" id="id_empleado" name="id_empleado" placeholder="Id empleado">
					</div>
				</div>

				<div class="form-group">
					<label for="id_papeleria" class="col-sm-2 control-label">Id papeleria</label>
					<div class="col-sm-10">
						<input type="id_papeleria" class="form-control" id="id_papeleria" name="id_papeleria" placeholder="Id papeleria">
					</div>
				</div>

				

				<div class="form-group">
					<label for="id_articulo" class="col-sm-2 control-label">Id articulo</label>
					<div class="col-sm-10">
						<input type="id_articulo" class="form-control" id="id_articulo" name="id_articulo" placeholder="Id articulo">
					</div>
				</div>

			
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="inven.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>