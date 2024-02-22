<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_detalleServicio.css">
    <link rel="stylesheet" href="css/estilos_index.css">

    <title>Vulcanizadora</title>
    <meta name="autor" content="Oscar">
</head>
<?php
    include 'barradeNav.php'; ?>

<body>
  
<style>
        /* Estilos para el contenedor de novedades */
        .novedades {
            text-align: center;
            margin-bottom: 20px;
        }
        
        /* Estilos para el título de novedades */
        .novedades h2 {
            font-size: 24px;
            color: #333;
        }
        
        /* Estilos para el texto de novedades */
        .novedades p {
            font-size: 16px;
            color: #666;
        }
        
        /* Estilos para el contenedor del catálogo */
        .Catalogo {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        /* Estilos para cada columna del catálogo */
        .columna {
            flex: 0 0 calc(25% - 20px);
            margin: 10px;
            text-align: center;
        }
        
        /* Estilos para la galería de productos */
        .galeria img {
            width: 100px;
            height: auto;
        }
        
        /* Estilos para la descripción del producto */
        .DescripcionProducto p {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="novedades">
        <h2>Servicios</h2>
        <p>DA CLICK EN EL SERVICIO QUE ESTÉS BUSCANDO</p>
    </div>
    <!-- Fila del catálogo -->
    <div class="Catalogo">
        <!-- Primera columna -->
        <div class="columna">
            <div class="galeria">
                <a href="Consulta_VentaLlanta.php">
                    <img src="modulos/recursos/img/img3.jpg" alt="Venta de Llantas">
                </a>
                <div class="DescripcionProducto">
                    <p>Venta De Llantas</p>
                </div>
            </div>
        </div>
        <!-- Segunda columna -->
        <div class="columna">
            <div class="galeria">
                <a href="Consulta_ReparacionLlantas.php">
                    <img src="modulos/recursos/img/img3.jpg" alt="Reparación de Llantas">
                </a>
                <div class="DescripcionProducto">
                    <p>Reparación De Llantas</p>
                </div>
            </div>
        </div>
       
        <!--Pie de pagina-->
        <footer>
            <?php
        include 'footer.html'; ?>
          </footer>
</body>

</html>
