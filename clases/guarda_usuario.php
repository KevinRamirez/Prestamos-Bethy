<?php 
	
	require('conexion.php');
	
	$nombre=$_POST['Nombre'];
	$apellido_paterno=$_POST['Apelll_paterno'];
	$apellido_materno=$_POST['Apell_materno'];
	$telefono=$_POST['Telefono'];
	$direccion=$_POST['Dirección'];
	$dni=$_POST['DNI'];

	$query="INSERT INTO cliente (Nombre, Apelll_paterno, Apell_materno,Telefono,Dirección,DNI) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$telefono','$direccion','$dni')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar cliente</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Cliente guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="../clientes.php">Regresar</a>
			
		</center>
	</body>
	</html>	