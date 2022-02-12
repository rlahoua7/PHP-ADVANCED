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
    $student  = array(
        "voornaam"    => "Jan",
        "achternaam"  => "Janssen",
        "klas"        => "9A",
        "Leeftijd"    => 17,
        "Woonplaats"  => "Amstelveen"
      );
      foreach($student as $key => $value) {
        echo "mijn $key is $value <br>";
      }
      
    ?>
</body>
</html>