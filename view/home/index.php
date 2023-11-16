<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Home</h1>

<?php foreach ($projects as $project) : ?>
    <h2><?= $project->name ?></h2>
    <p><?= $project->description ?></p>

<?php endforeach;
?>

</body>
</html>