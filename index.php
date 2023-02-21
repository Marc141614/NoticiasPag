<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    
</head>
<body>
   <form action="validar.php" method="post">
   <h1>Iniciar sesión</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
   
   </form> 
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesion</title>
	<link rel="stylesheet" href="css/log.css">
</head>
<body>
	<div class="container">
		<h1 class="label">Sesion</h1>
		<form action="validar.php" class="login_form" method="post" onsubmit="return validated()">
			<div class="font">Usuario</div>
			<input autocomplete="off" type="text" name="usuario">
			<div id="email_error">Por favor ingresa tu usuario</div>
			<div class="font font2">Contraseña</div>
			<input type="password" name="contraseña">
			<div id="pass_error">Por favor ingresa tu contraseña</div>
			<button type="submit">Ingresar</button>
		</form>
	</div>	

</body>
</html>-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/log.css">
  </head>
  <body>
    <form action="validar.php" method="post">
    <section class="form-login">
      <h5>Iniciar sesion</h5>
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
      <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" value="Ingresar">
    

    </section>

  </body>
</html>