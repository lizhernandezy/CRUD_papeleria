<?php

require 'conexion.php';

    $id_ventas = $_POST['id_ventas'];
    $ven_fecha= $_POST['ven_fecha'];
    $id_empleado = $_POST['id_empleado'];
	$id_papeleria = $_POST['id_papeleria'];
	$id_articulo = $_POST['id_articulo'];
	

	$sql = "UPDATE ventas SET id_ventas='$id_ventas', ven_fecha='$ven_fecha', id_empleado='$id_empleado',
	 id_papeleria='$id_papeleria', id_articulo='$id_articulo' WHERE id_ventas='$id_ventas'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="inven.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

