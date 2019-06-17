<?php
  $isOk = true;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part2 exo8</title>
  </head>
  <body>
    <p>Traduire ce code avec des if et des else :
    <?php
      echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>
    </p>
    <?php
      echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>
    <?php
      if($isOk == false){
      echo 'c\'est ok !!';
    }else{
      'c\'est pas bon !!!';
    }
     ?>
  </body>
</html>
