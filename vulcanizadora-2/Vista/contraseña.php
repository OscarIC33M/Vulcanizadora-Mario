<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modulos/recursos/css/estilos.css">
    <link rel="icon" href="modulos/recursos/img/vulcanizaplus.png">
    <title>Document</title>
</head>
<?php
    include 'barradeNav.php'; ?>
</header>
<body>
 
<form action="codigo.php" method="post">
    <div class="box">
    <h1>Necesitamos verificar su identidad</h1>
    <p>Ingresa tu correo electrónico y te enviaremos un código</p>
    <label for="email">
        <input type="text" id="email" name="email" placeholder="Correo electrónico" required>
    </label>
    <br>
   <input type="submit" value="Enviar"></a>
</div>
<footer>
    <?php
include 'footer.html'; ?>
  </footer>
</form>
</body>
</html>