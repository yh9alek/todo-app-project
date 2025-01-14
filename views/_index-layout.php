<?php use app\helpers\CSS; ?>

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
        <link rel="stylesheet" href="<?= CSS::get($_SERVER['REQUEST_URI']) ?>">
    </head>
    <body>
        <p>Login layout</p>
        <main>
            <?= $module ?>
        </main>
    </body>
</html>