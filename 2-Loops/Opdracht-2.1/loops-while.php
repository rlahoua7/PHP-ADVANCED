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

        $leeftijd = 0;

        while($leeftijd<18) {
            echo"k ben $leeftijd jaar, dus ik mag nog niet stemmen, waarbij $leeftijd de waarde heeft van de variabele leeftijd <br/>";
            $leeftijd ++;     
        }
        echo "ik ben 18, ik mag wel stemmen"
    ?>
</body>
</html>