<!DOCTYPE html>
<html>
<head>
	<title>Resgistrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<form method="post">
		<h1>¡Suscribete!</h1>
		<input type="text" name="usuario" placeholder="Nombre de Usuario">
		<input type="password" name="password" placeholder="Contraseña">
		<input type="submit" name="register">
		<a href="Login.html" class="boton-regresar">Regresar</a>
	</form>
	<?php
	include("registrar2.php");  
	?>
</body>
</html>
