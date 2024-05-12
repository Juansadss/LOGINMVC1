<?php
require_once(__DIR__ . '/../config/config.php'); // Se incluye el archivo de configuración

try {
    // Se intenta establecer una conexión a la base de datos utilizando PDO
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username, $password);
} catch (PDOException $e) {
    // Si hay un error en la conexión, se muestra un mensaje de error
    echo "Error en la conexión: " . $e->getMessage();
}
?>
