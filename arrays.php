<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php

  $car1 = "BMW";
  $car2 = "Audi";
  $car3 = "Mercedes";

  $cars = array("BMW", "Audi", "Mercedes");
  echo $cars[1];

  echo "<br>";

  $myCar = array("Audi", 2015, "40.135 km");
  //var_dump echo the array as it is (indexes, values and data types)
  //array(3) { [0]=> string(4) "Audi" [1]=> int(2015) [2]=> float(40.135) }
  var_dump($myCar);

  //print_r echo the array in a more readable way
  //Array ( [0] => Audi [1] => 2015 [2] => 40.135 )
  print_r($myCar);

  //Merge arrays
  $cars1 = array("BMW", "Audi", "Mercedes");
  $cars2 = array("Volvo", "Chevy", "Volkswagen");
  $cars = array_merge($cars1, $cars2);

  //Associative arrays
  //"Bmw", "Audi" and "Mercedes" become the key (like a index)
  $cars = array("BMW" => 50.500, "Audi" => 40.350, "Mercedes" => 70.300);

  //another way
  $cars1["Mercedes"] = 70.300;
  $cars2["Audi"] = 40.350;


  //FOREACH loop (associated array)
  foreach($cars as $key => $value){
    echo "My " . $key . " has " . $value . " km." . "<br>";
  }

  //Multidimensional arrays
  

  ?>

</body>
</html>