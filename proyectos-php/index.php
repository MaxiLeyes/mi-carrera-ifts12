<?php
/**
 * IFTS 12 - Técnicas de Programación 2026
 * Clase 1 Parte 3: Arrays Multidimensionales y Persistencia
 */

// 1. Definición de la estructura de datos (Lógica)
function obtenerNombres() {
    $Nombres = array();

    $Nombres[0][0] = "Martin";
    $Nombres[0][1] = "Lopez";

    $Nombres[1][0] = "Ana";
    $Nombres[1][1] = "Gonzalez";

    $Nombres[2][0] = "Maria";
    $Nombres[2][1] = "Gonzalez";

    $Nombres[3][0] = "German";
    $Nombres[3][1] = "Perez";

    return $Nombres;
}

// 2. Llamada a la función para cargar los datos
$listaNombres = obtenerNombres();
$instituto = "IFTS 12 - Técnicas de Programación";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio-IA - Clase 1</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .contenedor { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; }
        .dato { margin-bottom: 10px; padding: 5px; border-bottom: 1px solid #eee; }
    </style>
</head>
<body>

    <div class="contenedor">
        <h1><?php echo $instituto; ?></h1>
        <hr>

        <div class="dato">
            <strong>Primer registro:</strong> 
            <?php echo "Hola " . $listaNombres[0][0] . " " . $listaNombres[0][1]; ?>
        </div>

        <div class="dato">
            <strong>Segundo registro:</strong> 
            <?php echo "Hola " . $listaNombres[1][0] . " " . $listaNombres[1][1]; ?>
        </div>

        <div class="dato">
            <strong>Tercer registro:</strong> 
            <?php echo "Hola " . $listaNombres[2][0] . " " . $listaNombres[2][1]; ?>
        </div>

        <div class="dato">
            <strong>Cuarto registro:</strong> 
            <?php echo "Hola " . $listaNombres[3][0] . " " . $listaNombres[3][1]; ?>
        </div>
    </div>

</body>
</html>