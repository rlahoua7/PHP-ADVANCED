<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zending.php">

    <label for="klas">ik zit in deze klas:</label>

<select>

    <?php 

    echo "<ul>";

    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

    foreach ($klassen as $klas){

     ?>

    <option>
        <?php echo"<li>$klas</li>" ?> 
    </option>

    <?php
    }
    echo "</ul>";                    
    ?>

 </select>
  <input type="submit" name="submit" value="verzenden">  
</form>
</center>
</body>
</html>.