<?php

require 'conexion.php';

    $id_clientes = $_POST['id_clientes'];
    $clien_nombre = $_POST['clien_nombre'];
    $clien_ap_paterno = $_POST['clien_ap_paterno'];
    $clien_ap_materno = $_POST['clien_ap_materno'];
    $clien_telefono = $_POST['clien_telefono'];

	$sql = "UPDATE clientes SET id_clientes='$id_clientes', clien_nombre='$clien_nombre', clien_ap_paterno='$clien_ap_paterno', clien_ap_materno='$clien_ap_materno', clien_telefono='$clien_telefono' WHERE id_clientes='$id_clientes'";
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
					
					<a href="inclientes.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>