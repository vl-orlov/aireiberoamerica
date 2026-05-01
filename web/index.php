<?php include __DIR__ . '/includes/landing.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aireiberoamerica</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/i18n.js" defer></script>
</head>
<body data-i18n-page="landing"<?= isset($body_class) && $body_class !== '' ? ' class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>

<?
include __DIR__ . '/includes/landing.php';
?>

</body>
</html>
