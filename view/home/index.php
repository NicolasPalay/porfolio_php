<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include __DIR__ . '\..\_include\navigation.php'; ?>
<header class="np-container np-d-flex">
    <div class="np-home-logo">
        <h2 class="np-home-portefolio">Portefolio</h2>
        <h1>Nicolas Palay</h1>
        <h2 class="np-home-developper">
            <a href="./media/cv-nicolas-palay-php-2023.pdf" target="_blank">
                <span class="material-symbols-outlined">download</span>Développeur Web
            </a>
        </h2>
    </div>

    <div className="np-current-project"></div>
</header>
<h1>Home</h1>

<?php foreach ($projects as $project) : ?>
    <h2><?= $project->name ?></h2>
    <p><?= $project->description ?></p>
    <?php endforeach; ?>

</body>
</html>