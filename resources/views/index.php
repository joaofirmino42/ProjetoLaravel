<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="jumbotron">
<h1>Séries</h1>
</div>
<a href="#" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
<?php foreach ($sries as $serie): ?>
<li class="list-group-item"><?= $serie; ?></li>
<?php endforeach; ?>
</ul>
</div>
</body>
</html>