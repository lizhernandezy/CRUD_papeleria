<?php

require 'conexion.php';

    $id_empleado = $_POST['id_empleado'];
    $emp_nombre= $_POST['emp_nombre'];
    $emp_ap_paterno = $_POST['emp_ap_paterno'];
	$emp_ap_materno = $_POST['emp_ap_materno'];
	$emp_edad = $_POST['emp_edad'];
	$emp_telefono = $_POST['emp_telefono'];
	$emp_genero = $_POST['emp_genero'];

	$sql = "UPDATE empleados SET id_empleado='$id_empleado', emp_nombre='$emp_nombre', emp_ap_paterno='$emp_ap_paterno',emp_ap_materno='$emp_ap_materno', emp_edad='$emp_edad', emp_telefono='$emp_telefono',emp_genero='$emp_genero' WHERE id_empleado='$id_empleado'";
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
					
					<a href="inempleados.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>