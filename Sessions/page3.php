<?php 

  session_start();
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : false;
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;

  echo $name . '<BR>';
  echo $email . '<BR>';

  print_r($_SESSION);
  
  //  unset($_SESSION['name']); // Unsets only 1 session var
  // session_unset();   // Unsets ALL session vars... print_r() Displays: Array()
  session_destroy();  // Unsets ALL session vars AND destroys the session... print_r() Displays: Array()


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 3</title>
</head>
<body>
  <h1>Page 3</h1>

  <a href="page1.php">Page 1</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a>

</body>
</html>