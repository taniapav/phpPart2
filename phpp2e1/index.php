<?php
// On crée une variable $age et l'on initialise à 19.
  $age = 19;
 ?>
 <!DOCTYPE html></p>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP part2 exo1</title>
   </head>
   <body>
     <p>Créer une variable age et l'initialiser avec une valeur.
         Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
         Dans le cas contraire, afficher Vous êtes mineur.</p>
     <?php if ( $age >= 18){?>
     <p>Vous êtes majeur.</P>
       <?php }
    else{ ?>
     <p>Vous êtes mineur.</p>
      
    <?php }
    ?>
    <p>
    <?php
    if ($age >=18){
      echo 'Vous êtes majeur';
    }else{
      echo('Vous êtes mineur');
    }
     ?>
     </p>
   </body>
 </html>
