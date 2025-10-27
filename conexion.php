<?php
// Datos de conexión
$host = "localhost";
$user = "root";     // usuario por defecto en XAMPP
$pass = "";         // normalmente sin contraseña
$db = "noticlase";  // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
  die("Error al conectar con la base de datos: " . $conn->connect_error);
}
?>
