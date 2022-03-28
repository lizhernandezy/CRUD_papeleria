<?php
require 'conexion.php';
	
	$where = "";

	if(!empty($_POST))
	{

     $valor = $_POST['campo'];
     if(!empty($valor)){
       $where ="WHERE ven_fecha LIKE '%$valor'";

     }

	}

	$sql = "SELECT * FROM ventas $where";
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

<h2 style="text-align:center">Proyecto</h2>
</div>
<div class="row">
<a href="nuevoven.php" class="btn btn-primary">Nuevo registro</a>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Fecha: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
		<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Fecha</th>
							<th>Id Empleado</th>
							<th>Id papeleria</th>
							<th>Id articulo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_ventas']; ?></td>
								<td><?php echo $row['ven_fecha']; ?></td>
								<td><?php echo $row['id_empleado']; ?></td>
								<td><?php echo $row['id_papeleria']; ?></td>
								<td><?php echo $row['id_articulo']; ?></td>
															
							
							<td><a href="modificaven.php?id_ventas=<?php echo $row['id_ventas']; ?>"><class="btn btn-primary">Change</a></td>

							<td><a href="#" data-href="eliminarventa.php?id_ventas=<?php echo $row['id_ventas']; ?>"data-toggle="modal" data-target="#confirm-delete"><class="btn btn-primary">Delete</a></td>

							
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		

<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>