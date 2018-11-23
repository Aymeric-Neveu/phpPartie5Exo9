<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$département = array (
    69 => 'Nord-Pas-Calais',
    80 => 'Somme',
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise');

    foreach ($département as $element){
      echo $element;
    }
    ?>
  </body>
</html>
