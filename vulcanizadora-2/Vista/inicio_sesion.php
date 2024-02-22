<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="modulos/recursos/css/estilos.css">
    <link rel="icon" href="modulos/recursos/img/vulcanizaplus.png">
  </head>
    <header>
<?php
    include 'barradeNav.php'; ?>
</header>
  <body>

   

    <div class="login-box">
      
      <img src="modulos/recursos/img/vulcanizaplus.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar sesion</h1>
      <form action="clientes.php" method="post" >
        <!-- USERNAME INPUT -->
     
        <input type="text" placeholder="Correo" required>
        <!-- PASSWORD INPUT -->
       
        <input type="password" placeholder="Contraseña" required>
         Recordar contraseña<input type="checkbox" > <br>
        <input type="submit" value="Iniciar sesion"><br>
       
        <a href="formulario.php">¿No tienes una cuenta?</a><br>
        <a href="contraseña.php">¿Perdiste tu contraseña?</a>
      </form>
    </div>

  </body>
</html>
