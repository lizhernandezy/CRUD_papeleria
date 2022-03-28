<?php

require 'conexion.php';

    $id_papeleria = $_POST['id_papeleria'];
    $pape_nombre= $_POST['pape_nombre'];
    $pape_permiso = $_POST['pape_permiso'];
	$pape_direccion = $_POST['pape_direccion'];
	$pape_telefono = $_POST['pape_telefono'];
	$id_area = $_POST['id_area'];
	$id_empleado = $_POST['id_empleado'];
    

	$sql = "UPDATE papeleria SET id_papeleria='$id_papeleria', pape_nombre='$pape_nombre', pape_permiso='$pape_direccion', pape_telefono='$pape_telefono', id_area='$id_area', id_empleado='$id_empleado' WHERE id_papeleria='$id_papeleria'";
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
					
					<a href="inpape.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

