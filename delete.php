
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

<h1>DONUTS DONUTS DONUTS  - I WANT TO SCRAP the DONUTS</h1>


<form method="get" action="">
    <h3>Delete your Donut <?php  print_r ("$_GET[name]");?> ! </h3>
    <p>Are you sure you want to delete this donut ?</p>
    <p><input type="submit" name="action" value="delete" ></p>
    <p><input type="submit" name="action" value="cancel"></p>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
</form>
</body>
</html>

