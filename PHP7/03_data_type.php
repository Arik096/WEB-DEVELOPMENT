<!DOCTYPE html>
<html>
  <head>
    <title>Data Type</title>
  </head>
  <body>
    <?php
    $a = 12;
    echo var_dump($a);
    echo "<br>";

    $b = 12.12;
    echo var_dump($b);
    echo "<br>";

    $c = true;
    echo var_dump($c);
    echo "<br>";

    $d = array("arik","puja");
    echo var_dump($d);
    echo "<br>";

    //object in php
    class Car {
    function Car($x) {
        $this->model = $x;
        }
    }
  $BMW = new Car("BMW");
  echo $BMW->model;

  $h=null;
  echo "<br>";
  echo var_dump($h);
      ?>
  </body>
</html>
