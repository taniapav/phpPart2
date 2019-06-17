<?php
  $isOk = false;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part2 exo 7</title>
  </head>
  <body>
    <p>Traduire ce code avec des if et des else :
    <?php
       echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
    </p>
    
    <?php
     if ($isOk == !true){
       echo 'c\'est pas bon !!!';
     }else {
       'c\'est ok !!';
     }
     ?>
  </body>
</html>
