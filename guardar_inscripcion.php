<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Recibir los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  // Preparar y ejecutar la consulta
  $sql = "INSERT INTO inscripciones (nombre, correo, mensaje) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $nombre, $correo, $mensaje);

  if ($stmt->execute()) {
    // Redirigir a la página de interacción si se guarda correctamente
    header("Location: interactuar.html");
    exit();
  } else {
    echo "Error al guardar los datos: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
?>
