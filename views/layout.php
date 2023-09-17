<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super site</title>
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
</head>

<body>
    <div class="container">
        <?= $content ?>
    </div>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'app.js' ?>"></script>
</body>

</html>
