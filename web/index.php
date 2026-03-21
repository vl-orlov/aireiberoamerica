<?php include __DIR__ . '/includes/landing.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aireiberoamerica</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body<?= isset($body_class) && $body_class !== '' ? ' class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>

<?
include __DIR__ . '/includes/landing.php';
?>

</body>
</html>
