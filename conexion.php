<?php
// Configuración predeterminada de Laragon: MySQL en localhost, usuario root y
// contraseña vacía. Cambia estos valores cuando definas tu base de datos.
$host = '127.0.0.1';
$db = 'formulario';
$usuario = 'root';
$contrasena = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opciones = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $conn = new PDO($dsn, $usuario, $contrasena, $opciones);
} catch (PDOException $e) {
    exit('No se pudo conectar con la base de datos: ' . $e->getMessage());
}
?>