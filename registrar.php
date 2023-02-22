<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="css/regstyle.css">
  </head>
  <body>
    <h1>Registro de usuario</h1>
    <form action="validarReg.php" method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario">
      <label for="contraseña">Contraseña:</label>
      <input type="password" id="contraseña" name="contraseña">
      <button type="submit">Registrar</button>
      <p><a href="index.php">Iniciar Sesión</a></p>
    </form>
  </body>
</html>
