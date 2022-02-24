<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
 <form name="invoer" action="advanced-2.php" method="post">
    <option>Kleur-text</option>
    <select name="Kleur-text" id="Kleur-text">
    <?php $kleuren = array ("Brown", "Blue", "Green", "Black", "Pink", "Red");
    foreach($kleuren as $kleur){
        echo "<option value = $kleur> $kleur</option>"; } 
 ?>


 </select>
 <option>Kleur-achtergrond</option>
 <select name="Kleur-achtergrond" id="Kleur-achtergrond">
     <?php $kleuren = array(" Green", "Red", "Brown", "Black", "Blue", "Pink"); 
     foreach($kleuren as $achtergrond_color){
         echo "<option value = $achtergrond_color>$achtergrond_color</option>";
     }
     ?>
 </select>  



    <div>
    <option>table-padding (px)</option>
  <input type="text" name="padding">
    </div>
   </div>
    <div> <input type="submit" name="submit" value="verstuur">
         </div>

    <div>
   <option>zijkant (px)</option>
  <input type="text" name="zkname">
   </div>
 <form>
</center>
</body>
</html>