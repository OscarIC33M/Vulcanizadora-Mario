<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos_detalleServicio.css">
    <link rel="stylesheet" href="css/estilos_index.css">
</head>
<?php
    include 'barradeNav.php'; ?>
</header>
<body> 
    
    <style>
    /* Estilos para la columna detalle */
    .columnaDetalle {
        background-color: #f5f5f5;
        border: 2px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        margin: 20px auto;
        max-width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para el texto dentro de la columna detalle */
    .desDetalle {
        font-family: Arial, sans-serif;
        color: #333;
    }
    
    /* Estilos para el título */
    .desDetalle p:first-child {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    /* Estilos para la lista de elementos */
    .desDetalle p:nth-child(2) {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    /* Estilos para el precio */
    #precio {
        font-size: 28px;
        color: #007bff;
        font-weight: bold;
    }
</style>
      
            <div class="columnaDetalle">
                    <div class="desDetalle">
                        <p>ALINEACION Y BALANCEO</p>
                        <p> Incluye <br>
                            Calibracion de  las 4 Llantas. <br>
                            Revision de frenos. <br>
                            Revision de Bateria. <br>
                            <br>                                           
                        </p>
                        <p id="precio">$600.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        
       
        <!--Pie de pagina-->
       
</body>
</html>