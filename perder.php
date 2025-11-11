<?php
session_start();
$palabra = $_SESSION['palabra'] ?? 'desconocida';
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Has perdido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>💀 Has perdido</h1>
        <p>La palabra era: <strong><?php echo $palabra; ?></strong></p>
        <a class="boton" href="index.php">Intentar de nuevo</a>
    </div>
</body>
</html>
