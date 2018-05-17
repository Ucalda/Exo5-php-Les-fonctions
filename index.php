<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo php 5</title>
  </head>
  <body>
    <?php
    //EXO 1
    function returnTrue(){
      return true;
    }
     echo returnTrue();
     echo "<br>";

     //EXO 2
     function chaine($CH = "chaine"){
       return $CH;
     }
     echo chaine("bob");
     echo "<br>";

     //EXO 3
     function chaines($CH1 = "voiture ", $CH2 = "sportive"){
       return $CH1 . $CH2;
     }
     echo chaines();
     echo "<br>";

     //EXO 4
     function douleur($AIE, $AIE2){
       if ($AIE > $AIE2){
         return "Le premier nombre est le plus grand";
       }elseif ($AIE < $AIE2){
         return " Le premier nombre est plus peti";
       }else {
         return "Les nombres sont identiques";
       }
     }
     echo douleur(10, 8);
     echo "<br>";

     //EXO 5
     function souffrir($OUILL = 0, $OUILL2 = ""){
       return $OUILL . $OUILL2;
     }
     echo souffrir(12, " Michel");
     echo "<br>";

     //EXO 6

     function hello($prenom, $nom, $age){
       return "Bonjour $prenom $nom, tu as $age ans";
     }
     echo hello("Peter", "petitgros", 67);
     echo "<br>";

     //EXO 7
     function pegi($age = 10, $genre = homme )

     ?>
