<?php use app\helpers\Asset; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo App</title>
        <link rel="shortcut icon" href="/assets/sources/web-icon.PNG" type="image/x-png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/_index-layout.css">
        <link rel="stylesheet" href="<?= Asset::get($_SERVER['REQUEST_URI'], 'css') ?>">
    </head>
    <body>
        <p>Login layout</p>
        <main>
            <?= $module ?> # El módulo en memoria se renderiza aquí
        </main>
        <script src="<?= Asset::get($_SERVER['REQUEST_URI'], 'js') ?>"></script>
    </body>
</html>