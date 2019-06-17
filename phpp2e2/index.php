<?php
  $isEasy = 9;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP part2 exo2</title>
   </head>
   <body>
     <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.</p>
     <?php
     if (($isEasy >= 0 && $isEasy <= 10) == false){
       echo 'C\'est difficile!! ';
     }else{
       echo 'C\'est facile !!!';
     }
      ?>

      <?php
      if (!($isEasy >= 0 && $isEasy <= 10)){
        echo 'C\'est difficile!! ';
     }else{
       echo 'C\'est facile !!!';
     }
        ?>
   </body>
 </html>
