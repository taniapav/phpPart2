<?php
$gender = 'Homme'; 
?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP part2 exo5</title>
   </head>
   <body>
     <p>Traduire ce code avec des if et des else :
        <?php
          echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
         ?>
     </p>
    <?php
    if ($gender != 'Homme'){
      echo 'C\'est une développeuse !!!';
    }else{
      echo 'C\'est un développeur !!!';
    }
     ?>
   </body>
 </html>
