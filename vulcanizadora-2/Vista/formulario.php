<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="modulos/recursos/img/vulcanizaplus.png">
  <title>Formulario Cliente</title>
  <link rel="stylesheet" href="modulos/recursos/css/estilos.css">
 
</head>
<header>
<?php
    include 'barradeNav.php'; ?>
</header>
<body>

  <div class="form-container">
    <h2>Formulario Cliente</h2>
    <form action="inicio_sesion.php" method="post">
      <div class="form-group">
        <label for="ap">Apellido Paterno</label>
        <input type="text" name="ap" required>
      </div>
      <div class="form-group">
        <label for="nom">Nombres</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label for="contac">Contacto</label>
        <input maxlength="10" type="tel" required>
      </div>
      <div class="form-group">
        <label for="am">Apellido Materno</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label for="dic">Dirección</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" required>
      </div>
      <div class="form-group">
        <label>Selecciona una foto</label>
        <input type="file">
      </div>
      <div class="form-group">
        <input type="submit" name="Enviar" value="Enviar">
      </div>
    </form>
    
  </div>

  <footer>
    <?php
include 'footer.html'; ?>
  </footer>
</body>
</html>


