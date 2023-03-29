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
      <p><a href="registrate.php">Registrate.</a></p>
      <p><a href="terminos.php">Leer términos y condiciones.</a></p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="js/alerta.js"></script>
  </body>
</html>