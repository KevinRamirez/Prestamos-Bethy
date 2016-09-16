<html>
	<head>
		<title>Nuevo Cliente</title>
	</head>
	<body>
		
		<center><h1>Nuevo Cliente</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
			<table width="50%">
				<tr>
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="Nombre" size="25" /></td>
				</tr>
				<tr>
					<td><b>Apelll_paterno</b></td>
					<td><input type="text" name="Apelll_paterno" size="25" /></td>
				</tr>
				<tr>
					<td><b>Apell_materno</b></td>
					<td><input type="text" name="Apell_materno" size="25" /></td>
				</tr>
				<tr>
					<td><b>Telefono</b></td>
					<td><input type="text" name="Telefono" size="25" /></td>
				</tr>
				<tr>
					<td><b>Dirección</b></td>
					<td><input type="text" name="Dirección" size="25" /></td>
				</tr>
				<tr>
					<td><b>DNI</b></td>
					<td><input type="text" name="DNI" size="25" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						