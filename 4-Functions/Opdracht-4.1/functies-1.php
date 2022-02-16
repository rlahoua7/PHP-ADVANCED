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

    kleuren("#FF0000");
    kleuren("#008000");
    kleuren("#0000FF");
    kleuren("#FFFF00");

    function kleuren($kleur){

        echo "<div style='color:" .$kleur."';>deze teskst heeft de kleur $kleur</div>";
    }

    ?>
</body>
</html>