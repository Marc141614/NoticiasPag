<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuario</title>
    
    <link rel="stylesheet" href="css/log2.css">

</head>
<body>
	<h1>Registro de Usuario</h1>
	<form action="conexionreg.php" method="post">
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario"><br>

		<label for="contraseña">Contraseña:</label>
		<input type="password" id="contraseña" name="contraseña"><br>

		<label for="edad">Edad:</label>
		<input type="number" id="edad" name="edad"><br>

		<label for="correo">Correo electrónico:</label>
		<input type="email" id="correo" name="correo"><br>
        <p><a href="index.php">Volver al inicio de sesión.</a></p>
        <p><a href="politicapriv.php">Leer políticas de privacidad.</a></p>

		<input type="submit" value="Registrarse">

	</form>
</body>
</html>
