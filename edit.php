
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOO NUTS !</title>
</head>
<body>

<h1>DONUTS DONUTS DONUTS  - I WANT TO UPDATE the DONUTS</h1>


<form method="get" action="">
    <h3>Update your Donut <?php  print_r ("$_GET[id]");?>! </h3>
    <p>Please enter the new name    <input type="text" name="donutNewName">  </p>
    <p>please enter the new flavour  <input type="text" name="donutNewFlavour"></p>
    <?= var_dump( $_GET);?>
    <p><input type="checkbox" name="veganista"> Check the box if  it is a Vegan Donut ?</p>
    <p><input type="submit" name="update" value="update"></p>
</form>
</body>
</html>

