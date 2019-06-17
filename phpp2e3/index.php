<?php
  $age = 25;
  $gender = 'homme';
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP part2 exo3</title>
   </head>
   <body>
     <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.</p>
     <?php
     if($age >= 18 && $gender == 'homme'){
       echo 'Vous êtes un homme et vous êtes majeur';
     }elseif ($age < 18 && $gender == 'homme'){
       echo 'Vous ëtes un homme et vous êtes mineur';
     }elseif ($age >=18 && $gender != 'homme'){
       echo 'Vous êtes une femme et vous êtes mineur';
     }else{
       echo 'Vous êtes une femme et vous êtes majeur';
     }
    ?>
   </body>
 </html>
