<?php
  $age = 19;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP part2 exo6</title>
   </head>
   <body>
     <p>Traduire ce code avec des if et des else :
     <?php
       echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
      ?>
</p>
   
     <?php
      if ($age >= 18){
        echo 'Tu es majeur.';
      }else {
        'Tu n\'es pas majeur.';
      }
      ?>
   </body>
 </html>
