<?php
	require('conexion.php');
	
	$nombre = $_POST['Nombre'];
	
	$query="SELECT Nombres,Apelll_paterno,Apell_materno,Telefono,`Dirección`,DNI FROM cliente WHERE  Nombre LIKE %$nombre%'";
	
	$resultado=$mysqli->query($query);
	
	$rows = $resultado->num_rows;
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Usuarios</h1></center>
		
		<a href="nuevo.php">Nuevo usuario</a>
		<p></p>
		<a href="buscar.php">Buscar usuario</a>
		<p></p>
		<a href="../clientes.php">Inicio</a>
		<p></p>
		
		<?php if($rows > 0) { ?>

			<table border=3 width="100%">
				<thead>
				<tr>
					<td><b>Nombres</b></td>
					<td><b>Apelll_paterno</b></td>
					<td><b>Apell_materno</b></td>
					<td><b>Telefono</b></td>
					<td><b>Dirección</b></td>
					<td><b>DNI</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
				<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['Nombres'];?>
						</td>
						<td>
							<?php echo $row['Apelll_paterno'];?>
						</td>
						<td>
							<?php echo $row['Apell_materno'];?>
						</td>
						<td>
							<?php echo $row['Telefono'];?>
						</td>
						<td>
							<?php echo $row['Dirección'];?>
						</td>
						<td>
							<?php echo $row['DNI'];?>
						</td>
						<td>
							<a href="modificar.php?id=<?php echo $row['Cliente_ID'];?>">Modificar</a>
						</td>
						<td>
							<a href="eliminar.php?id=<?php echo $row['Cliente_ID'];?>">Eliminar</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		<?php } else { ?>
		<h1>No se encontraron usuarios</h1>
		<?php } ?>
		</body>
	</html>	
	
