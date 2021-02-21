<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //VARIABLES

  //Is a symbol or name that stands for a value
  $name="Ioan";

  echo "My name is " . $name . "<br>";
  echo $name . "is 34 years old". "<br>";

  //Variable names
  //Variable name start with a letter A-Z, a-z, underscore (_), followed by any number of letters, numbers, or underscores.
  $name = "Ioan"; //Valid
  $Name = "Ioan"; //Valid
  // $9name = "Ioan"; //Invalid
  $_name = "Ioan"; //Valid
  $_9name = "ioan"; //Valid

  //Add variables in echo / print
  $age = 24;
  //single quotes - variable is echoed as it is ($age)
  echo 'My and is $age';
  //double quotes - the value of the variable is echoed (24)
  echo "My and is $age";


  ?>
</body>
</html>