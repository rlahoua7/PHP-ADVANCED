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
    $persoon = array ("voornaam" => "Rayan", "achternaam" => "Lahoua", "leeftijd" => "17", "opleiding" => "Software-developer");
    echo "persoon:";
    echo "<br>";
    echo "voornaam : ". $persoon["voornaam"];
    echo "<br>";
    echo "achternaam ; ". $persoon["achternaam"];
    echo "<br>";
    echo "leeftijd ; ". $persoon["leefijd"].  " 17 " ;
    echo "<br>";
    echo "opleiding ; ". $persoon["opleiding"];
?>
</body>
</html>