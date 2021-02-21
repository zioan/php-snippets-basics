<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic PHP</title>
</head>
<body>
  <?php
  //Concat
  echo "My name is " . "Ioan";

  $name = "Ioan";
  echo "My name is " . $name;

  //Coments

  //single line
  #single line

  /*
  multi
  line
  comment
  */

  //Line break
  echo nl2br("My name is Ioan \r\n and this is the second line");

  echo "This is first line <br>";
  echo "This is second line";

  echo "This is first line" . "<br>";
  echo "This is second line";

  $myVariable= "something";
  echo "This is " . $myVariable . "<br>";
  echo "This is second line";


  ?>
</body>
</html>