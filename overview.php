<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>DONUTS DONUTS DONUTS  - I WANT A BUNCH  of DONUTS</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <pre>
        <li> Donut's name : <?= $card['name'] ?></li>
        <li>Donut's flavour :<?= $card['flavour'] ?></li>
        <li> Nobody care about their IDs :D </li>
        </pre>
    <?php endforeach; ?>
</ul>

</body>
</html>