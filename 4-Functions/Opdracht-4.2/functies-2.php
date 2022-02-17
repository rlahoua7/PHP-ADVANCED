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

    function rekenuit($a, $b, $c){
        $abc=$a + $b +$c;
        return $abc;
    }

    echo "als je de getallen 5, 5 en 5 bij elkaar optelt, is de uitkomst"." " .rekenuit(5,5,5);
    echo "<br>";
    echo "als je de getallen 4, 5 en 6 bij elkaar optelt, is de uitkomst"." " .rekenuit(4,5,6);
    echo "<br>";
    echo "als je de getallen 9, 8 en 10 bij elkaar optelt, is de uitkomst"." ".rekenuit(9,8,10);

    ?>
</body>
</html>