<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('El formulario debe enviarse mediante POST.');
}

require_once __DIR__ . '/conexion.php';
|
$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$fecha_nacimiento = trim($_POST['fecha_nacimiento'] ?? '');

if (empty($nombre) || empty($correo) || empty($fecha_nacimiento)) {
    exit('Por favor, completa todos los campos del formulario.');
}

try {
    $sql = "INSERT INTO formularios (nombre, correo, fecha_nacimiento) VALUES (:nombre, :correo, :fecha_nacimiento)";
    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':nombre' => $nombre,
        ':correo' => $correo,
        ':fecha_nacimiento' => $fecha_nacimiento
    ]);

    $exito = true;
} catch (PDOException $e) {
    $exito = false;
    $error_bd = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Información del Registro</h2>

    <?php if (isset($exito) && $exito): ?>
        <div class="alert alert-success">
            <strong>¡Datos insertados a la tabla de la base de datos correctamente!</strong>[cite: 1]
        </div>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($fecha_nacimiento, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php else: ?>
        <div class="alert alert-danger">
            <strong>Error al guardar en la base de datos:</strong> <?php echo $error_bd ?? 'Error desconocido'; ?>
        </div>
    <?php endif; ?>

    <br>
    <a href="formulario.php" class="btn btn-secondary">Volver al formulario</a>
</body>
</html>