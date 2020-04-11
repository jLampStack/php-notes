<?php 

  session_start();
  
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : false;
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;

  echo $name . '<BR>';
  echo $email . '<BR>';

  print_r($_SESSION);

  echo '<BR><BR><BR>';

  echo session_id();
  echo session_status;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 2</title>
</head>
<body>
  <h1>Page 2</h1>

  <a href="page1.php">Page 1</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a>
</body>
</html>