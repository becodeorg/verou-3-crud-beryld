<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOO NUTS !</title>
</head>
<body>
<div id="theD">
    <img id="theDletter" src="./images/letter-d.png">
    <img id="theOletter" src="images/letter-o.png">
</div>

    <img id="theNuts" src="images/nuts.png">

<h3>DONUTS DONUTS DONUTS  - I WANT A BUNCH  of DONUTS</h3>

<ul class="listing-cards">
    <?php foreach ($cards as $card) : ?>
<!--        <pre>-->

        <li>  <b style= color:hotpink><?= $card['name'] ?></b></li>
        <li> Donut's flavour : <b><?= $card['flavour'] ?></b></li>
        <li> Nobody care about their IDs  but this one is <?php if( $card['vegan']){ echo "vegan";} else echo "not vegan";?> </li>
            <a href="http://localhost/workingspace/crud/?action=editing&id=<?= $card['id']?>&name=<?=$card['name']?>&flavour=<?= $card['flavour']?>"  style="background-color: #EA4C89;border-radius: 8px;border-style: none;box-sizing: border-box;color: #FFFFFF;cursor: pointer;display: inline-block;font-family: Haas Grot Text R Web, Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;font-weight: 500;height: 40px;line-height: 20px;list-style: none;margin: 0;outline: none;padding: 11px 16px;position: relative;text-align: center;text-decoration: none;transition: color 100ms;vertical-align: baseline;user-select: none;">Edit</a>
            <a href="http://localhost/workingspace/crud/?action=clickDelete&id=<?= $card['id']?>&name=<?=$card['name']?>&flavour=<?= $card['flavour']?>"  style="background-color: #EA4C89;border-radius: 8px;border-style: none;box-sizing: border-box;color: #FFFFFF;cursor: pointer;display: inline-block;font-family: Haas Grot Text R Web, Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;font-weight: 500;height: 40px;line-height: 20px;list-style: none;margin: 0;outline: none;padding: 11px 16px;position: relative;text-align: center;text-decoration: none;transition: color 100ms;vertical-align: baseline;user-select: none;">Scrap</a>

<!--        </pre>-->
    <?php endforeach; ?>
</ul>
<form method="get" action="">
    <h3>Create your Donut ! </h3>
    <p>Please enter the name of the new Donut <input type="text" name="donutName">  </p>
    <p>please enter the Flavour  <input type="text" name="donutFlavour"></p>
    <p><input type="checkbox" name="veganista"> Check the box if  it is a Vegan Donut ?</p>
    <p><input type="submit" name="action" value="create"></p>
</form>
</body>
</html>