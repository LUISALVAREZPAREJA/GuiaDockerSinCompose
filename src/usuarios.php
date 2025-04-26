<?php
// Asegúrate de que no hay espacios ni saltos de línea antes de esta línea
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Ejecutar la consulta
    $conexion->query("INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')");

    // Redirigir al index.php
    header("Location: index.php");
    exit(); // ← siempre recomendable después de usar header()
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar usuario</title>
</head>
<body>

<h1>Agregar usuario</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
