<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    
  body {
      color: <?= $_POST["Kleur-text"] ?>;
      background-color: <?= $_POST["Kleur-achtergrond"] ?>;
    }
  table,tr,td{
        border: <?= $_POST['zkname']?>px solid black;
        padding:<?= $_POST['padding']?>px;
    }
</style>
<center>
    
     <?php function maakRij($mijngegevens1,$value){
         echo "<tr>
         <td>".$mijngegevens1."</td>
         <td>".$value."</td>
         </tr> ";
     }
     ?>
<table>
       <?php
       $mijngegevens=array(
       "naam"=> "Rayan","Leefdtijd"=> 17,"muziekant"=> "Justin timberlake","woonplaats"=>"Hoofddorp","sport"=> "Voetbal");
       foreach($mijngegevens as $mijngegevens1 => $value){
          maakRij($mijngegevens1,$value);
       }
    
       ?>
</table> 
</center>
</body>
</html>