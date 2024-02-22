
<!DOCTYPE html>
<html lang="en">
<!--icocnos -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="modulos/recursos/css/estilos.css">
    <link rel="icon" href="modulos/recursos/img/vulcanizaplus.png">
    <title>Document</title>
</head>
<!--cierra de iconos y enlces extras-->
<header>
<?php
    include 'barradeNav.php'; ?>
</header>
<body>    

 


 <!--Cierra encabezado y navegador -->
<div class="col-8 p-4">
<table class="table">
<br><br><br>
  <h1>CLIENTES</h1>
  <thead clas="bg-info">
    <tr>
    <th scope="col">ID:</th>
      <th scope="col">Nombre:</th>
      <th scope="col">Apellido:</th>
      <th scope="col">Fecha Nacimiento:</th>
      <th scope="col">Correo:</th>
      <th scope="col">Contrasena:</th>
      <th scope="col">Foto</th>
      <th scope="col">Operaciones:</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th></th>
      <td>Nombre</td>
      <td>apellidos</td>
      <td>fecha_nac</td>
      <td>correo</td>
      <td>contraseña</td>
      <td>Foto</td>
      <td>
        <a href="modificar_cliente.php?id" class="btn btn-small btn-warning"><i class="fas fa-pen"></i></a>
        <a href="index3.php?id" class="btn btn-small btn-danger"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
    


     </tbody>
   </table>
  </div>
  <a href="#" class="btn btn-primary">Guardar</a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <footer>
    <?php
include 'footer.html'; ?>
  </footer>
  </body>
</html>
