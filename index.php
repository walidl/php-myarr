<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      div{

        display: flex;
        align-items: center;
      }

      h3{

        margin-right: 10px;
        color: crimson;
      }
    </style>
  </head>
  <body>


    <?php

      $length = $_GET["dim"];

      $sum = 0;
      $max = 0;

      for ($i=0; $i < $length ; $i++) {

        $array[] = rand(1,100);

        $sum += $array[$i];

        if ($array[$i] > $max) {

          $max = $array[$i];
        }
      }

      var_dump($array);
    ?>

    <div class="">
      <h3>Somma: </h3> <?php echo $sum ?>

    </div>
    <div class="">

      <h3>Max: </h3> <?php echo $max ?>
    </div>

  </body>
</html>
