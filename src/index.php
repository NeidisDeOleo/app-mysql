<?php
$host = 'db';
$user = 'root';
$password = 'root';
$database = 'testdb';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>Hola Mundo desde PHP 🐘 y MySQL 🐬</h1>";

$result = $conn->query("SELECT 'Conectado a la base de datos correctamente' AS mensaje");

if ($result) {
    $row = $result->fetch_assoc();
    echo "<p>" . $row['mensaje'] . "</p>";
} else {
    echo "<p>Error en la consulta</p>";
}

$conn->close();
?>