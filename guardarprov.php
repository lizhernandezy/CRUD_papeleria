<?php
require 'conexion.php';
    $id_proveedor = $_POST['id_proveedor'];
    $prov_nombre = $_POST['prov_nombre'];
    $prov_ap_paterno = $_POST['prov_ap_paterno'];
    $prov_ap_materno = $_POST['prov_ap_materno'];  
    $prov_edad = $_POST['prov_edad'];
    $prov_telefono = $_POST['prov_telefono'];
    $prov_genero = $_POST['prov_genero']; 

	$sql = "INSERT INTO proveedores (id_proveedor, prov_nombre, prov_ap_paterno, prov_ap_materno, prov_edad, prov_telefono, prov_genero) VALUES ('$id_proveedor', '$prov_nombre', '$prov_ap_paterno', '$prov_ap_materno', '$prov_edad', '$prov_telefono', '$prov_genero')";
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="inproveedores.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>