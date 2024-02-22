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
            width: 100%;
            height: auto;
            display: block;
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
    <!-- Detalle Producto 1 -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/IMG_4833.jpg" alt="Firestone 205/55r16 91h Ft140">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Firestone 205/55r16 91h Ft140</p>
                    <p>Especificaciones:<br>
                        Estabilidad y control.
                        Gracias a su buen agarre, presenta un desempeño óptimo asegurado y se adapta a la usabilidad de tu vehículo.
                        Alta eficiencia.
                        La seguridad que buscabas.
                    </p>
                    <p id="precio">$2,262.19</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Detalle Producto 2 -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/img6.jpg" alt="Cooper">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Cooper</p>
                    <p>Especificaciones:<br>
                        Llanta Cooper R16 205/55.
                        En nuevo neumático Todo Terreno de Cooper! Años de investigación y desarrollo 
                        se conjuntan en un neumático con excelente desempeño en cualquier terreno.
                        Su compuesto y patrón de la banda de rodamiento aumentan la tracción manteniendo 
                        el rendimiento en carretera gracias a sus laminillas Zig-Zag que proporcionan estabilidad, 
                        control y reducen la retención de piedras.
                    </p>
                    <p id="precio">$2,219.00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalle Producto 3 -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/img1.jpg" alt="Tornel Turbo">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Tornel Turbo</p>
                    <p>Especificaciones:<br>
                        Llanta 185/60r14 82t tornel turbo.
                        Aumenta la estabilidad en línea recta, mejora la tracción en terrenos secos y mojados
                        y aumenta el frenado. La Tornel Turbo combina un agarre excelente con un buen manejo 
                        en pavimento sobre piso mojado, un menor ruido y mejor fuerza lateral. Neumático optimizado 
                        para la conducción económica.
                    </p>
                    <p id="precio">$1,324.99</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalle Producto 4 -->
    <div class="fila_Detalle">
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <img src="modulos/recursos/img/img4.jpg" alt="Sumaxx">
            </div>
        </div>
        <div class="columnaDetalle">
            <div class="galeriaDetalle">
                <div class="desDetalle">
                    <p>Sumaxx</p>
                    <p>Especificaciones:<br>
                        Llanta Sumaxx All Terrain 275/70R17 Negro.
                        El neumático está diseñado para manejar tanto en carretera como fuera de ella.
                        Por lo que es preferido por los propietarios de SUV que persiguen el aspecto más agresivo
                        o necesitan de manejar en caminos de tierra o no preparados, y es el neumático perfecto para
                        camionetas y 4X4. Especificaciones: Índice de de durabilidad: 400, Índice de Velocidad:
                        190, Índice de Carga: 1060 kg, Tracción: A, Temperatura: A.
                    </p>
                    <p id="precio">$3,699.00</p>
                </div>
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