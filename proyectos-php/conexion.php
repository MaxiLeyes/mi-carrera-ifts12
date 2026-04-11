<?php
// Configuración del Laboratorio-IA - Grupo 1
try {
    // Creamos la conexión a SQLite
    $db = new PDO('sqlite:../bases-de-datos/mascotas.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa al motor de datos.";
} catch (PDOException $e) {
    echo "❌ Error en la conexión: " . $e->getMessage();
}
?>
<?php
try {
    // La ruta sin los dos puntos (..)
    $db = new PDO('sqlite:bases-de-datos/mascotas.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<?php
// Usamos __DIR__ para que PHP encuentre la carpeta sin importar desde donde ejecutas
$ruta_db = __DIR__ . '/../bases-de-datos/mascotas.db';

try {
    $db = new PDO("sqlite:$ruta_db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexion exitosa al Laboratorio-IA";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>