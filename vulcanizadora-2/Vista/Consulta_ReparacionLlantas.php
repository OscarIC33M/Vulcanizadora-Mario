<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="" content="width=device-width, initial-scale=1.0">
    <title>Vulcanizadora</title>
    <link rel="stylesheet" href="css/estilos_index.css">
    <link rel="stylesheet" href="css/estilos_detalleServicio.css">
</head>
<?php
    include 'barradeNav.php'; ?>
</header>
<body>
   
<style>
        /* Estilos para la fila de detalle */
        .fila_Detalle {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        /* Estilos para cada columna de detalle */
        .columnaDetalle {
            flex: 0 0 calc(50% - 20px);
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Estilos para la galería de detalle */
        .galeriaDetalle img {
            width: 200px;
            height: auto;
           
        }
        
        /* Estilos para la descripción de detalle */
        .desDetalle {
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        /* Estilos para el precio */
        #precio {
            font-size: 24px;
            color: #007bff;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Primer Producto -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/img1.jpg" alt="Reparacion 1">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Cambio de Llantas</p>
                    <p>Especificaciones:<br>
                        Contamos con llantas nuevas y usadas para realizar los cambios,
                        así como hacemos el servicio con llanta de refacción con la que cuenta el cliente.
                    </p>
                    <p id="precio">$262.19</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Segundo Producto -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/img4.jpg" alt="Reparacion 2">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Reparación de Llantas</p>
                    <p>Especificaciones:<br>
                        Reparamos tus llantas de cualquier imperfección.
                    </p>
                    <p id="precio">$300.00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <!--Pie de pagina-->
    <footer class="footer">
        <footer>
            <?php
        include 'footer.html'; ?>
          </footer>

    </footer>
</body>

</html>