<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<ul>';
  $dagen = array("<li>maandag</li>", "<li>dinsdag</li>", "<li>woensdag</li>", "<li>donderdag</li>", "<li>vrijdag</li>", "<li>zaterdag</li>", "<li>zondag</li>");

  foreach ($dagen as $value){
      echo $value;
  }
    echo '</ul>';
?>
</body>
</html>