<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modulos/recursos/css/estilos.css">
    <link rel="icon" href="modulos/recursos/img/vulcanizaplus.png">
    <title>Document</title>
</head>
<header>
<?php
    include 'barradeNav.php'; ?>
</header>
<body>
    
<form action="clientes.php" method="post">
    <div class="box">
    <h1>Necesitamos verificar su identidad</h1>
    <p>Ingresa el código</p>
    <label for="codigo">
        <input type="text" id="codigo" name="codigo" placeholder="codigo" required>
    </label>
    <br>
   <input type="submit" value="Confirmar">
</div>
</form>
<footer>
    <?php
include 'footer.html'; ?>
  </footer>
</body>
</html>