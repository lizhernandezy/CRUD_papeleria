<?php

require 'conexion.php';

    $id_articulo = $_POST['id_articulo'];
    $art_marca= $_POST['art_marca'];
    $art_nombre = $_POST['art_nombre'];
	$art_existencia = $_POST['art_existencia'];
	$art_precio = $_POST['art_precio'];
	$id_proveedor = $_POST['id_proveedor'];

	$sql = "UPDATE articulos SET id_articulo='$id_articulo', art_marca='$art_marca', art_nombre='$art_nombre', art_existencia='$art_existencia', art_precio='$art_precio', id_proveedor='$id_proveedor' WHERE id_articulo='$id_articulo'";
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
					
					<a href="inart.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

