<?php
session_start();
$palabra = $_SESSION['palabra'] ?? 'desconocida';
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🎉 ¡Felicidades!</h1>
        <p>Has adivinado la palabra: <strong><?php echo $palabra; ?></strong></p>
        <a class="boton" href="index.php">Jugar de nuevo</a>
    </div>
</body>
</html>
